<?php
include 'header.php';
 ?>
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
                          <button type="button" data-toggle="modal" data-target="#myModal" class="btn green">
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

                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog" style="width:600px">
                                  <div class="modal-content">
                                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel">Tambah User Akses</h4>
                        </div>
                        <div class="modal-body">
                  <div class="btn-group" data-toggle="buttons">
                  <div class="row">
                              <div class="col-md-12">
                                <div class="box">
                                  <div class="box-body" style="width:550px">
                                    <?php
                                    $menu = $_REQUEST['menu'];
                                    if ($menu=="user_kelola1") { ?>
                                    <form action="proses.php?menu=user_kelola1" method=POST enctype="multipart/form-data" role="form">
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
                                   <div class="form-group">
                                        <label>Username :</label>
                                        <input class="form-control" name="username" placeholder="Username" /required>
                                   </div>
                                   <div class="form-group">
                                        <label>Password :</label>
                                        <input type="password" class="form-control" name="sandi" placeholder="Password" /required>
                                   </div>
                                  </div><!-- /.box-body --> <!-- Add Data Super Admin Rony Permadi -->
                                </div><!-- /.box -->
                              </div><!-- /.col -->
                            </div><!-- /.row -->
                  </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="reset" class="btn btn-default">Reset </button>
                          <button type="submit" name="add_user" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div></form> <?php }
                if ($menu=="user_kelola2") { ?>
                      <form action="proses.php?menu=user_kelola2" method=POST enctype="multipart/form-data" role="form">
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
                        <div class="form-group">
                          <label>Username :</label>
                          <input class="form-control" name="username" placeholder="Username" /required>
                        </div>
                        <div class="form-group">
                          <label>Password :</label>
                          <input type="password" class="form-control" name="sandi" placeholder="Password" /required>
                        </div>
                      </div><!-- /.box-body -->
                    </div><!-- /.box -->
                  </div><!-- /.col -->
                </div><!-- /.row --> <!-- Add Data Petugas Gudang Rony Permadi -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="reset" class="btn btn-default">Reset </button>
                <button type="submit" name="add_user" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </div>
      </div></form> <?php }
            if ($menu=="user_kelola3") { ?>
                  <form action="proses.php?menu=user_kelola3" method=POST enctype="multipart/form-data" role="form">
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
                    <div class="form-group">
                      <label>Username :</label>
                      <input class="form-control" name="username" placeholder="Username" /required>
                    </div>
                    <div class="form-group">
                      <label>Password :</label>
                      <input type="password" class="form-control" name="sandi" placeholder="Password" /required>
                    </div>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->
            </div><!-- /.row --> <!-- Add Data Kasir Rony Permadi -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="reset" class="btn btn-default">Reset </button>
            <button type="submit" name="add_user" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div></form> <?php }
        if ($menu=="user_kelola4") { ?>
              <form action="proses.php?menu=user_kelola4" method=POST enctype="multipart/form-data" role="form">
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
                <div class="form-group">
                  <label>Username :</label>
                  <input class="form-control" name="username" placeholder="Username" /required>
                </div>
                <div class="form-group">
                  <label>Password :</label>
                  <input type="password" class="form-control" name="sandi" placeholder="Password" /required>
                </div>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row --> <!-- Add Data Pemilik Rony Permadi -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="reset" class="btn btn-default">Reset </button>
        <button type="submit" name="add_user" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
  </div></form> <?php }
  if ($menu=="user_kelola5") { ?>
        <form action="proses.php?menu=user_kelola5" method=POST enctype="multipart/form-data" role="form">
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
          <div class="form-group">
            <label>Username :</label>
            <input class="form-control" name="username" placeholder="Username" /required>
          </div>
          <div class="form-group">
            <label>Password :</label>
            <input type="password" class="form-control" name="sandi" placeholder="Password" /required>
          </div>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row --> <!-- Add Data Pemilik Rony Permadi -->
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="reset" class="btn btn-default">Reset </button>
  <button type="submit" name="add_user" class="btn btn-primary">Save</button>
</div>
</div>
</div>
</div>
</div></form> <?php } ?>
                  <div class="space15"></div>
                  <?php

                  $menu = $_REQUEST['menu'];
                  if ($menu=="user_kelola1") {
                    $show_user1 = show_user1(); ?><!-- Lihat Data Super Admin Rony Permadi -->
                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>Hak Akses</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;  while ($baris= mysql_fetch_array($show_user1)){?>
                            <tr>
                              <td><?php echo " $no "; ?></td>
                              <td><?php echo $baris['nama'] ?></td>
                              <td><?php echo $baris['username'] ?></td>
                              <td><?php echo nama_akses($baris['akses']) ?></td>
                              <td>
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#<?php echo $baris['id_kasir']; ?>" class="btn green">Edit</button>
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
                                <!-- Modal -->
                                <div class="modal fade" id="<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" style="width:600px">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Edit Data Super Admin</h4>
                                      </div>
                                      <div class="modal-body">
                                <div class="btn-group" data-toggle="buttons">

                                <div class="row">
                                            <div class="col-md-12">
                                              <div class="box">
                                                <div class="box-body" style="width:550px">

                                                  <form action="proses.php?menu=user_kelola1" method=POST enctype="multipart/form-data" role="form">
                                                 <div class="form-group">
                                                      <label>Nama :</label>
                                                      <input type="hidden" name="id_kasir" value="<?php echo $baris['id_kasir'];?>">
                                                      <input class="form-control" width="100%" name="nama" value="<?php echo $baris['nama']; ?>">
                                                 </div><br />
                                                 <div class="form-group">
                                                      <label>Alamat :</label>
                                                      <input class="form-control" name="alamat" value="<?php echo $baris['alamat']; ?>">
                                                 </div><br />
                                                 <div class="form-group">
                                                      <label>Telepon :</label>
                                                      <input class="form-control" name="telepon" value="<?php echo $baris['telepon']; ?>">
                                                 </div><br />
                                                 <div class="form-group">
                                                      <label>Status :</label>
                                                      <select class="form-control m-bot15" name="status">
                                                        <option value="<?php echo $baris['status'];?>" name="status"><?php echo list_status($baris['status'])?></option>
                                                        <option value="1" name="status">Menikah</option>
                                                        <option value="2" name="status">Belum Menikah</option>
                                                        <option value="3" name="status">Duda</option>
                                                        <option value="4" name="status">Janda</option>
                                                        </select>
                                                 </div><br />
                                                 <div class="form-group">
                                                      <label>Username :</label>
                                                      <input class="form-control" name="username" value="<?php echo $baris['username']; ?>">
                                                 </div><br />
                                                 <div class="form-group">
                                                      <label>Password :</label>
                                                      <input type="password" class="form-control" name="sandi" value="<?php echo $baris['password']; ?>">
                                                 </div><br />
                                                 <div class="form-group">
                                                      <label>Hak Akses :</label>
                                                      <select class="form-control m-bot15" name="akses">
                                                        <?php
                                                        echo drop_akses($baris['akses']);
                                                         ?>
                                                        </select>
                                                 </div>


                                                </div><!-- /.box-body -->
                                              </div><!-- /.box -->
                                            </div><!-- /.col -->
                                          </div><!-- /.row -->


                                </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" name="edit_user" class="btn btn-primary">Save</button>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                </div></form>
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
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Hak Akses</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $no=1;  while ($baris= mysql_fetch_array($show_user2)){?>
                          <tr>
                            <td><?php echo " $no "; ?></td>
                            <td><?php echo $baris['nama'] ?></td>
                            <td><?php echo $baris['username'] ?></td>
                            <td><?php echo nama_akses($baris['akses']) ?></td>
                            <td>
                              <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                              <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#<?php echo $baris['id_kasir']; ?>" class="btn green">Edit</button>
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
                              <!-- Modal -->
                              <div class="modal fade" id="<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" style="width:600px">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Edit Data Petugas Gudang</h4>
                                    </div>
                                    <div class="modal-body">
                              <div class="btn-group" data-toggle="buttons">

                              <div class="row">
                                          <div class="col-md-12">
                                            <div class="box">
                                              <div class="box-body" style="width:550px">

                                                <form action="proses.php?menu=user_kelola2" method=POST enctype="multipart/form-data" role="form">
                                               <div class="form-group">
                                                    <label>Nama :</label>
                                                    <input type="hidden" name="id_kasir" value="<?php echo $baris['id_kasir'];?>">
                                                    <input class="form-control" width="100%" name="nama" value="<?php echo $baris['nama']; ?>">
                                               </div><br />
                                               <div class="form-group">
                                                    <label>Alamat :</label>
                                                    <input class="form-control" name="alamat" value="<?php echo $baris['alamat']; ?>">
                                               </div><br />
                                               <div class="form-group">
                                                    <label>Telepon :</label>
                                                    <input class="form-control" name="telepon" value="<?php echo $baris['telepon']; ?>">
                                               </div><br />
                                               <div class="form-group">
                                                    <label>Status :</label>
                                                    <select class="form-control m-bot15" name="status">
                                                      <option value="<?php echo $baris['status'];?>" name="status"><?php echo list_status($baris['status'])?></option>
                                                      <option value="1" name="status">Menikah</option>
                                                      <option value="2" name="status">Belum Menikah</option>
                                                      <option value="3" name="status">Duda</option>
                                                      <option value="4" name="status">Janda</option>
                                                      </select>
                                               </div><br />
                                               <div class="form-group">
                                                    <label>Username :</label>
                                                    <input class="form-control" name="username" value="<?php echo $baris['username']; ?>">
                                               </div><br />
                                               <div class="form-group">
                                                    <label>Password :</label>
                                                    <input type="password" class="form-control" name="sandi" value="<?php echo $baris['password']; ?>">
                                               </div><br />
                                               <div class="form-group">
                                                    <label>Hak Akses :</label>
                                                    <select class="form-control m-bot15" name="akses">
                                                      <?php
                                                      echo drop_akses($baris['akses']);
                                                       ?>
                                                      </select>
                                               </div>


                                              </div><!-- /.box-body -->
                                            </div><!-- /.box -->
                                          </div><!-- /.col -->
                                        </div><!-- /.row -->


                              </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="submit" name="edit_user" class="btn btn-primary">Save</button>

                                    </div>
                                  </div>
                                </div>
                              </div>
                              </div></form>
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
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Hak Akses</th>
                      <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;  while ($baris= mysql_fetch_array($show_user3)){?>
                        <tr>
                          <td><?php echo " $no "; ?></td>
                          <td><?php echo $baris['nama'] ?></td>
                          <td><?php echo $baris['username'] ?></td>
                          <td><?php echo nama_akses($baris['akses']) ?></td>
                          <td>
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#<?php echo $baris['id_kasir']; ?>" class="btn green">Edit</button>
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
                            <!-- Modal -->
                            <div class="modal fade" id="<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" style="width:600px">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Data Kasir</h4>
                                  </div>
                                  <div class="modal-body">
                            <div class="btn-group" data-toggle="buttons">

                            <div class="row">
                                        <div class="col-md-12">
                                          <div class="box">
                                            <div class="box-body" style="width:550px">

                                              <form action="proses.php?menu=user_kelola3" method=POST enctype="multipart/form-data" role="form">
                                             <div class="form-group">
                                                  <label>Nama :</label>
                                                  <input type="hidden" name="id_kasir" value="<?php echo $baris['id_kasir'];?>">
                                                  <input class="form-control" width="100%" name="nama" value="<?php echo $baris['nama']; ?>">
                                             </div><br />
                                             <div class="form-group">
                                                  <label>Alamat :</label>
                                                  <input class="form-control" name="alamat" value="<?php echo $baris['alamat']; ?>">
                                             </div><br />
                                             <div class="form-group">
                                                  <label>Telepon :</label>
                                                  <input class="form-control" name="telepon" value="<?php echo $baris['telepon']; ?>">
                                             </div><br />
                                             <div class="form-group">
                                                  <label>Status :</label>
                                                  <select class="form-control m-bot15" name="status">
                                                    <option value="<?php echo $baris['status'];?>" name="status"><?php echo list_status($baris['status'])?></option>
                                                    <option value="1" name="status">Menikah</option>
                                                    <option value="2" name="status">Belum Menikah</option>
                                                    <option value="3" name="status">Duda</option>
                                                    <option value="4" name="status">Janda</option>
                                                    </select>
                                             </div><br />
                                             <div class="form-group">
                                                  <label>Username :</label>
                                                  <input class="form-control" name="username" value="<?php echo $baris['username']; ?>">
                                             </div><br />
                                             <div class="form-group">
                                                  <label>Password :</label>
                                                  <input type="password" class="form-control" name="sandi" value="<?php echo $baris['password']; ?>">
                                             </div><br />
                                             <div class="form-group">
                                                  <label>Hak Akses :</label>
                                                  <select class="form-control m-bot15" name="akses">
                                                    <?php
                                                    echo drop_akses($baris['akses']);
                                                     ?>
                                                    </select>
                                             </div>


                                            </div><!-- /.box-body -->
                                          </div><!-- /.box -->
                                        </div><!-- /.col -->
                                      </div><!-- /.row -->


                            </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" name="edit_user" class="btn btn-primary">Save</button>

                                  </div>
                                </div>
                              </div>
                            </div>
                            </div></form>
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
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Hak Akses</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1;  while ($baris= mysql_fetch_array($show_user4)){?>
                      <tr>
                        <td><?php echo " $no "; ?></td>
                        <td><?php echo $baris['nama'] ?></td>
                        <td><?php echo $baris['username'] ?></td>
                        <td><?php echo nama_akses($baris['akses']) ?></td>
                        <td>
                          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#<?php echo $baris['id_kasir']; ?>" class="btn green">Edit</button>
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
                          <!-- Modal -->
                          <div class="modal fade" id="<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" style="width:600px">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Edit Data Pemilik</h4>
                                </div>
                                <div class="modal-body">
                          <div class="btn-group" data-toggle="buttons">

                          <div class="row">
                                      <div class="col-md-12">
                                        <div class="box">
                                          <div class="box-body" style="width:550px">
                                            <form action="proses.php?menu=user_kelola4" method=POST enctype="multipart/form-data" role="form">
                                           <div class="form-group">
                                                <label>Nama :</label>
                                                <input type="hidden" name="id_kasir" value="<?php echo $baris['id_kasir'];?>">
                                                <input class="form-control" width="100%" name="nama" value="<?php echo $baris['nama']; ?>">
                                           </div><br />
                                           <div class="form-group">
                                                <label>Alamat :</label>
                                                <input class="form-control" name="alamat" value="<?php echo $baris['alamat']; ?>">
                                           </div><br />
                                           <div class="form-group">
                                                <label>Telepon :</label>
                                                <input class="form-control" name="telepon" value="<?php echo $baris['telepon']; ?>">
                                           </div><br />
                                           <div class="form-group">
                                                <label>Status :</label>
                                                <select class="form-control m-bot15" name="status">
                                                  <option value="<?php echo $baris['status'];?>" name="status"><?php echo list_status($baris['status'])?></option>
                                                  <option value="1" name="status">Menikah</option>
                                                  <option value="2" name="status">Belum Menikah</option>
                                                  <option value="3" name="status">Duda</option>
                                                  <option value="4" name="status">Janda</option>
                                                  </select>
                                           </div><br />
                                           <div class="form-group">
                                                <label>Username :</label>
                                                <input class="form-control" name="username" value="<?php echo $baris['username']; ?>">
                                           </div><br />
                                           <div class="form-group">
                                                <label>Password :</label>
                                                <input type="password" class="form-control" name="sandi" value="<?php echo $baris['password']; ?>">
                                           </div><br />
                                           <div class="form-group">
                                                <label>Hak Akses :</label>
                                                <select class="form-control m-bot15" name="akses">
                                                  <?php
                                                  echo drop_akses($baris['akses']);
                                                   ?>
                                                  </select>
                                           </div>
                                          </div><!-- /.box-body -->
                                        </div><!-- /.box -->
                                      </div><!-- /.col -->
                                    </div><!-- /.row -->
                          </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <button type="submit" name="edit_user" class="btn btn-primary">Save</button>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div></form>
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
                  <th>Nama</th>
                  <th>Username</th>
                  <th>Hak Akses</th>
                  <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <?php $no=1;  while ($baris= mysql_fetch_array($show_user5)){?>
                    <tr>
                      <td><?php echo " $no "; ?></td>
                      <td><?php echo $baris['nama'] ?></td>
                      <td><?php echo $baris['username'] ?></td>
                      <td><?php echo nama_akses($baris['akses']) ?></td>
                      <td>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#detail-<?php echo $baris['id_kasir']; ?>" class="btn btn-primary">Detail</button>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#<?php echo $baris['id_kasir']; ?>" class="btn green">Edit</button>
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
                        <!-- Modal -->
                        <div class="modal fade" id="<?php echo $baris['id_kasir']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" style="width:600px">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Edit Data Pemilik</h4>
                              </div>
                              <div class="modal-body">
                        <div class="btn-group" data-toggle="buttons">

                        <div class="row">
                                    <div class="col-md-12">
                                      <div class="box">
                                        <div class="box-body" style="width:550px">
                                          <form action="proses.php?menu=user_kelola5" method=POST enctype="multipart/form-data" role="form">
                                         <div class="form-group">
                                              <label>Nama :</label>
                                              <input type="hidden" name="id_kasir" value="<?php echo $baris['id_kasir'];?>">
                                              <input class="form-control" width="100%" name="nama" value="<?php echo $baris['nama']; ?>">
                                         </div><br />
                                         <div class="form-group">
                                              <label>Alamat :</label>
                                              <input class="form-control" name="alamat" value="<?php echo $baris['alamat']; ?>">
                                         </div><br />
                                         <div class="form-group">
                                              <label>Telepon :</label>
                                              <input class="form-control" name="telepon" value="<?php echo $baris['telepon']; ?>">
                                         </div><br />
                                         <div class="form-group">
                                              <label>Status :</label>
                                              <select class="form-control m-bot15" name="status">
                                                <option value="<?php echo $baris['status'];?>" name="status"><?php echo list_status($baris['status'])?></option>
                                                <option value="1" name="status">Menikah</option>
                                                <option value="2" name="status">Belum Menikah</option>
                                                <option value="3" name="status">Duda</option>
                                                <option value="4" name="status">Janda</option>
                                                </select>
                                         </div><br />
                                         <div class="form-group">
                                              <label>Username :</label>
                                              <input class="form-control" name="username" value="<?php echo $baris['username']; ?>">
                                         </div><br />
                                         <div class="form-group">
                                              <label>Password :</label>
                                              <input type="password" class="form-control" name="sandi" value="<?php echo $baris['password']; ?>">
                                         </div><br />
                                         <div class="form-group">
                                              <label>Hak Akses :</label>
                                              <select class="form-control m-bot15" name="akses">
                                                <?php
                                                echo drop_akses($baris['akses']);
                                                 ?>
                                                </select>
                                         </div>
                                        </div><!-- /.box-body -->
                                      </div><!-- /.box -->
                                    </div><!-- /.col -->
                                  </div><!-- /.row -->
                        </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" name="edit_user" class="btn btn-primary">Save</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div></form>
                        <a href="proses.php?menu=user_kelola5&id_kasir=<?=$baris['id_kasir'];?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">Delete</a>
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
<?php include 'footer.php'; ?>
