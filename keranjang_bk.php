<?php
if(!empty($_SESSION['shop_chart']))
    {
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
            <h3 class="title" align="center"><b>Shopping Chart</b></h3>
              <div class="table-responsive">
                <table class=table table-striped table-hover table-bordered>
                  <thead>
                    <tr>
                      <td>No</td>
                      <td class="text-center">Picture</td>
                      <td class="text-left">Judul Buku</td>
                      <td>No. ISBN</td>
                      <td class="text-left">Jumlah</td>
                      <td>Action</td>
                      <td>Harga</td>
                      <td>Total</td>
                    </tr>
                  </thead>
                  <tbody>
                      <form action="proses.php?menu=keranjang" method="POST">
                        <?php
                        $no=1; foreach($_SESSION['shop_chart'] as $id_produk=>$jml){
                          $ambil_data = mysql_query("SELECT * FROM buku WHERE  id_buku='$id_produk'");
                          $tampil_data=mysql_fetch_array($ambil_data);
                            $tampil_data['jumlah'] = $jml;
                            $total = $tampil_data['harga_jual']*$tampil_data['jumlah'];
                            ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                        <td class="text-center">
                          <a href=""><?php echo "<img src=admin/img/buku/".$tampil_data['foto']." width=50 height=50>"; ?> </a>
                          </td>
                      <td>
                        <a href=""><?php echo $tampil_data['judul']; ?></a>
                      </td>
                      <td>
                        <a href=""><?php echo $tampil_data['noisbn']; ?></a>
                      </td>
                      <td>
                        <div class="input-group btn-block quantity">
                              <input type="hidden" name="id[<?php echo $tampil_data['id_buku'];?>]" value="<?php echo $tampil_data['id_buku'];?>" />
                              <input type="text"name="jml[<?php echo $tampil_data['id_buku'];?>]"  value="<?php echo $tampil_data['jumlah']; ?>" required class="form-control" />
                        </div>
                        </td>
                        <td>
                          <button type="submit" data-toggle="tooltip" value="ubah" title="Update" name="aksi" class="btn btn-primary"><i class="icon-refresh"></i></button>
                          <a href="proses.php?menu=keranjang&aksi=hapus&id=<?php echo $tampil_data['id_buku'];?>"><button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger" onClick=""><i class="icon-remove-sign"></i></button></a>
                        </td>
                      <td><?php echo 'Rp' . number_format($tampil_data['harga_jual']); ?></td>
                      <td><?php echo 'Rp' . number_format($total); ?></td>
                    </tr>
                    <?php
                    if($no=="1"){
                      $ongkir= 10000;
                      $total = $total + $ongkir;
                      $total_transaksi = $total;
                    }else
                      $total_transaksi = $total_transaksi + $total;
                      $no++;
                    }
                  ?>
                  </tbody>
                </table>
              </div>
            <div class="row">
              <div class="col-sm-4 col-sm-offset-8">
                </form>
                <table class="table table-bordered">
                  <tr>
                    <td class="text-center"><strong>Biaya Kirim</strong></td>
                    <td class="text-center"><?php    echo 'Rp' . number_format($ongkir); ?></td>
                  </tr>
                  <tr>
                    <td class="text-center"><strong>Total Biaya</strong></td>
                    <td class="text-center"><?php    echo 'Rp' . number_format($total_transaksi); ?></td>
                  </tr>
                  <h6 align="center"><i>* Biaya Kirim Untuk Seluruh Wilayah Indonesia.</i></h6>
                </table>
                <a class="btn btn-primary" href="index.php?menu=check_out">Selanjutnya</a>
              </div>
            </div>
                </form>
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
     }
     else{
     	echo "<script>alert('Maaf Keranjang Anda Masih Kosong')</script>";
     	echo "<script>window.location='index.php';</script>";
     }
     ?>
