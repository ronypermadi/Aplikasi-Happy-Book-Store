<?php
include 'header.php';
$show_user3= show_user3();
$show2_user3= show_user3();
 ?>
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
  <!-- page start-->
  <section class="panel">
      <header class="panel-heading">
          Laporan Penjualan Tiap Kasir
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
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-6">
              <label>Penjualan Kasir Tiap Hari :</label>
              <div class="form-group">
              <div class="col-md-5">
                <form class="" data-toggle="collapse" data-target="#kasir_hari" action="rekap_penjualan_kasir.php?menu=kasir_hari" method="post">
                  <select class="form-control" name="kasir">
                      <option value="">Nama Petugas Kasir</option>
                      <?php while ($baris=mysql_fetch_array($show_user3)) {?>
                       <option value="<?php echo $baris['id_kasir']?>"><?php echo $baris['nama']?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-1">
                  <button type="submit" class="btn btn-danger btn-md">Lihat</button>
                </div></form>
              </div>
            </div>
            <div class="col-md-6">
              <label>Penjualan Kasir Bulan Hari :</label>
              <div class="form-group">
                <div class="col-md-5">
                  <form class="" data-toggle="collapse" data-target="#kasir_bulan" action="rekap_penjualan_kasir.php?menu=kasir_bulan" method="post">
                    <select class="form-control" name="kasir">
                       <option value="">Nama Petugas Kasir</option>
                       <?php while ($baris=mysql_fetch_array($show2_user3)) {?>
                        <option value="<?php echo $baris['id_kasir']?>"><?php echo $baris['nama']?></option>
                     <?php } ?>
                   </select>
                 </div>
                 <div class="col-md-1">
                   <button type="submit" class="btn btn-danger btn-md">Lihat</button>
                 </div></form>
              </div>
            </div>
          </div>
        </div>
      <?php
      $menu = $_REQUEST['menu'];
      if ($menu=="kasir_hari") {
        $show_kasir_hari= show_kasir_hari();
          $id_kasir = id_kasir($username);
          $tgl=date('Y-m-d');
        echo"
        <div class=adv-table editable-table >
          <div class=clearfix></div>
            <div class=space15></div>
              <div id=kasir_hari class=panel-collapse collapse>
                <div class=panel-body>
                <h4 align=center>Laporan Penjualan Per Hari</h4>
                  <table cellpadding=0>
                    <tr>
                      <td>Petugas Kasir</td><td>";
                      echo nama_kasir($kasir); echo "</td>
                  </tr>
                    <tr>
                      <td>Tanggal Sekarang</td><td>"; echo list_tanggal($tgl); echo"</td>
                    </tr>
                  </table>
                  <table class=table table-striped table-hover table-bordered id=editable-sample>
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                          <th>Harga Pokok</th>
                          <th>Harga Jual</th>
                          <th>Keuntungan</th>
                      </tr>
                      </thead>
                      <tbody>";
                        $no=1; $total='0'; while ($baris= mysql_fetch_array($show_kasir_hari)){
                            echo"<tr>
                              <td>$no;</td>
                              <td>"; echo judul($baris[id_buku]); echo"</td>
                              <td>$baris[jumlah]</td>";
                              $jumlah_pokok=$baris[jumlah] * harga_pokok($baris[id_buku]);
                              echo"<td>"; echo  'Rp '. number_format($jumlah_pokok); echo"</td>
                              <td>"; echo  'Rp '. number_format($baris[total]); echo"</td>";
                              $untung = $baris[total] - $jumlah_pokok;
                              echo"<td>"; echo  'Rp '. number_format($untung); echo"</td>
                            </tr>";
                        if($no=='1')
                        	$keuntungan = $untung;
                        else
                        	$keuntungan = $keuntungan + $untung;
                           $no++;}

                      echo"</tbody>
                      <tfoot>
                        <tr>
                          <td colspan=4 rowspan=4 align=center></td>
                          <td><b>Jumlah Keuntungan</b></td>
                          <td><b>"; echo  'Rp '. number_format($keuntungan); echo"</b></td>
                        </tr>
                      </tfoot>
                  </table>
                </div>
              </div>
            </div>";
          }
          if ($menu=="kasir_bulan") {
            $show_kasir_bulan= show_kasir_bulan();
              $id_kasir = id_kasir($username);
              $tgl=date('Y-m-d');
            echo"
            <div class=adv-table editable-table >
              <div class=clearfix></div>
                <div class=space15></div>
                  <div id=kasir_hari class=panel-collapse collapse>
                    <div class=panel-body>
                    <h4 align=center>Laporan Penjualan Per Bulan</h4>
                      <table cellpadding=0>
                        <tr>
                          <td>Petugas Kasir</td><td>";
                          echo nama_kasir($kasir); echo "</td>
                      </tr>
                        <tr>
                          <td>Tanggal Sekarang</td><td>"; echo list_tanggal($tgl); echo"</td>
                        </tr>
                      </table>
                      <table class=table table-striped table-hover table-bordered id=editable-sample>
                          <thead>
                          <tr>
                              <th>No</th>
                              <th>Judul Buku</th>
                              <th>Tanggal</th>
                              <th>Jumlah</th>
                              <th>Harga Pokok</th>
                              <th>Harga Jual</th>
                              <th>Keuntungan</th>
                          </tr>
                          </thead>
                          <tbody>";
                            $no=1; $total='0'; while ($baris= mysql_fetch_array($show_kasir_bulan)){
                                echo"<tr>
                                  <td>$no;</td>
                                  <td>"; echo judul($baris[id_buku]); echo"</td>
                                  <td>"; echo list_tanggal($baris[tanggal]); echo"</td>
                                  <td>$baris[jumlah]</td>";
                                  $jumlah_pokok=$baris[jumlah] * harga_pokok($baris[id_buku]);
                                  echo"<td>"; echo  'Rp '. number_format($jumlah_pokok); echo"</td>
                                  <td>"; echo  'Rp '. number_format($baris[total]); echo"</td>";
                                  $untung = $baris[total] - $jumlah_pokok;
                                  echo"<td>"; echo  'Rp '. number_format($untung); echo"</td>
                                </tr>";
                            if($no=='1')
                            	$keuntungan = $untung;
                            else
                            	$keuntungan = $keuntungan + $untung;
                               $no++;}

                          echo"</tbody>
                          <tfoot>
                            <tr>
                              <td colspan=5 rowspan=5 align=center></td>
                              <td><b>Jumlah Keuntungan</b></td>
                              <td><b>"; echo  'Rp '. number_format($keuntungan); echo"</b></td>
                            </tr>
                          </tfoot>
                      </table>
                    </div>
                  </div>
                </div>";
              } ?>
      </div>
    </section>
</section>
<!--main content end-->
<?php
include 'footer.php';
 ?>
