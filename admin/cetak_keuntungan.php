<?php
require_once "../core/cek_user.php";
require_once "../core/fungsi.php";
require_once "../core/koneksi.php";
$username = $_SESSION[username];
$password = $_SESSION[password];
$akses = $_SESSION[akses];

if($akses=='4'||$akses=='1'){

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Happy Book Store</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--main content start-->

<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function printPage() {
if (window.print) {
agree = confirm('Apakah Akan Mencetak Nota ini ?');
if (agree) window.print();
   }
}
//  End -->
</script>
<body OnLoad="printPage()">

<?php
$menu = $_REQUEST['menu'];
if ($menu=="cetak_keuntungan_hari") {
  if ($_GET['hari']) {
  $show_keuntungan_hari= mysql_query("SELECT * FROM penjualan WHERE tanggal LIKE '$_GET[hari]%'",$id_mysql);
  ?>
<!-- page start-->
<section class="panel">
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
            </div>
            <div class="space15"></div>
            <h4 align=center>Laporan Keuntungan</h4>
            <?php
            $id_kasir = id_kasir($username);
            ?>
            <table class="table table-striped table-hover table-bordered" id="editable-sample">
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
                <tbody>
                  <?php $no=1; $total='0'; while ($baris= mysql_fetch_array($show_keuntungan_hari)){?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo judul($baris[id_buku]); ?></td>
                        <td><?php echo $baris[jumlah]; ?></td>
                        <?php $jumlah_pokok=$baris[jumlah] * harga_pokok($baris[id_buku]); ?>
                        <td><?php echo  'Rp '. number_format($jumlah_pokok) ?></td>
                        <td><?php echo  'Rp '. number_format($baris[total]) ?></td>
                        <?php $untung = $baris[total] - $jumlah_pokok; ?>
                        <td><?php echo  'Rp '. number_format($untung) ?></td>
                      </tr>
                  <?php
                  if($no=='1')
                    $keuntungan = $untung;
                  else
                    $keuntungan = $keuntungan + $untung;
                     $no++;}
                  ?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan=4 rowspan=4 align=center></td>
                    <td><b>Jumlah Keuntungan</b></td>
                    <td><b><?php echo  'Rp '. number_format($keuntungan) ?></b></td>
                  </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>
<!-- page end-->
          <?php
      }  } if ($menu=="cetak_keuntungan_bulan") {
          if ($_GET['bulan']) {
            if ($bulan=$_GET['bulan']) {
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
          $show_keuntungan_tiap_bulan= mysql_query("SELECT * FROM penjualan WHERE month(tanggal)='$_GET[bulan]'",$id_mysql);
          ?>
        <!-- page start-->
        <section class="panel">
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
                    </div>
                    <div class="space15"></div>
                    <h4 align=center>Laporan Keuntungan Bulan <?php echo $bul; ?></h4>
                    <?php
                    $id_kasir = id_kasir($username);
                    ?>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
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
                        <tbody>
                          <?php $no=1; $total='0'; while ($baris= mysql_fetch_array($show_keuntungan_tiap_bulan)){?>
                              <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo judul($baris[id_buku]); ?></td>
                                <td><?php echo list_tanggal($baris[tanggal]); ?></td>
                                <td><?php echo $baris[jumlah]; ?></td>
                                <?php $jumlah_pokok=$baris[jumlah] * harga_pokok($baris[id_buku]); ?>
                                <td><?php echo  'Rp '. number_format($jumlah_pokok) ?></td>
                                <td><?php echo  'Rp '. number_format($baris[total]) ?></td>
                                <?php $untung = $baris[total] - $jumlah_pokok; ?>
                                <td><?php echo  'Rp '. number_format($untung) ?></td>
                              </tr>
                          <?php
                          if($no=='1')
                            $keuntungan = $untung;
                          else
                            $keuntungan = $keuntungan + $untung;
                             $no++;}
                          ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan=5 rowspan=5 align=center></td>
                            <td><b>Jumlah Keuntungan</b></td>
                            <td><b><?php echo  'Rp '. number_format($keuntungan) ?></b></td>
                          </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
        <!-- page end-->
                  <?php
                }} if ($menu=="cetak_keuntungan_tahun"){
                  if ($_GET['tahun']) {
                  $show_keuntungan_tiap_tahun= mysql_query("SELECT * FROM penjualan WHERE year(tanggal)='$_GET[tahun]'",$id_mysql);
                  ?>
                <!-- page start-->
                <section class="panel">
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
                            </div>
                            <div class="space15"></div>
                            <h4 align=center>Laporan Keuntungan Tahun <?php echo $tahun; ?></h4>
                            <?php
                            $id_kasir = id_kasir($username);
                            ?>
                            <table class="table table-striped table-hover table-bordered" id="editable-sample">
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
                                <tbody>
                                  <?php $no=1; $total='0'; while ($baris= mysql_fetch_array($show_keuntungan_tiap_tahun)){?>
                                      <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo judul($baris[id_buku]); ?></td>
                                        <td><?php echo list_tanggal($baris[tanggal]); ?></td>
                                        <td><?php echo $baris[jumlah]; ?></td>
                                        <?php $jumlah_pokok=$baris[jumlah] * harga_pokok($baris[id_buku]); ?>
                                        <td><?php echo  'Rp '. number_format($jumlah_pokok) ?></td>
                                        <td><?php echo  'Rp '. number_format($baris[total]) ?></td>
                                        <?php $untung = $baris[total] - $jumlah_pokok; ?>
                                        <td><?php echo  'Rp '. number_format($untung) ?></td>
                                      </tr>
                                  <?php
                                  if($no=='1')
                                    $keuntungan = $untung;
                                  else
                                    $keuntungan = $keuntungan + $untung;
                                     $no++;}
                                  ?>
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan=5 rowspan=5 align=center></td>
                                    <td><b>Jumlah Keuntungan</b></td>
                                    <td><b><?php echo  'Rp '. number_format($keuntungan) ?></b></td>
                                  </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </section>
                <!-- page end-->
                          <?php
                        }}
              }
else
  echo "Anda tidak berhak mengakses file ini";
  ?>
</body>
