<?php
include 'header.php';
 ?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <!-- page start-->
      <section class="panel">
          <header class="panel-heading">
              Laporan Keuntungan Happy Book Store
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
                <div class="col-md-4">
                  <label>Laporan Keuntungan Hari Ini :</label>
                  <div class="form-group">
                    <div class="col-md-2">
                      <form class="" data-toggle="collapse" data-target="#kasir_bulan" action="rekap_keuntungan.php?menu=hari" method="post">
                     </div>
                     <div class="col-md-2">
                       <button type="submit" class="btn btn-danger btn-md">Lihat</button>
                     </div></form>
                  </div>
                </div>
                <div class="col-md-4">
                  <label>Laporan Keuntungan Tiap Bulan :</label>
                  <div class="form-group">
                    <div class="col-md-5">
                      <form class="" data-toggle="collapse" data-target="#kasir_bulan" action="rekap_keuntungan.php?menu=bulan" method="post">
                        <select class="form-control" name="bulan">
                          <?php $januari=date(01); $januari=date(02); ?>
                           <option value="01">Januari</option>
                           <option value="02">Februari</option>
                           <option value="03">Maret</option>
                           <option value="04">April</option>
                           <option value="05">Mei</option>
                           <option value="06">Juni</option>
                           <option value="07">Juli</option>
                           <option value="08">Agustus</option>
                           <option value="09">September</option>
                           <option value="10">Oktober</option>
                           <option value="11">November</option>
                           <option value="12">Desember</option>
                       </select>
                     </div>
                     <div class="col-md-1">
                       <button type="submit" class="btn btn-danger btn-md">Lihat</button>
                     </div></form>
                  </div>
                </div>
                <div class="col-md-4">
                  <label>Laporan Keuntungan Tiap Tahun :</label>
                  <div class="form-group">
                    <div class="col-md-5">
                      <form class="" data-toggle="collapse" data-target="#kasir_bulan" action="rekap_keuntungan.php?menu=tahun" method="post">
                        <select class="form-control" name="tahun">
                          <?php
                          $tahun= date('Y') - 10;
                          for($x = $tahun;$x<$tahun + 50;$x++){
                            $y = $x == date('Y') ? ' selected="selected"' : '';
                            echo '<option value="'.$x.'"'.$y.'>'.$x.'</option>';
                          }
                          ?>
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
            if ($menu=="hari") {
              $tgl = date('Y-m-d');
              $show_keuntungan_hari= show_keuntungan_hari();
              echo"
              <div class=adv-table editable-table >
                <div class=clearfix></div>
                  <div class=space15></div>
                    <div id=kasir_hari class=panel-collapse collapse>
                      <div class=panel-body>
                      <h4 align=center>Laporan Keuntungan</h4>
                      <div class='btn-group pull-right'>
                        <button type=button class=btn btn-primary onClick=javascript:popUp('cetak_keuntungan.php?menu=cetak_keuntungan_hari&hari=$tgl')>
                          Print <i class=icon-print></i>
                        </button>
                      </div>
                        <table class=table table-striped table-hover table-bordered id=editable-sample>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th>Harga Pokok</th>
                                <th>Harga Jual</th>
                                <th>Keuntungan</th>
                            </tr>
                            </thead>
                            <tbody>";
                              $no=1; $total='0'; while ($baris= mysql_fetch_array($show_keuntungan_hari)){
                                  echo"<tr>
                                    <td>$no.</td>
                                    <td>"; echo judul($baris[id_buku]); echo"</td><td>";
                                    echo list_tanggal($baris[tanggal]);
                                    echo"</td><td>$baris[jumlah]</td>";
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
                }
            if ($menu=="bulan") {
              $show_keuntungan_tiap_bulan= show_keuntungan_tiap_bulan();
              if ($bulan=$_POST['bulan']) {
                if($bulan == '01')
                	$bul = 'Januari';
                if($bulan == '02')
                	$bul = 'Februari';
                if($bulan == '03')
                	$bul = 'Maret';
                if($bulan == '04')
                	$bul = 'April';
                if($bulan == '05')
                	$bul = 'Mei';
                if($bulan == '06')
                	$bul = 'Juni';
                if($bulan == '07')
                	$bul = 'Juli';
                if($bulan == '08')
                	$bul = 'Agustus';
                if($bulan == '09')
                	$bul = 'September';
                if($bulan == '10')
                	$bul = 'Oktober';
                if($bulan == '11')
                	$bul = 'November';
                if($bulan == '12')
                	$bul = 'Desember';
              }
              echo"
              <div class=adv-table editable-table >
                <div class=clearfix></div>
                  <div class=space15></div>
                    <div id=kasir_hari class=panel-collapse collapse>
                      <div class=panel-body>
                      <h4 align=center>Laporan Keuntungan Bulan "; echo $bul; echo"</h4>
                      <div class='btn-group pull-right'>
                        <button type=button class=btn btn-primary onClick=javascript:popUp('cetak_keuntungan.php?menu=cetak_keuntungan_bulan&bulan=$bulan')>
                          Print <i class=icon-print></i>
                        </button>
                      </div>
                        <table class=table table-striped table-hover table-bordered id=editable-sample>
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th>Harga Pokok</th>
                                <th>Harga Jual</th>
                                <th>Keuntungan</th>
                            </tr>
                            </thead>
                            <tbody>";
                              $no=1; $total='0'; while ($baris= mysql_fetch_array($show_keuntungan_tiap_bulan)){
                                  echo"<tr>
                                    <td>$no.</td>
                                    <td>"; echo judul($baris[id_buku]); echo"</td><td>";
                                    echo list_tanggal($baris[tanggal]);
                                    echo"</td><td>$baris[jumlah]</td>";
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
                }
                if ($menu=="tahun") {
                  $show_keuntungan_tiap_tahun= show_keuntungan_tiap_tahun();
                  $tahun = $_POST['tahun'];
                  echo"
                  <div class=adv-table editable-table >
                    <div class=clearfix></div>
                      <div class=space15></div>
                        <div id=kasir_hari class=panel-collapse collapse>
                          <div class=panel-body>
                          <h4 align=center>Laporan Keuntungan Tahun "; echo $tahun; echo"</h4>
                          <div class='btn-group pull-right'>
                            <button type=button class=btn btn-primary onClick=javascript:popUp('cetak_keuntungan.php?menu=cetak_keuntungan_tahun&tahun=$tahun')>
                              Print <i class=icon-print></i>
                            </button>
                          </div>
                            <table class=table table-striped table-hover table-bordered id=editable-sample>
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah</th>
                                    <th>Harga Pokok</th>
                                    <th>Harga Jual</th>
                                    <th>Keuntungan</th>
                                </tr>
                                </thead>
                                <tbody>";
                                  $no=1; $total='0'; while ($baris= mysql_fetch_array($show_keuntungan_tiap_tahun)){
                                      echo"<tr>
                                        <td>$no.</td>
                                        <td>"; echo judul($baris[id_buku]); echo"</td><td>";
                                        echo list_tanggal($baris[tanggal]);
                                        echo"</td><td>$baris[jumlah]</td>";
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
                    }?>

          </div>
      </section>

</section>
<!--main content end-->
<?php
include 'footer.php';
 ?>
