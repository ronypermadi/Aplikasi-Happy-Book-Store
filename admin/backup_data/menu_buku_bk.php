<?php
$show_buku = show_buku();
 ?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <!-- page start-->
      <section class="panel">
          <header class="panel-heading">
              Menu Pengelolaan Buku
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
                  <div class="clearfix">
                      <div class="btn-group">
                          <button type="button" data-toggle="collapse" data-target="#tambah_data" class="btn green">
                              Tambah <i class="icon-plus"></i>
                          </button>
                      </div>
                      <div class="btn-group pull-right">
                          <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                          </button>
                          <ul class="dropdown-menu pull-right">
                              <li><a href="#">Print</a></li>
                              <li><a href="#">Save as PDF</a></li>
                              <li><a href="#">Export to Excel</a></li>
                          </ul>
                      </div>
                  </div>

                  <div id=tambah_data class="panel-collapse collapse">
                    <div class="panel-body">
                  <div class="row">
                              <div class="col-md-12">
                                    <form action="proses.php" method=POST enctype="multipart/form-data" role="form">
                                      <div class="col-md-6">
                                   <div class="form-group">
                                        <label>ID Buku :</label>
                                        <input class="form-control" name="id_buku" placeholder="ID Buku" /required>
                                   </div>
                                   <div class="form-group">
                                        <label>Judul :</label>
                                        <input class="form-control" name="judul" placeholder="Judul" /required>
                                   </div>
                                   <div class="form-group">
                                        <label>ISBN :</label>
                                        <input class="form-control" name="noisbn" placeholder="ISBN" /required>
                                   </div>
                                   <div class="form-group">
                                        <label>Penulis :</label>
                                        <input class="form-control" name="penulis" placeholder="Penulis" /required>
                                   </div>
                                   <div class="form-group">
                                        <label>Penerbit :</label>
                                        <input class="form-control" name="penerbit" placeholder="Penerbit" /required>
                                   </div>
                                   <div class="form-group">
                                        <label>Tahun :</label>
                                        <input class="form-control" name="tahun" placeholder="Tahun" /required>
                                   </div>
                                   <div class="form-group">
                                        <label>Stok :</label>
                                        <input class="form-control" name="stok" placeholder="Stok" /required>
                                   </div></div>
                                   <div class="col-md-6">
                                   <div class="form-group">
                                        <label>Harga Pokok :</label>
                                        <input class="form-control" name="harga_pokok" placeholder="Harga Pokok" /required>
                                   </div>
                                   <div class="form-group">
                                        <label>Harga Jual :</label>
                                        <input class="form-control" name="harga_jual" placeholder="Harga Jual" /required>
                                   </div>
                                   <div class="form-group">
                                        <label>PPN :</label>
                                        <input class="form-control" name="ppn" placeholder="PPN" /required>
                                   </div>
                                   <div class="form-group">
                                        <label>Diskon :</label>
                                        <input class="form-control" name="diskon" placeholder="Diskon" /required>
                                   </div>
                                     <div class="col-md-6">
                                       <div class="form-group">
                                       <label>Gambar :</label><br>
                                       <img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
                                       <input type="file" id="uploadImage"  name="gambar" onchange="PreviewImage();" />
                                     </div>
                                     </div><br/>
                                     <div class="col-md-6">
                                       <div class="form-group">
                                       <label>Keterangan :</label><br>
                                       <textarea class="form-control"  name="keterangan"></textarea>
                                     </div>
                                     </div><br/>
                                   </div>
                              </div><!-- /.col -->
                            </div><!-- /.row -->
                          </div>
                          <div class="panel-footer" align="center">
                            <button type="submit" name="add_buku" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-default">Reset </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div></form>
                        </div>
                  <div class="space15"></div>
                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Picture</th>
                          <th>Judul</th>
                          <th>Stok</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;  while ($baris= mysql_fetch_array($show_buku)){?>
                            <tr>
                              <td><?php echo " $no "; ?></td>
                              <td align="center">
                                <?php echo
                                "<div align='center' title='".$baris['foto']."'>
                                <img src=img/buku/".$baris['foto']." width=50 height=50>"; ?>
                                </td>
                              <td><?php echo $baris['judul'] ?></td>
                              <td><?php echo $baris['stok'] ?></td>
                              <td>
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_buku']; ?>" class="btn btn-primary">Detail</button>
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#<?php echo $baris['id_buku']; ?>" class="btn green">Edit</button>
                                <!-- Modal -->
                                <div class="modal fade" id="detail-<?php echo $baris['id_buku']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" style="width:1150px">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Detail Data Buku</h4>
                                      </div>
                                      <div class="modal-body">
                                <div class="btn-group" data-toggle="buttons">

                                <div class="row">
                                            <div class="col-md-12">
                                              <div class="box">
                                                <div class="box-body" style="width:1100px">
                                                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                                      <thead>
                                                      <tr>
                                                          <th>No</th>
                                                          <th>ID Buku</th>
                                                          <th>ISBN</th>
                                                          <th>Judul</th>
                                                          <th>Penulis</th>
                                                          <th>Penerbit</th>
                                                          <th>Tahun</th>
                                                          <th>Stok</th>
                                                          <th>Harga Pokok</th>
                                                          <th>Harga Jual</th>
                                                          <th>PPN</th>
                                                          <th>Diskon</th>
                                                      </tr>
                                                      </thead>
                                                      <tbody>
                                                            <tr>
                                                              <td><?php echo " $no "; ?></td>
                                                              <td><?php echo $baris['id_buku']?></td>
                                                              <td><?php echo $baris['noisbn'] ?></td>
                                                              <td><?php echo $baris['judul'] ?></td>
                                                              <td><?php echo $baris['penulis'] ?></td>
                                                              <td><?php echo $baris['penerbit'] ?></td>
                                                              <td><?php echo $baris['tahun'] ?></td>
                                                              <td><?php echo $baris['stok'] ?></td>
                                                              <td><?php echo 'Rp '. number_format($baris['harga_pokok']) ?></td>
                                                              <td><?php echo  'Rp '. number_format($baris['harga_jual']) ?></td>
                                                              <td><?php echo $baris['ppn'] ?></td>
                                                              <td><?php echo $baris['diskon'] ?></td>
                                                            </tr>
                                                    </tbody>
                                                  </table>
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
                                <div class="modal fade" id="<?php echo $baris['id_buku']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" style="width:600px">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Edit Data Buku</h4>
                                      </div>
                                      <div class="modal-body">
                                <div class="btn-group" data-toggle="buttons">

                                <div class="row">
                                            <div class="col-md-12">
                                              <div class="box">
                                                <div class="box-body" style="width:550px">

                                                  <form action="proses.php" method=POST enctype="multipart/form-data" role="form">
                                                    <div class="col-md-6">
                                                 <div class="form-group">
                                                      <label>ID Buku :</label>
                                                      <input class="form-control" name="id_buku" value="<?php echo $baris['id_buku'];?>">
                                                 </div>
                                                 <div class="form-group">
                                                      <label>Judul :</label>
                                                      <input class="form-control" name="judul" value="<?php echo $baris['judul'];?>">
                                                 </div>
                                                 <div class="form-group">
                                                      <label>ISBN :</label>
                                                      <input class="form-control" name="noisbn" value="<?php echo $baris['noisbn'];?>">
                                                 </div>
                                                 <div class="form-group">
                                                      <label>Penulis :</label>
                                                      <input class="form-control" name="penulis" value="<?php echo $baris['penulis'];?>">
                                                 </div>
                                                 <div class="form-group">
                                                      <label>Penerbit :</label>
                                                      <input class="form-control" name="penerbit" value="<?php echo $baris['penerbit'];?>">
                                                 </div>
                                               <div class="form-group">
                                                      <label>Tahun :</label>
                                                      <input class="form-control" name="tahun" value="<?php echo $baris['tahun'];?>">
                                                 </div></div>
                                                 <div class="col-md-6">
                                                 <div class="form-group">
                                                      <label>Stok :</label>
                                                      <input class="form-control" name="stok" value="<?php echo $baris['stok'];?>">
                                                 </div>
                                                 <div class="form-group">
                                                      <label>Harga Pokok :</label>
                                                      <input class="form-control" name="harga_pokok" value="<?php echo $baris['harga_pokok'];?>">
                                                 </div>
                                                 <div class="form-group">
                                                      <label>Harga Jual :</label>
                                                      <input class="form-control" name="harga_jual" value="<?php echo $baris['harga_jual'];?>">
                                                 </div>
                                                 <div class="form-group">
                                                      <label>PPN :</label>
                                                      <input class="form-control" name="ppn" value="<?php echo $baris['ppn'];?>">
                                                 </div>
                                                 <div class="form-group">
                                                      <label>Diskon :</label>
                                                      <input class="form-control" name="diskon" value="<?php echo $baris['diskon'];?>">
                                                 </div>
                                               </div>


                                                </div><!-- /.box-body -->
                                              </div><!-- /.box -->
                                            </div><!-- /.col -->
                                          </div><!-- /.row -->


                                </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" name="edit_buku" class="btn btn-primary">Save</button>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div></form>
                                <a href="proses.php?id_buku=<?=$baris['id_buku'];?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a>
                            </td>
                            </tr>
                            <?php $no++;} ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </section>
      <!-- page end-->


</section>
<!--main content end-->
