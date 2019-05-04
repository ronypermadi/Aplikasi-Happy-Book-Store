
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <!-- page start-->
      <section class="panel">
          <header class="panel-heading">
              Data Pemesanan Barang
          </header>
          <div class="panel-body">
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><img src="img/favicon.gif"  width="100%" /></td>
                <td style="text-align:center;">
                  <div>
                    <h3><b>HAPPY BOOK STORE</b></h3>
                    <h4>Jalan Masjid, Wonosari, Gunungkidul, Daerah Istimewa Yogyakarta, 55233</h4>
                    <h4>Telp. 085-602-082-990</h4>
                  </div>
                </td>
                <td style="font-size:16px;text-align:center;">
                </td>
              </tr>
            </table><br />
              <div class="adv-table editable-table ">
                  <div class="space15"></div>
                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Pemesanan</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Tanggal Pemesanan</th>
                      <th>Total</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
    $ambil_data = mysql_query("SELECT * FROM pemesanan JOIN kasir ON pemesanan.id_kasir=kasir.id_kasir ");
    $no=1;
    while ($tampil_data=mysql_fetch_array($ambil_data)){
    $ambil_data_pembayaran = mysql_query("SELECT * FROM pemesanan JOIN pembayaran ON pemesanan.kode_pemesanan=pembayaran.kode_pemesanan WHERE pemesanan.kode_pemesanan='$tampil_data[kode_pemesanan]' ");
    $tampil_data_pembayaran = mysql_fetch_array($ambil_data_pembayaran);
    if(empty($tampil_data_pembayaran['status'])){
    $tampil_data_pembayaran['status'] = "Belum Pembayaran";
}?>
                      <tr>
                        <td><?php echo $no; ?></td>
                          <td><?php echo $tampil_data['kode_pemesanan']; ?></td>
                          <td><?php echo $tampil_data['nama']; ?></td>
                          <td><?php echo $tampil_data_pembayaran['status']; ?></td>
                          <td><?php echo list_tanggal($tampil_data['tanggal']); ?></td>
                          <td><?php echo 'Rp '. number_format($tampil_data['total']); ?></td>
                          <td>
                              <a href=""><button data-toggle="modal" data-target="#detail-<?php echo $tampil_data['kode_pemesanan']; ?>" class="btn btn-primary" type="button" onClick=""><span>Details</span></button></a>
                              <!-- Modal -->
                              <div class="modal fade" id="detail-<?php echo $tampil_data['kode_pemesanan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="width:1200px">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel" align="center">Detail Pemesanan <b><?php echo $tampil_data['kode_pemesanan']; ?></b></h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="btn-group" data-toggle="buttons">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="box">
                                              <div class="box-body" style="width:1100px">
                                                <div class="table-responsive">
                                                <?php
                                                $sql= mysql_query("SELECT * FROM pemesanan JOIN detail_pemesanan JOIN buku ON pemesanan.kode_pemesanan=detail_pemesanan.kode_pemesanan AND detail_pemesanan.id_buku=buku.id_buku WHERE  pemesanan.kode_pemesanan='$tampil_data[kode_pemesanan]'");
                                                ?>
                                                  <table class="table table-striped table-hover table-bordered">
                                                    <thead>
                                                      <th>No</th>
                                                      <th class="text-center">Picture</th>
                                                      <th class="text-left">Judul Buku</th>
                                                      <th>No. ISBN</th>
                                                      <th class="text-left">Jumlah</th>
                                                      <th>Harga</th>
                                                      <th>Total</th>
                                                    </thead>
                                                    <tbody>
                                                      <?php
                                  $n=1; while ($tampil_dataku=mysql_fetch_array($sql)){
                                  $total = $tampil_dataku['harga_pemesanan']*$tampil_dataku['jumlah_pemesanan'];?>
                                                      <tr>
                                                        <td><?php echo $n; ?></td>
                                                        <td class="text-center"><?php echo "<img src=img/buku/".$tampil_dataku['foto']." width=50 height=50>"; ?></td>
                                                        <td>
                                                          <input type="hidden" name="id_buku" value="<?php echo $tampil_dataku['id_buku']; ?>">
                                                          <?php echo $tampil_dataku['judul']; ?>
                                                        </td>
                                                        <td><?php echo $tampil_dataku['noisbn']; ?></td>
                                                        <td>
                                                          <div class="input-group btn-block quantity">
                                                                <input type="text" value="<?php echo $tampil_dataku['jumlah_pemesanan']; ?>" required class="form-control" disabled />
                                                          </div>
                                                          </td>
                                                        <td><?php echo 'Rp' . number_format($tampil_dataku['harga_jual']); ?></td>
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
                                                    </tbody>
                                                  </table>
                                                </div>
                                                  <div class="row">
                                                    <div class="col-sm-4 col-sm-offset-8">
                                                      <table class="table table-bordered">
                                                        <tr>
                                                          <td class="text-center"><strong>Biaya Kirim</strong></td>
                                                          <td class="text-center"><?php echo 'Rp' . number_format($ongkir); ?></td>
                                                        </tr>
                                                        <tr>
                                                          <td class="text-center"><strong>Total Biaya</strong></td>
                                                          <td class="text-center"><?php echo 'Rp' . number_format($total_transaksi); ?></td>
                                                        </tr>
                                                        <h6 align="center"><i>* Biaya Kirim Untuk Seluruh Wilayah Indonesia.</i></h6>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div><!-- /.box-body -->
                                            </div><!-- /.box -->
                                          </div><!-- /.col -->
                                        </div><!-- /.row -->
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div>
                              <!-- Modal -->
                              <a href="proses.php?kode_pemesanan=<?php echo $tampil_data['kode_pemesanan']; ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
                          </td>
                        </tr>
                        <?php $no++; }  ?>
                  </tbody>
            </table>
        </div>
      </div>
 </section>
                  <!-- page end-->
</section>
