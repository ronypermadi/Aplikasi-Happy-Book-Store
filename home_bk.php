<?php
$ambil_produk = mysql_query("SELECT * FROM buku ");
 ?>

 <div class="container">
   <style media="screen">
   .jumbotron {
     position: relative;
     background: #000 url("img/images.jpg") center center;
     width: 100%;
     height: 100%;
     background-size: cover;
     overflow: hidden;
   }
   </style>
   <div class="jumbotron" align="center">
     <h2>Happy Book Store</h2>
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
            <?php while ($tampil_produk= mysql_fetch_array($ambil_produk)){ ?>
            <div class="col-lg-4 col-sm-4">
                <section>
                    <div class="f-box">
                      <h4 align="center"><b><?php echo $tampil_produk['judul'] ?><b></h4>
                        <?php echo "<img src=admin/img/buku/".$tampil_produk['foto'].">"; ?>
                        <h2><?php echo 'Rp '. number_format($tampil_produk['harga_jual']) ?></h2>
                        <a href=""><button data-toggle="modal" data-target="#detail-<?php echo $tampil_produk['id_buku']; ?>" class="btn btn-primary" type="button" onClick=""><span>Details</span></button></a>
                        <a href="proses.php?menu=keranjang&aksi=tambah&id=<?php echo $tampil_produk['id_buku']; ?>"><button class="btn btn-warning" type="button" onClick=""><span>Beli Sekarang</span></button></a>

                        <!-- Modal -->
                        <div class="modal fade" id="detail-<?php echo $tampil_produk['id_buku']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog" style="width:1000px">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Detail Buku <b><?php echo $tampil_produk['judul'] ?></b></h4>
                              </div>
                              <div class="modal-body">
                                <div class="btn-group" data-toggle="buttons">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="box">
                                        <div class="box-body" style="width:950px">
                                          <div class="col-md-6">
                                            <?php echo "<img src=admin/img/buku/".$tampil_produk['foto']." width=75%>"; ?>
                                            <h2 style="color:grey;"><b><?php echo 'Rp '. number_format($tampil_produk['harga_jual']) ?></b></h2>
                                          </div>
                                          <div class="col-md-6">
                                            <label><h4><b>Detail Buku</b></h4></label>
                                            <table class="table">
                                              <tbody>
                                              <tr align="left">
                                                <td>Judul</td><td><?php echo $tampil_produk['judul'] ?></td>
                                              </tr>
                                              <tr align="left">
                                                <td>ISBN</td><td><?php echo $tampil_produk['noisbn'] ?></td>
                                              </tr>
                                              <tr align="left">
                                                <td>Penulis</td><td><?php echo $tampil_produk['penulis'] ?></td>
                                              </tr>
                                              <tr align="left">
                                                <td>Penerbit</td><td><?php echo $tampil_produk['penerbit'] ?></td>
                                              </tr>
                                              <tr align="left">
                                                <td>Tahun</td><td><?php echo $tampil_produk['tahun'] ?></td>
                                              </tr>
                                              </tbody>
                                            </table>
                                            <table class="table">
                                              <thead>
                                                <th align="center">Keterangan</th>
                                              </thead>
                                              <tbody>
                                                <td align="justify"><?php echo $tampil_produk['keterangan'] ?></td>
                                              </tbody>
                                            </table>
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
                    </div>
                </section>
            </div>
            <?php } ?>
            <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            <!--feature end-->

        </div></div>
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
