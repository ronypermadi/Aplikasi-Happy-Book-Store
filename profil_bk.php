<?php
include 'header.php';
?>
<div class="container">
  <style media="screen">
  .jumbotron {
    position: relative;
    background: #000 url("img/3.png") center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
  }
  </style>
  <div class="jumbotron" align="center">
    <h2><font style="color:white;"><b>Happy Book Store</b></font></h2>
    <p><font style="color:white;">Toko Buku Terbesar & Terpercaya di Indonesia.</font></p>
  </div>
</div>

    <!--container start-->
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!--feature start-->
            <div class="text-center feature-head">
                <h1>welcome to Happy Book Store</h1>
                <p>Toko Buku Terbesar & Terpercaya di Indonesia</p>
            </div>
          </div>
          <div class="col-md-12">
            <div class="well" align="center"><h5><b>Data <?php echo nama_user($username); ?></b></label></h5></div>
              <div class="col-md-4">
                <div class="panel panel-default">
                  <div class="panel-heading">Informasi Data</div>
                  <div class="panel-body">
                    <ul class="list-group">
                      <li class="list-group-item"><a href="profil.php?menu=dataku"><b>Data Pribadi<b></a></li>
                      <li class="list-group-item"><a href="profil.php?menu=status_pesananku"><b>Status Pesanan<b></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <?php
                $menu= $_REQUEST['menu'];
                if ($menu=="dataku") { ?>
                <div class="person text-center">
                    <img src="img/team/team_img2.jpg" alt="">
                </div>
                <div class="person-info text-center">
                    <h4>
                        <a href="javascript:;"><?php echo nama_user($username); ?></a>
                    </h4>
                    <p class="text-muted"> Member Happy Book</p>
                    <?php
                     $hasil = mysql_query("SELECT * FROM kasir WHERE username='$username'", $id_mysql);
                     ?>
                    <table class="table">
                      <?php while ($baris=mysql_fetch_array($hasil)) {?>
                      <tbody>
                      <tr align="left">
                        <td>Nama Lengkap</td><td><?php echo $baris['nama'] ?></td>
                      </tr>
                      <tr align="left">
                        <td>Alamat</td><td><?php echo $baris['alamat'] ?></td>
                      </tr>
                      <tr align="left">
                        <td>No.Hp</td><td><?php echo $baris['telepon'] ?></td>
                      </tr>
                      <tr align="left">
                        <td>Status</td><td><?php echo $baris['status'] ?></td>
                      </tr>
                      </tbody>
                        <?php } ?>
                    </table>
                </div>
                <?php } if ($menu=="status_pesananku") { ?>
                  <h5 class="title" align="center">Riyawat Pesanan <b><?php echo nama_user($username); ?></b></h5>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Pemesanan</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Detail</th>
                        </tr>
                        </thead>
                        <tbody>
      <?php
      $no=1;
      $ambil_data_pemesanan = mysql_query("SELECT * FROM pemesanan WHERE id_kasir='$_SESSION[id_kasir]'");
      while ($tampil_data_pemesanan=mysql_fetch_array($ambil_data_pemesanan)){
        $ambil_data_pembayaran = mysql_query("SELECT * FROM pembayaran WHERE kode_pemesanan='$tampil_data_pemesanan[kode_pemesanan]'");
        $baris=mysql_fetch_array($ambil_data_pembayaran);
      if (empty($baris)){
        $baris['status'] = "Belum Membayar";
        }
      ?>
                              <tr>
                                <td><?php echo " $no "; ?></td>
                                <td><?php echo $tampil_data_pemesanan['kode_pemesanan'] ?></td>
                                <td class="text-left">
                                  <?php echo $baris['status']; if($baris['status'] == "Belum Membayar"){ ?>
                                    (<a href="profil.php?menu=konfirmasi_pesananku&id=<?php echo $tampil_data_pemesanan['kode_pemesanan']; ?>">Konfirmasi</a>)
                                    <?php } ?>
                                </td>
                                <td><?php echo 'Rp '.number_format($tampil_data_pemesanan['total']) ?></td>
                                <td><a href="profil.php?menu=status_pesananku&id=<?php echo $tampil_data_pemesanan['kode_pemesanan']; ?>">Detail</a></td>
                              </tr>
                              <?php $no++;}?>
                        </tbody>
                    </table>
                  <?php
                  $ambil_data = mysql_query("SELECT * FROM pemesanan JOIN detail_pemesanan JOIN buku ON pemesanan.kode_pemesanan=detail_pemesanan.kode_pemesanan AND detail_pemesanan.id_buku=buku.id_buku WHERE  pemesanan.kode_pemesanan='$_GET[id]'");
                  ?>
                  <h5 class="title" align="center">Detail Pesanan <b><?php echo $_GET[id] ?></b></h5>
                  <div class="table-responsive">
                    <table class=table table-striped table-hover table-bordered>
                      <thead>
                        <tr>
                          <td>No</td>
                          <td class="text-center">Picture</td>
                          <td class="text-left">Judul Buku</td>
                          <td>No. ISBN</td>
                          <td class="text-left">Jumlah</td>
                          <td>Harga</td>
                          <td>Total</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
    $n=1; while ($tampil_data=mysql_fetch_array($ambil_data)){
    $total = $tampil_data['harga_pemesanan']*$tampil_data['jumlah_pemesanan'];?>
                        <tr>
                          <td><?php echo $n; ?></td>
                          <td class="text-center"><?php echo "<img src=admin/img/buku/".$tampil_data['foto']." width=50 height=50>"; ?></td>
                          <td>
                            <input type="hidden" name="id_buku" value="<?php echo $tampil_data['id_buku']; ?>">
                            <?php echo $tampil_data['judul']; ?>
                          </td>
                          <td><?php echo $tampil_data['noisbn']; ?></td>
                          <td>
                            <div class="input-group btn-block quantity">
                                  <input type="text" value="<?php echo $tampil_data['jumlah_pemesanan']; ?>" required class="form-control" disabled />
                            </div>
                            </td>
                          <td><?php echo 'Rp' . number_format($tampil_data['harga_jual']); ?></td>
                          <td><?php echo 'Rp' . number_format($total); ?></td>
                        </tr>
                        <?php
                        if($n=="1"){
                          $ongkir= 10000;
                          $total = $total + $ongkir;
                          $total_transaksi = $total;
                        }else
                          $total_transaksi = $total_transaksi + $total;
                          $n++;
                        }
                       ?>
                      </tbody>
                    </table>
                  </div>
                <div class="row">
                  <div class="col-sm-4 col-sm-offset-8">
                    <?php
                    $n=1;
                    $ambil_data = mysql_query("SELECT * FROM pemesanan JOIN detail_pemesanan JOIN buku ON pemesanan.kode_pemesanan=detail_pemesanan.kode_pemesanan AND detail_pemesanan.id_buku=buku.id_buku WHERE  pemesanan.kode_pemesanan='$_GET[id]'");
                    $tampil_data= mysql_fetch_array($ambil_data);
                    $ongkir= 10000;
                    ?>
                    <table class="table table-bordered">
                      <tr>
                        <td class="text-center"><strong>Biaya Kirim</strong></td>
                        <td class="text-center"><?php echo 'Rp' . number_format($ongkir); ?></td>
                      </tr>
                      <tr>
                        <td class="text-center"><strong>Total Biaya</strong></td>
                        <td class="text-center"><?php echo 'Rp' . number_format($tampil_data['total']); ?></td>
                      </tr>
                      <h6 align="center"><i>* Biaya Kirim Untuk Seluruh Wilayah Indonesia.</i></h6>
                    </table>
                  </div>
                </div>
                <?php } if ($menu=="konfirmasi_pesananku") {?>
                  <h4 class="title" align="center">Konfirmasi Pesanan <b><?php echo $_GET[id] ?></b></h4>
                  <?php
                      $ambil_data	= mysql_query("SELECT * FROM pemesanan WHERE kode_pemesanan='$_GET[id]'");
                      $tampil_data= mysql_fetch_array($ambil_data);
                  ?>
                  <form  action="proses.php?menu=konfirmasi&act=tambah" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="control-label" for="input-email">Kode Pemesanan</label>
                      <input type="text" name="kode_pemesanan1" value="<?php echo $_GET['id']; ?>" disabled="" class="form-control" />
                      <input type="hidden" name="kode_pemesanan" value="<?php echo $_GET['id']; ?>"  />
                      <input type="hidden" name="total" value="<?php echo $tampil_data['total']; ?>"  />
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="input-email">Nominal ( Total Biaya : <?php echo 'Rp '.number_format($tampil_data['total']); ?> )</label>
                      <input type="number" name="nominal" required placeholder="Nominal Transfer" class="form-control" /><br/>
                      <label for="">*Untuk pembayaran silahkan transfer ke <b> Bank BRI </b> dengan No.Rekening : <b> 359201026431532 </b> A.N <b> RONY PERMADI </b></label><br/>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="input-email">Tanggal Kirim</label>
                      <input type="text" class="form-control" id="datepicker" name="tgl_kirim">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="input-email">Bukti Transfer</label><br/>
                      <img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
                      <input type="file" id="uploadImage"  name="gambar" onchange="PreviewImage();"><br/>
                      <label>*Lampirkan bukti transfer pembayaran untuk proses verifikasi</label>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Selesaikan Pembayaran" class="btn btn-primary" />
                      <input type="reset" value="Reset" class="btn btn-warning" />
                    </form>
                <?php }?>
              </div>
          </div>
        </div>
      </div><br />
     <!--parallax start-->
     <section class="parallax1">
         <div class="container">
           <div class="row">
               <h1>“Ada banyak cara kecil untuk meluaskan dunia anak-anak. Cinta Buku adalah yang terbaik dari segalanya.” (Jacqueline Kennedy)</h1>
           </div>
         </div>
     </section>
     <!--parallax end-->
     <?php
     include 'footer.php';
     ?>
