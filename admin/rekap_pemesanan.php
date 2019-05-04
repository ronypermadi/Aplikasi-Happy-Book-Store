<?php
include 'header.php';
$show_user3= show_user3();
$show2_user3= show_user3();

if($akses=='1'||$akses=='4'){ ?>
<!--main content start-->
<section id="main-content">
  <section class="wrapper">
  <!-- page start-->
  <section class="panel">
      <header class="panel-heading">
          Laporan Pemesanan Happy Book Store
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
            <h4 align="center">Rekap Data Pemesanan Happy Book Store</h4>
          </div><br/>
          <div class="col-md-12">
            <form class="" data-toggle="collapse" data-target="#pemesanan" action="rekap_pemesanan.php?menu=pemesanan_rekap" method="post">
            <div class="col-md-5">
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
            <div class="col-md-5">
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
      if ($menu=="pemesanan_rekap") {
          $bulan = $_POST['bulan'];
          $tahun = $_POST['tahun'];

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
        ?>
        <div class=adv-table editable-table >
              <div id=kasir class=panel-collapse collapse>
                <div class=panel-body>
                <h4 align=center>Laporan Pemesanan <b><?php echo $tgl; ?></b></h4>
                <div class=clearfix>
                  <div class='btn-group pull-right'>
                    <button type=button class=btn btn-primary onClick="javascript:popUp('cetak_pemesanan.php?menu=cetak_pemesanan&bulan=<?php echo $bulan; ?>&tahun=<?php echo $tahun; ?>')" >
                      Print <i class=icon-print></i>
                    </button>
                  </div>
                </div>
                  <div class=space15></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Pemesanan</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Total</th>
                  </tr>
                  </thead>
                  <tbody>
<?php
  $ambil_data = mysql_query("SELECT * FROM pemesanan JOIN kasir ON pemesanan.id_kasir=kasir.id_kasir WHERE month(tanggal)='$bulan' and year(tanggal)='$tahun'");
  $no=1;
  while ($tampil_data=mysql_fetch_array($ambil_data)){
  $ambil_data_pembayaran = mysql_query("SELECT * FROM pemesanan JOIN pembayaran ON pemesanan.kode_pemesanan=pembayaran.kode_pemesanan WHERE pemesanan.kode_pemesanan='$tampil_data[kode_pemesanan]' and month(tanggal)='$bulan' and year(tanggal)='$tahun'");
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
                      </tr>
                      <?php $no++; }  ?>
                </tbody>
          </table>
                </div>
              </div>
              <?php } ?>
            </div>
      </div>
    </section>
</section>
<!--main content end-->
<?php } else
  echo "Anda tidak berhak mengakses file ini"; ?>
<?php
include 'footer.php';
 ?>
