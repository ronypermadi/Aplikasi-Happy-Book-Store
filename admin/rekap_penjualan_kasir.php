<?php
include 'header.php';
$show_user3= show_user3();
$show2_user3= show_user3();
if($akses=='1'||$akses=='3'||$akses=='4'){
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
            <h4 align="center">Rekap Transaksi Kasir Happy Book Store</h4>
          </div><br/>
          <div class="col-md-12">
            <form class="" data-toggle="collapse" data-target="#kasir" action="rekap_penjualan_kasir.php?menu=kasir_rekap" method="post">
            <div class="col-md-4">
              <div class="form-group">
                  <select class="form-control" name="kasir">
                      <option value="">Nama Petugas Kasir</option>
                      <?php while ($baris=mysql_fetch_array($show_user3)) {?>
                       <option value="<?php echo $baris['id_kasir']?>"><?php echo $baris['nama']?></option>
                    <?php } ?>
                  </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select class="form-control" name="bulan">
                  <option value="">Bulan</option>
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
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select class="form-control" name="tahun">
                  <option value="">Tahun</option>
                  <?php
                  $tahun= date('Y') - 10;
                  for($x = $tahun;$x<$tahun + 50;$x++){
                    echo '<option value="'.$x.'"'.$y.'>'.$x.'</option>';
                  }
                  ?>
               </select>
                 </div>
              </div>
              <div class="col-md-2">
                <button type="submit" class="btn btn-danger btn-md">Tampilkan Data</button>
              </div></form>
            </div>
          </div>
        </div>
      <?php
      $menu = $_REQUEST['menu'];
      if ($menu=="kasir_rekap") {
          $kasir = $_POST['kasir'];
          $bulan = $_POST['bulan'];
          $tahun = $_POST['tahun'];

          $show_kasir_rekap = mysql_query("SELECT * FROM penjualan WHERE id_kasir='$kasir' and month(tanggal)='$bulan' and year(tanggal)='$tahun'",$id_mysql);

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

          $tgl = $bul." ".$tahun;
          $tgl_sekarang = date('Y-m-d');
        echo"
        <div class=adv-table editable-table >
          <div class=clearfix></div>
            <div class=space15></div>
              <div id=kasir class=panel-collapse collapse>
                <div class=panel-body>
                <h4 align=center>Laporan Transaksi Kasir <b>"; echo nama_kasir($kasir); echo"</b> <b>"; echo $tgl; echo"</b></h4>
                  <table cellpadding=0>
                    <tr>
                      <td>Petugas Kasir</td><td>";
                      echo nama_kasir($kasir); echo "</td>
                  </tr>
                    <tr>
                      <td>Tanggal Sekarang</td><td>"; echo list_tanggal($tgl_sekarang); echo"</td>
                    </tr>
                  </table>
                  <table class=table table-striped table-hover table-bordered id=editable-sample>
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Tanggal</th>
                          <th>Nama Barang</th>
                          <th>Jumlah</th>
                          <th>Harga Pokok</th>
                          <th>Harga Jual</th>
                          <th>Keuntungan</th>
                      </tr>
                      </thead>
                      <tbody>";
                        $no=1; $total='0'; while ($baris= mysql_fetch_array($show_kasir_rekap)){
                            echo"<tr>
                              <td>$no;</td>
                              <td>"; echo list_tanggal($baris[tanggal]); echo"</td>
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
<?php } else
  echo "Anda tidak berhak mengakses file ini"; ?>
<?php
include 'footer.php';
 ?>
