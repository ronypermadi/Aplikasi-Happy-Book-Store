<?php
include 'header.php';
?>
<?php if($akses=='1'){ ?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <!-- page start-->
      <section class="panel">
          <header class="panel-heading">
              Menu Pengelolaan User
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
                      <?php
                      $menu = $_REQUEST['menu'];
                      if ($menu=="user_kelola3") { ?>
                       <div class='btn-group pull-right'>
                         <button type=button class=btn btn-primary onClick=javascript:popUp('cetak_hak_akses.php?menu=cetak_kasir')>
                           Print <i class=icon-print></i>
                         </button>
                       </div>
                     <?php }
                     if ($menu=="user_kelola2") { ?>
                      <div class='btn-group pull-right'>
                        <button type=button class=btn btn-primary onClick=javascript:popUp('cetak_hak_akses.php?menu=cetak_petugas_gudang')>
                          Print <i class=icon-print></i>
                        </button>
                      </div>
                    <?php }
                    if ($menu=="user_kelola5") { ?>
                     <div class='btn-group pull-right'>
                       <button type=button class=btn btn-primary onClick=javascript:popUp('cetak_hak_akses.php?menu=cetak_member')>
                         Print <i class=icon-print></i>
                       </button>
                     </div>
                   <?php } ?>
                  </div>
                    <div id=tambah_data class="panel-collapse collapse">
                    <div class="panel-body">
                  <div class="row">
                              <div class="col-md-12">
                                    <?php
                                    $menu = $_REQUEST['menu'];
                                    if ($menu=="user_kelola1") { ?>
                                                      <form action="proses.php?menu=user_kelola1" method=POST enctype="multipart/form-data" role="form">
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                               <label>Nama :</label>
                                                               <input class="form-control" name="nama" placeholder="Nama Lengkap" /required>
                                                          </div>
                                                          <div class="form-group">
                                                               <label>Alamat :</label>
                                                               <input class="form-control" name="alamat" placeholder="Alamat" /required>
                                                          </div>
                                                          <div class="form-group">
                                                               <label>Telepon :</label>
                                                               <input class="form-control" name="telepon" placeholder="Telepon" /required>
                                                          </div>
                                                          <div class="form-group">
                                                               <label>Status :</label>
                                                               <select class="form-control m-bot15" name="status">
                                                                 <option value="1" name="status">Menikah</option>
                                                                 <option value="2" name="status">Belum Menikah</option>
                                                                 <option value="3" name="status">Duda</option>
                                                                 <option value="4" name="status">Janda</option>
                                                                 </select>
                                                          </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                          <div class="form-group">
                                                               <label>Username :</label>
                                                               <input class="form-control" name="username" placeholder="Username" /required>
                                                          </div>
                                                          <div class="form-group">
                                                               <label>Password :</label>
                                                               <input type="password" class="form-control" name="sandi" placeholder="Password" /required>
                                                          </div>
                                                          <div class="form-group">
                                                            <label>Gambar :</label><br>
                                                            <img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
                                                            <input type="file" id="uploadImage"  name="gambar" onchange="PreviewImage();" />
                                                          </div>
                                                        </div>
                                                </div><!-- /.col -->
                                              </div><!-- /.row -->
                                            </div>
                                            <div class="panel-footer" align="center">
                                              <button type="submit" name="add_user" class="btn btn-primary">Save</button>
                                              <button type="reset" class="btn btn-default">Reset </button>
                                              <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#tambah_data">Close</button>
                                            </div>
                                          </div></form>
                                        <?php }
                                        if ($menu=="user_kelola2") { ?>
                                                          <form action="proses.php?menu=user_kelola2" method=POST enctype="multipart/form-data" role="form">
                                                            <div class="col-md-6">
                                                              <div class="form-group">
                                                                   <label>Nama :</label>
                                                                   <input class="form-control" name="nama" placeholder="Nama Lengkap" /required>
                                                              </div>
                                                              <div class="form-group">
                                                                   <label>Alamat :</label>
                                                                   <input class="form-control" name="alamat" placeholder="Alamat" /required>
                                                              </div>
                                                              <div class="form-group">
                                                                   <label>Telepon :</label>
                                                                   <input class="form-control" name="telepon" placeholder="Telepon" /required>
                                                              </div>
                                                              <div class="form-group">
                                                                   <label>Status :</label>
                                                                   <select class="form-control m-bot15" name="status">
                                                                     <option value="1" name="status">Menikah</option>
                                                                     <option value="2" name="status">Belum Menikah</option>
                                                                     <option value="3" name="status">Duda</option>
                                                                     <option value="4" name="status">Janda</option>
                                                                     </select>
                                                              </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                              <div class="form-group">
                                                                   <label>Username :</label>
                                                                   <input class="form-control" name="username" placeholder="Username" /required>
                                                              </div>
                                                              <div class="form-group">
                                                                   <label>Password :</label>
                                                                   <input type="password" class="form-control" name="sandi" placeholder="Password" /required>
                                                              </div>
                                                              <div class="form-group">
                                                                <label>Gambar :</label><br>
                                                                <img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
                                                                <input type="file" id="uploadImage"  name="gambar" onchange="PreviewImage();" />
                                                              </div>
                                                            </div>
                                                    </div><!-- /.col -->
                                                  </div><!-- /.row -->
                                                </div>
                                                <div class="panel-footer" align="center">
                                                  <button type="submit" name="add_user" class="btn btn-primary">Save</button>
                                                  <button type="reset" class="btn btn-default">Reset </button>
                                                  <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#tambah_data">Close</button>
                                                </div>
                                              </div></form>
                                            <?php }
                                            if ($menu=="user_kelola3") { ?>
                                                              <form action="proses.php?menu=user_kelola3" method=POST enctype="multipart/form-data" role="form">
                                                                <div class="col-md-6">
                                                                  <div class="form-group">
                                                                       <label>Nama :</label>
                                                                       <input class="form-control" name="nama" placeholder="Nama Lengkap" /required>
                                                                  </div>
                                                                  <div class="form-group">
                                                                       <label>Alamat :</label>
                                                                       <input class="form-control" name="alamat" placeholder="Alamat" /required>
                                                                  </div>
                                                                  <div class="form-group">
                                                                       <label>Telepon :</label>
                                                                       <input class="form-control" name="telepon" placeholder="Telepon" /required>
                                                                  </div>
                                                                  <div class="form-group">
                                                                       <label>Status :</label>
                                                                       <select class="form-control m-bot15" name="status">
                                                                         <option value="1" name="status">Menikah</option>
                                                                         <option value="2" name="status">Belum Menikah</option>
                                                                         <option value="3" name="status">Duda</option>
                                                                         <option value="4" name="status">Janda</option>
                                                                         </select>
                                                                  </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                  <div class="form-group">
                                                                       <label>Username :</label>
                                                                       <input class="form-control" name="username" placeholder="Username" /required>
                                                                  </div>
                                                                  <div class="form-group">
                                                                       <label>Password :</label>
                                                                       <input type="password" class="form-control" name="sandi" placeholder="Password" /required>
                                                                  </div>
                                                                  <div class="form-group">
                                                                    <label>Gambar :</label><br>
                                                                    <img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
                                                                    <input type="file" id="uploadImage"  name="gambar" onchange="PreviewImage();" />
                                                                  </div>
                                                                </div>
                                                        </div><!-- /.col -->
                                                      </div><!-- /.row -->
                                                    </div>
                                                    <div class="panel-footer" align="center">
                                                      <button type="submit" name="add_user" class="btn btn-primary">Save</button>
                                                      <button type="reset" class="btn btn-default">Reset </button>
                                                      <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#tambah_data">Close</button>
                                                    </div>
                                                  </div></form>
                                                <?php }
                                                if ($menu=="user_kelola4") { ?>
                                                                  <form action="proses.php?menu=user_kelola4" method=POST enctype="multipart/form-data" role="form">
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                           <label>Nama :</label>
                                                                           <input class="form-control" name="nama" placeholder="Nama Lengkap" /required>
                                                                      </div>
                                                                      <div class="form-group">
                                                                           <label>Alamat :</label>
                                                                           <input class="form-control" name="alamat" placeholder="Alamat" /required>
                                                                      </div>
                                                                      <div class="form-group">
                                                                           <label>Telepon :</label>
                                                                           <input class="form-control" name="telepon" placeholder="Telepon" /required>
                                                                      </div>
                                                                      <div class="form-group">
                                                                           <label>Status :</label>
                                                                           <select class="form-control m-bot15" name="status">
                                                                             <option value="1" name="status">Menikah</option>
                                                                             <option value="2" name="status">Belum Menikah</option>
                                                                             <option value="3" name="status">Duda</option>
                                                                             <option value="4" name="status">Janda</option>
                                                                             </select>
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                      <div class="form-group">
                                                                           <label>Username :</label>
                                                                           <input class="form-control" name="username" placeholder="Username" /required>
                                                                      </div>
                                                                      <div class="form-group">
                                                                           <label>Password :</label>
                                                                           <input type="password" class="form-control" name="sandi" placeholder="Password" /required>
                                                                      </div>
                                                                      <div class="form-group">
                                                                        <label>Gambar :</label><br>
                                                                        <img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
                                                                        <input type="file" id="uploadImage"  name="gambar" onchange="PreviewImage();" />
                                                                      </div>
                                                                    </div>
                                                            </div><!-- /.col -->
                                                          </div><!-- /.row -->
                                                        </div>
                                                        <div class="panel-footer" align="center">
                                                          <button type="submit" name="add_user" class="btn btn-primary">Save</button>
                                                          <button type="reset" class="btn btn-default">Reset </button>
                                                          <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#tambah_data">Close</button>
                                                        </div>
                                                      </div></form>
                                                    <?php }
                                                    if ($menu=="user_kelola5") { ?>
                                                                      <form action="proses.php?menu=user_kelola5" method=POST enctype="multipart/form-data" role="form">
                                                                        <div class="col-md-6">
                                                                          <div class="form-group">
                                                                               <label>Nama :</label>
                                                                               <input class="form-control" name="nama" placeholder="Nama Lengkap" /required>
                                                                          </div>
                                                                          <div class="form-group">
                                                                               <label>Alamat :</label>
                                                                               <input class="form-control" name="alamat" placeholder="Alamat" /required>
                                                                          </div>
                                                                          <div class="form-group">
                                                                               <label>Telepon :</label>
                                                                               <input class="form-control" name="telepon" placeholder="Telepon" /required>
                                                                          </div>
                                                                          <div class="form-group">
                                                                               <label>Status :</label>
                                                                               <select class="form-control m-bot15" name="status">
                                                                                 <option value="1" name="status">Menikah</option>
                                                                                 <option value="2" name="status">Belum Menikah</option>
                                                                                 <option value="3" name="status">Duda</option>
                                                                                 <option value="4" name="status">Janda</option>
                                                                                 </select>
                                                                          </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                          <div class="form-group">
                                                                               <label>Username :</label>
                                                                               <input class="form-control" name="username" placeholder="Username" /required>
                                                                          </div>
                                                                          <div class="form-group">
                                                                               <label>Password :</label>
                                                                               <input type="password" class="form-control" name="sandi" placeholder="Password" /required>
                                                                          </div>
                                                                          <div class="form-group">
                                                                            <label>Gambar :</label><br>
                                                                            <img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
                                                                            <input type="file" id="uploadImage"  name="gambar" onchange="PreviewImage();" />
                                                                          </div>
                                                                        </div>
                                                                </div><!-- /.col -->
                                                              </div><!-- /.row -->
                                                            </div>
                                                            <div class="panel-footer" align="center">
                                                              <button type="submit" name="add_user" class="btn btn-primary">Save</button>
                                                              <button type="reset" class="btn btn-default">Reset </button>
                                                              <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#tambah_data">Close</button>
                                                            </div>
                                                          </div></form>
                                                        <?php } ?>
                  <div class="space15"></div>
                  <?php

                  $menu = $_REQUEST['menu'];
                  if ($menu=="user_kelola1") {
                    $show_user1 = show_user1(); ?><!-- Lihat Data Super Admin Rony Permadi -->
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Member</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $no=1;  while ($baris= mysql_fetch_array($show_user1)){?>
                              <tr>
                                <td><?php echo " $no "; ?></td>
                                <td align="center">
                                  <?php echo $baris['nama'] ?><br/>
                                  <?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?>
                                </td>
                                <td><?php echo $baris['username'] ?></td>
                                <td><?php echo $baris['password'] ?></td>
                                <td>
                                  <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                                  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#<?php echo $baris['id_kasir']; ?>" class="btn green">Edit</button>
                                  <!-- Modal -->
                                  <div class="modal fade" id="detail-<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" style="width:1000px">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title" id="myModalLabel">Detail Data Super Admin</h4>
                                        </div>
                                        <div class="modal-body">
                                  <div class="btn-group" data-toggle="buttons">

                                  <div class="row">
                                              <div class="col-md-12">
                                                <div class="box">
                                                  <div class="box-body" style="width:950px">
                                                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Foto</th>
                                                            <th>Nama</th>
                                                            <th>Alamat</th>
                                                            <th>Telepon</th>
                                                            <th>Status</th>
                                                            <th>Username</th>
                                                            <th>Password</th>
                                                            <th>Hak Akses</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                              <tr>
                                                                <td><?php echo " $no "; ?></td>
                                                                <td align="center"><?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?></td>
                                                                <td><?php echo $baris['nama'] ?></td>
                                                                <td><?php echo $baris['alamat'] ?></td>
                                                                <td><?php echo $baris['telepon'] ?></td>
                                                                <td><?php echo list_status($baris['status']) ?></td>
                                                                <td><?php echo $baris['username'] ?></td>
                                                                <td><?php echo $baris['password'] ?></td>
                                                                <td><?php echo nama_akses($baris['akses']) ?></td>
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
                                  <a href="proses.php?menu=user_kelola1&id_kasir=<?=$baris['id_kasir'];?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a>
                              </td>
                              </tr>
                              <?php $no++;} ?>
                        </tbody>
                    </table>
                <?php }
                if ($menu=="user_kelola2") {
                  $show_user2 = show_user2(); ?><!-- Lihat Data Petugas Gudang Rony Permadi -->
                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Member</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;  while ($baris= mysql_fetch_array($show_user2)){?>
                            <tr>
                              <td><?php echo " $no "; ?></td>
                              <td align="center">
                                <?php echo $baris['nama'] ?><br/>
                                <?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?>
                              </td>
                              <td><?php echo $baris['username'] ?></td>
                              <td><?php echo $baris['password'] ?></td>
                              <td>
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#<?php echo $baris['id_kasir']; ?>" class="btn green">Edit</button>
                                <!-- Modal -->
                                <div class="modal fade" id="detail-<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" style="width:1000px">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Detail Data Petugas Gudang</h4>
                                      </div>
                                      <div class="modal-body">
                                <div class="btn-group" data-toggle="buttons">

                                <div class="row">
                                            <div class="col-md-12">
                                              <div class="box">
                                                <div class="box-body" style="width:950px">
                                                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                                      <thead>
                                                      <tr>
                                                          <th>No</th>
                                                          <th>Foto</th>
                                                          <th>Nama</th>
                                                          <th>Alamat</th>
                                                          <th>Telepon</th>
                                                          <th>Status</th>
                                                          <th>Username</th>
                                                          <th>Password</th>
                                                          <th>Hak Akses</th>
                                                      </tr>
                                                      </thead>
                                                      <tbody>
                                                            <tr>
                                                              <td><?php echo " $no "; ?></td>
                                                              <td align="center"><?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?></td>
                                                              <td><?php echo $baris['nama'] ?></td>
                                                              <td><?php echo $baris['alamat'] ?></td>
                                                              <td><?php echo $baris['telepon'] ?></td>
                                                              <td><?php echo list_status($baris['status']) ?></td>
                                                              <td><?php echo $baris['username'] ?></td>
                                                              <td><?php echo $baris['password'] ?></td>
                                                              <td><?php echo nama_akses($baris['akses']) ?></td>
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
                                <a href="proses.php?menu=user_kelola2&id_kasir=<?=$baris['id_kasir'];?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a>
                            </td>
                            </tr>
                            <?php $no++;} ?>
                      </tbody>
                  </table>
              <?php }
              if ($menu=="user_kelola3") {
                $show_user3 = show_user3(); ?><!-- Lihat Data Kasir Rony Permadi -->
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Member</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $no=1;  while ($baris= mysql_fetch_array($show_user3)){?>
                          <tr>
                            <td><?php echo " $no "; ?></td>
                            <td align="center">
                              <?php echo $baris['nama'] ?><br/>
                              <?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?>
                            </td>
                            <td><?php echo $baris['username'] ?></td>
                            <td><?php echo $baris['password'] ?></td>
                            <td>
                              <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#<?php echo $baris['id_kasir']; ?>" class="btn green">Edit</button>
                              <!-- Modal -->
                              <div class="modal fade" id="detail-<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" style="width:1000px">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Detail Data Kasir</h4>
                                    </div>
                                    <div class="modal-body">
                              <div class="btn-group" data-toggle="buttons">

                              <div class="row">
                                          <div class="col-md-12">
                                            <div class="box">
                                              <div class="box-body" style="width:950px">
                                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Foto</th>
                                                        <th>Nama</th>
                                                        <th>Alamat</th>
                                                        <th>Telepon</th>
                                                        <th>Status</th>
                                                        <th>Username</th>
                                                        <th>Password</th>
                                                        <th>Hak Akses</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                          <tr>
                                                            <td><?php echo " $no "; ?></td>
                                                            <td align="center"><?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?></td>
                                                            <td><?php echo $baris['nama'] ?></td>
                                                            <td><?php echo $baris['alamat'] ?></td>
                                                            <td><?php echo $baris['telepon'] ?></td>
                                                            <td><?php echo list_status($baris['status']) ?></td>
                                                            <td><?php echo $baris['username'] ?></td>
                                                            <td><?php echo $baris['password'] ?></td>
                                                            <td><?php echo nama_akses($baris['akses']) ?></td>
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
                              <a href="proses.php?menu=user_kelola3&id_kasir=<?=$baris['id_kasir'];?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a>
                          </td>
                          </tr>
                          <?php $no++;} ?>
                    </tbody>
                </table>
            <?php }
            if ($menu=="user_kelola4") {
              $show_user4 = show_user4(); ?><!-- Lihat Data Pemilik Rony Permadi -->
              <table class="table table-striped table-hover table-bordered" id="editable-sample">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Member</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;  while ($baris= mysql_fetch_array($show_user4)){?>
                        <tr>
                          <td><?php echo " $no "; ?></td>
                          <td align="center">
                            <?php echo $baris['nama'] ?><br/>
                            <?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?>
                          </td>
                          <td><?php echo $baris['username'] ?></td>
                          <td><?php echo $baris['password'] ?></td>
                          <td>
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#<?php echo $baris['id_kasir']; ?>" class="btn green">Edit</button>
                            <!-- Modal -->
                            <div class="modal fade" id="detail-<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" style="width:1000px">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Detail Data Pemilik</h4>
                                  </div>
                                  <div class="modal-body">
                            <div class="btn-group" data-toggle="buttons">

                            <div class="row">
                                        <div class="col-md-12">
                                          <div class="box">
                                            <div class="box-body" style="width:950px">
                                              <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                                  <thead>
                                                  <tr>
                                                      <th>No</th>
                                                      <th>Foto</th>
                                                      <th>Nama</th>
                                                      <th>Alamat</th>
                                                      <th>Telepon</th>
                                                      <th>Status</th>
                                                      <th>Username</th>
                                                      <th>Password</th>
                                                      <th>Hak Akses</th>
                                                  </tr>
                                                  </thead>
                                                  <tbody>
                                                        <tr>
                                                          <td><?php echo " $no "; ?></td>
                                                          <td align="center"><?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?></td>
                                                          <td><?php echo $baris['nama'] ?></td>
                                                          <td><?php echo $baris['alamat'] ?></td>
                                                          <td><?php echo $baris['telepon'] ?></td>
                                                          <td><?php echo list_status($baris['status']) ?></td>
                                                          <td><?php echo $baris['username'] ?></td>
                                                          <td><?php echo $baris['password'] ?></td>
                                                          <td><?php echo nama_akses($baris['akses']) ?></td>
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
                            <a href="proses.php?menu=user_kelola4&id_kasir=<?=$baris['id_kasir'];?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a>
                        </td>
                        </tr>
                        <?php $no++;} ?>
                  </tbody>
              </table>
          <?php }
          if ($menu=="user_kelola5") {
            $show_user5 = show_user5(); ?><!-- Lihat Data Member Rony Permadi -->
            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Member</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1;  while ($baris= mysql_fetch_array($show_user5)){?>
                      <tr>
                        <td><?php echo " $no "; ?></td>
                        <td align="center">
                          <?php echo $baris['nama'] ?><br/>
                          <?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?>
                        </td>
                        <td><?php echo $baris['username'] ?></td>
                        <td><?php echo $baris['password'] ?></td>
                        <td>
                          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#<?php echo $baris['id_kasir']; ?>" class="btn green">Edit</button>
                          <!-- Modal -->
                          <div class="modal fade" id="detail-<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" style="width:1000px">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Detail Data Member</h4>
                                </div>
                                <div class="modal-body">
                          <div class="btn-group" data-toggle="buttons">

                          <div class="row">
                                      <div class="col-md-12">
                                        <div class="box">
                                          <div class="box-body" style="width:950px">
                                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Foto</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Telepon</th>
                                                    <th>Status</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Hak Akses</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                      <tr>
                                                        <td><?php echo " $no "; ?></td>
                                                        <td align="center"><?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?></td>
                                                        <td><?php echo $baris['nama'] ?></td>
                                                        <td><?php echo $baris['alamat'] ?></td>
                                                        <td><?php echo $baris['telepon'] ?></td>
                                                        <td><?php echo list_status($baris['status']) ?></td>
                                                        <td><?php echo $baris['username'] ?></td>
                                                        <td><?php echo $baris['password'] ?></td>
                                                        <td><?php echo nama_akses($baris['akses']) ?></td>
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
                          <a href="proses.php?menu=user_kelola5&id_kasir=<?=$baris['id_kasir'];?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a>
                      </td>
                      </tr>
                      <?php $no++;} ?>
                </tbody>
            </table>
        <?php } ?>
        </div>
        <?php
        $menu = $_REQUEST['menu'];
        if ($menu=="user_kelola1") {
          $shows_user1 = show_user1();
          while ($baris= mysql_fetch_array($shows_user1)){ ?>
          <div id=<?php echo $baris['id_kasir']; ?> class="panel-collapse collapse">
            <div class="panel-body">
          <div class="row">
                      <div class="col-md-12">
                            <form action="proses.php?menu=user_kelola1" method=POST enctype="multipart/form-data" role="form">
                              <div class="col-md-6">
                                <div class="form-group">
                                     <label>Nama :</label>
                                     <input type="hidden" name="id_kasir" value="<?php echo $baris['id_kasir'];?>">
                                     <input class="form-control" width="100%" name="nama" value="<?php echo $baris['nama']; ?>">
                                </div>
                                <div class="form-group">
                                     <label>Alamat :</label>
                                     <input class="form-control" name="alamat" value="<?php echo $baris['alamat']; ?>">
                                </div>
                                <div class="form-group">
                                     <label>Telepon :</label>
                                     <input class="form-control" name="telepon" value="<?php echo $baris['telepon']; ?>">
                                </div>
                                <div class="form-group">
                                     <label>Status :</label>
                                     <select class="form-control m-bot15" name="status">
                                       <option value="<?php echo $baris['status'];?>" name="status"><?php echo list_status($baris['status'])?></option>
                                       <option value="1" name="status">Menikah</option>
                                       <option value="2" name="status">Belum Menikah</option>
                                       <option value="3" name="status">Duda</option>
                                       <option value="4" name="status">Janda</option>
                                       </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                     <label>Username :</label>
                                     <input class="form-control" name="username" value="<?php echo $baris['username']; ?>">
                                </div>
                                <div class="form-group">
                                     <label>Password :</label>
                                     <input type="password" class="form-control" name="sandi" Placeholder="Ganti Password">
                                </div>
                                <div class="form-group">
                                  <label>Gambar :</label><br>
                                  <?php echo "<img id=uploadPreview src=img/hak_akses/".$baris['foto']." width=150 height=150>"; ?><br/>
                                  <input type="file" id="uploadImage" name="gambar" onchange="PreviewImage();"/>
                                </div>
                              </div>
                      </div><!-- /.col -->
                    </div><!-- /.row -->
                  </div>
                  <div class="panel-footer" align="center">
                    <button type="submit" name="edit_user" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-default">Reset </button>
                    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#<?php echo $baris['id_kasir']; ?>">Close</button>
                  </div>
                </div></form>
                <?php } } ?>
                <?php
                if ($menu=="user_kelola2") {
                  $shows_user2 = show_user2();
                  while ($baris= mysql_fetch_array($shows_user2)){ ?>
                  <div id=<?php echo $baris['id_kasir']; ?> class="panel-collapse collapse">
                    <div class="panel-body">
                  <div class="row">
                              <div class="col-md-12">
                                    <form action="proses.php?menu=user_kelola2" method=POST enctype="multipart/form-data" role="form">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Nama :</label>
                                             <input type="hidden" name="id_kasir" value="<?php echo $baris['id_kasir'];?>">
                                             <input class="form-control" width="100%" name="nama" value="<?php echo $baris['nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                             <label>Alamat :</label>
                                             <input class="form-control" name="alamat" value="<?php echo $baris['alamat']; ?>">
                                        </div>
                                        <div class="form-group">
                                             <label>Telepon :</label>
                                             <input class="form-control" name="telepon" value="<?php echo $baris['telepon']; ?>">
                                        </div>
                                        <div class="form-group">
                                             <label>Status :</label>
                                             <select class="form-control m-bot15" name="status">
                                               <option value="<?php echo $baris['status'];?>" name="status"><?php echo list_status($baris['status'])?></option>
                                               <option value="1" name="status">Menikah</option>
                                               <option value="2" name="status">Belum Menikah</option>
                                               <option value="3" name="status">Duda</option>
                                               <option value="4" name="status">Janda</option>
                                               </select>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Username :</label>
                                             <input class="form-control" name="username" value="<?php echo $baris['username']; ?>">
                                        </div>
                                        <div class="form-group">
                                             <label>Password :</label>
                                             <input type="password" class="form-control" name="sandi" Placeholder="Ganti Password">
                                        </div>
                                        <div class="form-group">
                                          <label>Gambar :</label><br>
                                          <?php echo "<img id=uploadPreview src=img/hak_akses/".$baris['foto']." width=150 height=150>"; ?><br/>
                                          <input type="file" id="uploadImage" name="gambar" onchange="PreviewImage();"/>
                                        </div>
                                      </div>
                              </div><!-- /.col -->
                            </div><!-- /.row -->
                          </div>
                          <div class="panel-footer" align="center">
                            <button type="submit" name="edit_user" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-default">Reset </button>
                            <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#<?php echo $baris['id_kasir']; ?>">Close</button>
                          </div>
                        </div></form>
                        <?php } } ?>
                        <?php
                        if ($menu=="user_kelola3") {
                          $shows_user3 = show_user3();
                          while ($baris= mysql_fetch_array($shows_user3)){ ?>
                          <div id=<?php echo $baris['id_kasir']; ?> class="panel-collapse collapse">
                            <div class="panel-body">
                          <div class="row">
                                      <div class="col-md-12">
                                            <form action="proses.php?menu=user_kelola3" method=POST enctype="multipart/form-data" role="form">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                     <label>Nama :</label>
                                                     <input type="hidden" name="id_kasir" value="<?php echo $baris['id_kasir'];?>">
                                                     <input class="form-control" width="100%" name="nama" value="<?php echo $baris['nama']; ?>">
                                                </div>
                                                <div class="form-group">
                                                     <label>Alamat :</label>
                                                     <input class="form-control" name="alamat" value="<?php echo $baris['alamat']; ?>">
                                                </div>
                                                <div class="form-group">
                                                     <label>Telepon :</label>
                                                     <input class="form-control" name="telepon" value="<?php echo $baris['telepon']; ?>">
                                                </div>
                                                <div class="form-group">
                                                     <label>Status :</label>
                                                     <select class="form-control m-bot15" name="status">
                                                       <option value="<?php echo $baris['status'];?>" name="status"><?php echo list_status($baris['status'])?></option>
                                                       <option value="1" name="status">Menikah</option>
                                                       <option value="2" name="status">Belum Menikah</option>
                                                       <option value="3" name="status">Duda</option>
                                                       <option value="4" name="status">Janda</option>
                                                       </select>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                     <label>Username :</label>
                                                     <input class="form-control" name="username" value="<?php echo $baris['username']; ?>">
                                                </div>
                                                <div class="form-group">
                                                     <label>Password :</label>
                                                     <input type="password" class="form-control" name="sandi" Placeholder="Ganti Password">
                                                </div>
                                                <div class="form-group">
                                                  <label>Gambar :</label><br>
                                                  <?php echo "<img id=uploadPreview src=img/hak_akses/".$baris['foto']." width=150 height=150>"; ?><br/>
                                                  <input type="file" id="uploadImage" name="gambar" onchange="PreviewImage();"/>
                                                </div>
                                              </div>
                                      </div><!-- /.col -->
                                    </div><!-- /.row -->
                                  </div>
                                  <div class="panel-footer" align="center">
                                    <button type="submit" name="edit_user" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn btn-default">Reset </button>
                                    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#<?php echo $baris['id_kasir']; ?>">Close</button>
                                  </div>
                                </div></form>
                                <?php } } ?>
                                <?php
                                if ($menu=="user_kelola4") {
                                  $shows_user4 = show_user4();
                                  while ($baris= mysql_fetch_array($shows_user4)){ ?>
                                  <div id=<?php echo $baris['id_kasir']; ?> class="panel-collapse collapse">
                                    <div class="panel-body">
                                  <div class="row">
                                              <div class="col-md-12">
                                                    <form action="proses.php?menu=user_kelola4" method=POST enctype="multipart/form-data" role="form">
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                             <label>Nama :</label>
                                                             <input type="hidden" name="id_kasir" value="<?php echo $baris['id_kasir'];?>">
                                                             <input class="form-control" width="100%" name="nama" value="<?php echo $baris['nama']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                             <label>Alamat :</label>
                                                             <input class="form-control" name="alamat" value="<?php echo $baris['alamat']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                             <label>Telepon :</label>
                                                             <input class="form-control" name="telepon" value="<?php echo $baris['telepon']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                             <label>Status :</label>
                                                             <select class="form-control m-bot15" name="status">
                                                               <option value="<?php echo $baris['status'];?>" name="status"><?php echo list_status($baris['status'])?></option>
                                                               <option value="1" name="status">Menikah</option>
                                                               <option value="2" name="status">Belum Menikah</option>
                                                               <option value="3" name="status">Duda</option>
                                                               <option value="4" name="status">Janda</option>
                                                               </select>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-6">
                                                        <div class="form-group">
                                                             <label>Username :</label>
                                                             <input class="form-control" name="username" value="<?php echo $baris['username']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                             <label>Password :</label>
                                                             <input type="password" class="form-control" name="sandi" Placeholder="Ganti Password">
                                                        </div>
                                                        <div class="form-group">
                                                          <label>Gambar :</label><br>
                                                          <?php echo "<img id=uploadPreview src=img/hak_akses/".$baris['foto']." width=150 height=150>"; ?><br/>
                                                          <input type="file" id="uploadImage" name="gambar" onchange="PreviewImage();"/>
                                                        </div>
                                                      </div>
                                              </div><!-- /.col -->
                                            </div><!-- /.row -->
                                          </div>
                                          <div class="panel-footer" align="center">
                                            <button type="submit" name="edit_user" class="btn btn-primary">Save</button>
                                            <button type="reset" class="btn btn-default">Reset </button>
                                            <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#<?php echo $baris['id_kasir']; ?>">Close</button>
                                          </div>
                                        </div></form>
                                        <?php } } ?>
                                        <?php
                                        if ($menu=="user_kelola5") {
                                          $shows_user5 = show_user5();
                                          while ($baris= mysql_fetch_array($shows_user5)){ ?>
                                          <div id=<?php echo $baris['id_kasir']; ?> class="panel-collapse collapse">
                                            <div class="panel-body">
                                          <div class="row">
                                                      <div class="col-md-12">
                                                            <form action="proses.php?menu=user_kelola5" method=POST enctype="multipart/form-data" role="form">
                                                              <div class="col-md-6">
                                                                <div class="form-group">
                                                                     <label>Nama :</label>
                                                                     <input type="hidden" name="id_kasir" value="<?php echo $baris['id_kasir'];?>">
                                                                     <input class="form-control" width="100%" name="nama" value="<?php echo $baris['nama']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                     <label>Alamat :</label>
                                                                     <input class="form-control" name="alamat" value="<?php echo $baris['alamat']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                     <label>Telepon :</label>
                                                                     <input class="form-control" name="telepon" value="<?php echo $baris['telepon']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                     <label>Status :</label>
                                                                     <select class="form-control m-bot15" name="status">
                                                                       <option value="<?php echo $baris['status'];?>" name="status"><?php echo list_status($baris['status'])?></option>
                                                                       <option value="1" name="status">Menikah</option>
                                                                       <option value="2" name="status">Belum Menikah</option>
                                                                       <option value="3" name="status">Duda</option>
                                                                       <option value="4" name="status">Janda</option>
                                                                       </select>
                                                                </div>
                                                              </div>
                                                              <div class="col-md-6">
                                                                <div class="form-group">
                                                                     <label>Username :</label>
                                                                     <input class="form-control" name="username" value="<?php echo $baris['username']; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                     <label>Password :</label>
                                                                     <input type="password" class="form-control" name="sandi" Placeholder="Ganti Password">
                                                                </div>
                                                                <div class="form-group">
                                                                  <label>Gambar :</label><br>
                                                                  <?php echo "<img id=uploadPreview src=img/hak_akses/".$baris['foto']." width=150 height=150>"; ?><br/>
                                                                  <input type="file" id="uploadImage" name="gambar" onchange="PreviewImage();"/>
                                                                </div>
                                                              </div>
                                                      </div><!-- /.col -->
                                                    </div><!-- /.row -->
                                                  </div>
                                                  <div class="panel-footer" align="center">
                                                    <button type="submit" name="edit_user" class="btn btn-primary">Save</button>
                                                    <button type="reset" class="btn btn-default">Reset </button>
                                                    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#<?php echo $baris['id_kasir']; ?>">Close</button>
                                                  </div>
                                                </div></form>
                                                <?php } } ?>
      </div>
 </section>
                  <!-- page end-->
</section>
                  <!--main content end-->
<?php } else
  echo "Anda tidak berhak mengakses file ini";
  ?>
  <?php if($akses=='4'){ ?>
  <!--main content start-->
  <section id="main-content">
      <section class="wrapper">
        <!-- page start-->
        <section class="panel">
            <header class="panel-heading">
                Menu Pengelolaan User
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
                    <?php

                    $menu = $_REQUEST['menu'];
                    if ($menu=="user_kelola1") {
                      $show_user1 = show_user1(); ?><!-- Lihat Data Super Admin Rony Permadi -->
                      <table class="table table-striped table-hover table-bordered" id="editable-sample">
                          <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Member</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php $no=1;  while ($baris= mysql_fetch_array($show_user1)){?>
                                <tr>
                                  <td><?php echo " $no "; ?></td>
                                  <td align="center">
                                    <?php echo $baris['nama'] ?><br/>
                                    <?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?>
                                  </td>
                                  <td><?php echo $baris['username'] ?></td>
                                  <td><?php echo $baris['password'] ?></td>
                                  <td>
                                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="detail-<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" style="width:1000px">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Detail Data Super Admin</h4>
                                          </div>
                                          <div class="modal-body">
                                    <div class="btn-group" data-toggle="buttons">

                                    <div class="row">
                                                <div class="col-md-12">
                                                  <div class="box">
                                                    <div class="box-body" style="width:950px">
                                                      <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                                          <thead>
                                                          <tr>
                                                              <th>No</th>
                                                              <th>Foto</th>
                                                              <th>Nama</th>
                                                              <th>Alamat</th>
                                                              <th>Telepon</th>
                                                              <th>Status</th>
                                                              <th>Username</th>
                                                              <th>Password</th>
                                                              <th>Hak Akses</th>
                                                          </tr>
                                                          </thead>
                                                          <tbody>
                                                                <tr>
                                                                  <td><?php echo " $no "; ?></td>
                                                                  <td align="center"><?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?></td>
                                                                  <td><?php echo $baris['nama'] ?></td>
                                                                  <td><?php echo $baris['alamat'] ?></td>
                                                                  <td><?php echo $baris['telepon'] ?></td>
                                                                  <td><?php echo list_status($baris['status']) ?></td>
                                                                  <td><?php echo $baris['username'] ?></td>
                                                                  <td><?php echo $baris['password'] ?></td>
                                                                  <td><?php echo nama_akses($baris['akses']) ?></td>
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
                                </td>
                                </tr>
                                <?php $no++;} ?>
                          </tbody>
                      </table>
                  <?php }
                  if ($menu=="user_kelola2") {
                    $show_user2 = show_user2(); ?><!-- Lihat Data Petugas Gudang Rony Permadi -->
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Member</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $no=1;  while ($baris= mysql_fetch_array($show_user2)){?>
                              <tr>
                                <td><?php echo " $no "; ?></td>
                                <td align="center">
                                  <?php echo $baris['nama'] ?><br/>
                                  <?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?>
                                </td>
                                <td><?php echo $baris['username'] ?></td>
                                <td><?php echo $baris['password'] ?></td>
                                <td>
                                  <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                                  <!-- Modal -->
                                  <div class="modal fade" id="detail-<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" style="width:1000px">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          <h4 class="modal-title" id="myModalLabel">Detail Data Petugas Gudang</h4>
                                        </div>
                                        <div class="modal-body">
                                  <div class="btn-group" data-toggle="buttons">

                                  <div class="row">
                                              <div class="col-md-12">
                                                <div class="box">
                                                  <div class="box-body" style="width:950px">
                                                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Foto</th>
                                                            <th>Nama</th>
                                                            <th>Alamat</th>
                                                            <th>Telepon</th>
                                                            <th>Status</th>
                                                            <th>Username</th>
                                                            <th>Password</th>
                                                            <th>Hak Akses</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                              <tr>
                                                                <td><?php echo " $no "; ?></td>
                                                                <td align="center"><?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?></td>
                                                                <td><?php echo $baris['nama'] ?></td>
                                                                <td><?php echo $baris['alamat'] ?></td>
                                                                <td><?php echo $baris['telepon'] ?></td>
                                                                <td><?php echo list_status($baris['status']) ?></td>
                                                                <td><?php echo $baris['username'] ?></td>
                                                                <td><?php echo $baris['password'] ?></td>
                                                                <td><?php echo nama_akses($baris['akses']) ?></td>
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
                              </td>
                              </tr>
                              <?php $no++;} ?>
                        </tbody>
                    </table>
                <?php }
                if ($menu=="user_kelola3") {
                  $show_user3 = show_user3(); ?><!-- Lihat Data Kasir Rony Permadi -->
                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Member</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;  while ($baris= mysql_fetch_array($show_user3)){?>
                            <tr>
                              <td><?php echo " $no "; ?></td>
                              <td align="center">
                                <?php echo $baris['nama'] ?><br/>
                                <?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?>
                              </td>
                              <td><?php echo $baris['username'] ?></td>
                              <td><?php echo $baris['password'] ?></td>
                              <td>
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                                <!-- Modal -->
                                <div class="modal fade" id="detail-<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" style="width:1000px">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Detail Data Kasir</h4>
                                      </div>
                                      <div class="modal-body">
                                <div class="btn-group" data-toggle="buttons">

                                <div class="row">
                                            <div class="col-md-12">
                                              <div class="box">
                                                <div class="box-body" style="width:950px">
                                                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                                      <thead>
                                                      <tr>
                                                          <th>No</th>
                                                          <th>Foto</th>
                                                          <th>Nama</th>
                                                          <th>Alamat</th>
                                                          <th>Telepon</th>
                                                          <th>Status</th>
                                                          <th>Username</th>
                                                          <th>Password</th>
                                                          <th>Hak Akses</th>
                                                      </tr>
                                                      </thead>
                                                      <tbody>
                                                            <tr>
                                                              <td><?php echo " $no "; ?></td>
                                                              <td align="center"><?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?></td>
                                                              <td><?php echo $baris['nama'] ?></td>
                                                              <td><?php echo $baris['alamat'] ?></td>
                                                              <td><?php echo $baris['telepon'] ?></td>
                                                              <td><?php echo list_status($baris['status']) ?></td>
                                                              <td><?php echo $baris['username'] ?></td>
                                                              <td><?php echo $baris['password'] ?></td>
                                                              <td><?php echo nama_akses($baris['akses']) ?></td>
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
                                </td>
                            </tr>
                            <?php $no++;} ?>
                      </tbody>
                  </table>
            <?php }
            if ($menu=="user_kelola5") {
              $show_user5 = show_user5(); ?><!-- Lihat Data Member Rony Permadi -->
              <table class="table table-striped table-hover table-bordered" id="editable-sample">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama Member</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;  while ($baris= mysql_fetch_array($show_user5)){?>
                        <tr>
                          <td><?php echo " $no "; ?></td>
                          <td align="center">
                            <?php echo $baris['nama'] ?><br/>
                            <?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?>
                          </td>
                          <td><?php echo $baris['username'] ?></td>
                          <td><?php echo $baris['password'] ?></td>
                          <td>
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                            <!-- Modal -->
                            <div class="modal fade" id="detail-<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" style="width:1000px">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Detail Data Member</h4>
                                  </div>
                                  <div class="modal-body">
                            <div class="btn-group" data-toggle="buttons">

                            <div class="row">
                                        <div class="col-md-12">
                                          <div class="box">
                                            <div class="box-body" style="width:950px">
                                              <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                                  <thead>
                                                  <tr>
                                                      <th>No</th>
                                                      <th>Foto</th>
                                                      <th>Nama</th>
                                                      <th>Alamat</th>
                                                      <th>Telepon</th>
                                                      <th>Status</th>
                                                      <th>Username</th>
                                                      <th>Password</th>
                                                      <th>Hak Akses</th>
                                                  </tr>
                                                  </thead>
                                                  <tbody>
                                                        <tr>
                                                          <td><?php echo " $no "; ?></td>
                                                          <td align="center"><?php echo "<img src=img/hak_akses/".$baris['foto']." width=50 height=50>"; ?></td>
                                                          <td><?php echo $baris['nama'] ?></td>
                                                          <td><?php echo $baris['alamat'] ?></td>
                                                          <td><?php echo $baris['telepon'] ?></td>
                                                          <td><?php echo list_status($baris['status']) ?></td>
                                                          <td><?php echo $baris['username'] ?></td>
                                                          <td><?php echo $baris['password'] ?></td>
                                                          <td><?php echo nama_akses($baris['akses']) ?></td>
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
                            </td>
                        </tr>
                        <?php $no++;} ?>
                  </tbody>
              </table>
          <?php } ?>
          </div>
        </div>
   </section>
                    <!-- page end-->
  </section>
                    <!--main content end-->
  <?php } else
    echo "Anda tidak berhak mengakses file ini";
    ?>
<?php include 'footer.php'; ?>
