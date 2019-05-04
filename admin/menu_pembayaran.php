<?php if ($akses=='1') { ?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <!-- page start-->
      <section class="panel">
          <header class="panel-heading">
              Menu Pengelolaan Pembayaran Transaksi Member
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
                  <h4 align="center">Data Pembayaran ( Belum Lunas )</h4>
                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Kode Pemesanan</th>
                          <th>Nama Pengirim</th>
                          <th>Bank</th>
                          <th>Bukti Pembayaran</th>
                          <th>Tanggal Kirim</th>
                          <th>Tanggal Pemesanan</th>
                          <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no=1;
                        $sql1 = mysql_query("SELECT * FROM pembayaran JOIN pemesanan ON pembayaran.kode_pemesanan=pemesanan.kode_pemesanan  WHERE pembayaran.status='Belum Lunas'",$id_mysql);
                        while ($hasil1=mysql_fetch_array($sql1)) {?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $hasil1['kode_pemesanan'] ?></td>
                          <td><?php echo nama_kasir($hasil1['id_kasir']) ?></td>
                          <td><?php echo $hasil1['bank'] ?></td>
                          <td align="center">
                            <?php echo "<img src=img/bukti_transfer/".$hasil1['bukti_transfer']." width=100 height=100>"; ?>
                            </td>
                          <td><?php echo list_tanggal($hasil1['tgl_kirim']) ?></td>
                          <td><?php echo list_tanggal($hasil1['tanggal']) ?></td>
                          <td><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#<?php echo $hasil1['kode_pemesanan']; ?>" class="btn green">Edit</button></td>
                          <!-- Modal -->
                          <div class="modal fade" id="<?php echo $hasil1['kode_pemesanan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" style="width:600px">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Edit Data Pembayaran <b><?php echo $hasil1['kode_pemesanan']; ?></b></h4>
                                </div>
                                <div class="modal-body">
                          <div class="btn-group" data-toggle="buttons">

                          <div class="row">
                                      <div class="col-md-12">
                                        <div class="box">
                                          <div class="box-body" style="width:550px">
                                            <form  action="proses.php" method="POST" enctype="multipart/form-data">
                                              <div class="form-group">
                                                <label class="control-label" for="input-email">Kode Pemesanan</label>
                                                <input type="text" name="kode_pemesanan" value="<?php echo $hasil1['kode_pemesanan'] ?>" disabled="" class="form-control" />
                                                <input type="hidden" name="kode_pemesanan" value="<?php echo $hasil1['kode_pemesanan'] ?>">
                                              </div>
                                              <div class="form-group">
                                                <label class="control-label" for="input-email">Nominal ( Total Biaya : <?php echo 'Rp '.number_format($hasil1['total']); ?> )</label>
                                                <input type="number" name="nominal" required placeholder="Nominal Transfer" class="form-control" value="<?php echo $hasil1['nominal'] ?>" disabled /><br/>
                                              </div>
                                              <div class="form-group">
                                                <label class="control-label" for="input-email">Tanggal Kirim</label>
                                                <input type="text" class="form-control" id="datepicker" name="tgl_kirim" value="<?php echo list_tanggal($hasil1['tgl_kirim']) ?>" disabled>
                                              </div>
                                              <div class="form-group">
                                                <label class="control-label" for="input-email">Bukti Transfer</label><br/>
                                                <?php echo "<img src=img/bukti_transfer/".$hasil1['bukti_transfer']." style='width: 150px; height: 150px;'>"; ?>
                                              </div>
                                              <div class="form-group">
                                                <select class="form-control select2" name="status" required="">
                                              <option value="<?php echo $hasil1['status']; ?>"><?php echo $hasil1['status']; ?></option>
                                              <option value="Lunas">Lunas</option>
                                                  </select>
                                              </div>
                                          </div><!-- /.box-body -->
                                        </div><!-- /.box -->
                                      </div><!-- /.col -->
                                    </div><!-- /.row -->


                          </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit"  name="edit_pembayaran" class="btn btn-primary">Update Status</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div></form>
                        </tr>
                        <?php $no++; } ?>
                      </tbody>
                  </table>

                  <h4 align="center">Data Pembayaran ( Lunas )</h4>
                  <table class="table table-striped table-hover table-bordered" id="editable-sample1">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Kode Pemesanan</th>
                          <th>Nama Pengirim</th>
                          <th>Bank</th>
                          <th>Bukti Pembayaran</th>
                          <th>Tanggal Kirim</th>
                          <th>Tanggal Pemesanan</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php
                        $n=1;
                        $sql2 = mysql_query("SELECT * FROM pembayaran JOIN pemesanan ON pembayaran.kode_pemesanan=pemesanan.kode_pemesanan  WHERE pembayaran.status='Lunas'",$id_mysql);
                        while ($hasil2=mysql_fetch_array($sql2)) {?>
                        <tr>
                          <td><?php echo $n; ?></td>
                          <td><?php echo $hasil2['kode_pemesanan'] ?></td>
                          <td><?php echo nama_kasir($hasil2['id_kasir']) ?></td>
                          <td><?php echo $hasil2['bank'] ?></td>
                          <td align="center">
                            <?php echo "<img src=img/bukti_transfer/".$hasil2['bukti_transfer']." width=100 height=100>"; ?>
                            </td>
                          <td><?php echo list_tanggal($hasil2['tgl_kirim']) ?></td>
                          <td><?php echo list_tanggal($hasil2['tanggal']) ?></td>
                        </tr>
                        <?php $n++; } ?>
                      </tbody>
                  </table>
        </div>
      </div>
 </section>
                  <!-- page end-->
</section>
<?php } else
  echo "Anda tidak berhak mengakses file ini";
  if($akses=='4'){ ?>
    <section id="main-content">
        <section class="wrapper">
          <!-- page start-->
          <section class="panel">
              <header class="panel-heading">
                  Menu Pengelolaan Pembayaran Transaksi Member
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
                      <h4 align="center">Data Pembayaran ( Belum Lunas )</h4>
                      <table class="table table-striped table-hover table-bordered" id="editable-sample">
                          <thead>
                          <tr>
                              <th>No</th>
                              <th>Kode Pemesanan</th>
                              <th>Nama Pengirim</th>
                              <th>Bank</th>
                              <th>Bukti Pembayaran</th>
                              <th>Tanggal Kirim</th>
                              <th>Tanggal Pemesanan</th>
                              <th>Aksi</th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php
                            $no=1;
                            $sql1 = mysql_query("SELECT * FROM pembayaran JOIN pemesanan ON pembayaran.kode_pemesanan=pemesanan.kode_pemesanan  WHERE pembayaran.status='Belum Lunas'",$id_mysql);
                            while ($hasil1=mysql_fetch_array($sql1)) {?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><?php echo $hasil1['kode_pemesanan'] ?></td>
                              <td><?php echo nama_kasir($hasil1['id_kasir']) ?></td>
                              <td><?php echo $hasil1['bank'] ?></td>
                              <td align="center">
                                <?php echo "<img src=img/bukti_transfer/".$hasil1['bukti_transfer']." width=100 height=100>"; ?>
                                </td>
                              <td><?php echo list_tanggal($hasil1['tgl_kirim']) ?></td>
                              <td><?php echo list_tanggal($hasil1['tanggal']) ?></td>
                              <td><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#<?php echo $hasil1['kode_pemesanan']; ?>" class="btn green">Edit</button></td>
                              <!-- Modal -->
                              <div class="modal fade" id="<?php echo $hasil1['kode_pemesanan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" style="width:600px">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Data Pembayaran <b><?php echo $hasil1['kode_pemesanan']; ?></b></h4>
                                    </div>
                                    <div class="modal-body">
                              <div class="btn-group" data-toggle="buttons">

                              <div class="row">
                                          <div class="col-md-12">
                                            <div class="box">
                                              <div class="box-body" style="width:550px">
                                                <form  action="proses.php" method="POST" enctype="multipart/form-data">
                                                  <div class="form-group">
                                                    <label class="control-label" for="input-email">Kode Pemesanan</label>
                                                    <input type="text" name="kode_pemesanan" value="<?php echo $hasil1['kode_pemesanan'] ?>" disabled="" class="form-control" />
                                                    <input type="hidden" name="kode_pemesanan" value="<?php echo $hasil1['kode_pemesanan'] ?>">
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="control-label" for="input-email">Nominal ( Total Biaya : <?php echo 'Rp '.number_format($hasil1['total']); ?> )</label>
                                                    <input type="number" name="nominal" required placeholder="Nominal Transfer" class="form-control" value="<?php echo $hasil1['nominal'] ?>" disabled /><br/>
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="control-label" for="input-email">Tanggal Kirim</label>
                                                    <input type="text" class="form-control" id="datepicker" name="tgl_kirim" value="<?php echo list_tanggal($hasil1['tgl_kirim']) ?>" disabled>
                                                  </div>
                                                  <div class="form-group">
                                                    <label class="control-label" for="input-email">Bukti Transfer</label><br/>
                                                    <?php echo "<img src=img/bukti_transfer/".$hasil1['bukti_transfer']." style='width: 150px; height: 150px;'>"; ?>
                                                  </div>
                                                  <div class="form-group">
                                                    <select class="form-control select2" name="status" required="">
                                                  <option value="<?php echo $hasil1['status']; ?>"><?php echo $hasil1['status']; ?></option>
                                                  <option value="Lunas">Lunas</option>
                                                      </select>
                                                  </div>
                                              </div><!-- /.box-body -->
                                            </div><!-- /.box -->
                                          </div><!-- /.col -->
                                        </div><!-- /.row -->


                              </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit"  name="edit_pembayaran" class="btn btn-primary">Update Status</button>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              </div></form>
                            </tr>
                            <?php $no++; } ?>
                          </tbody>
                      </table>

                      <h4 align="center">Data Pembayaran ( Lunas )</h4>
                      <table class="table table-striped table-hover table-bordered" id="editable-sample1">
                          <thead>
                          <tr>
                              <th>No</th>
                              <th>Kode Pemesanan</th>
                              <th>Nama Pengirim</th>
                              <th>Bank</th>
                              <th>Bukti Pembayaran</th>
                              <th>Tanggal Kirim</th>
                              <th>Tanggal Pemesanan</th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php
                            $n=1;
                            $sql2 = mysql_query("SELECT * FROM pembayaran JOIN pemesanan ON pembayaran.kode_pemesanan=pemesanan.kode_pemesanan  WHERE pembayaran.status='Lunas'",$id_mysql);
                            while ($hasil2=mysql_fetch_array($sql2)) {?>
                            <tr>
                              <td><?php echo $n; ?></td>
                              <td><?php echo $hasil2['kode_pemesanan'] ?></td>
                              <td><?php echo nama_kasir($hasil2['id_kasir']) ?></td>
                              <td><?php echo $hasil2['bank'] ?></td>
                              <td align="center">
                                <?php echo "<img src=img/bukti_transfer/".$hasil2['bukti_transfer']." width=100 height=100>"; ?>
                                </td>
                              <td><?php echo list_tanggal($hasil2['tgl_kirim']) ?></td>
                              <td><?php echo list_tanggal($hasil2['tanggal']) ?></td>
                            </tr>
                            <?php $n++; } ?>
                          </tbody>
                      </table>
            </div>
          </div>
     </section>
                      <!-- page end-->
    </section>
    <?php } else
      echo "Anda tidak berhak mengakses file ini"; ?>
