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
if ($menu=="cetak_member") {
  $show_user5 = show_user5();
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
            <h4 align=center>Rekap Data Member Happy Book Store</h4>
            <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <th>Status</th>
                      <th>Username</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1;  while ($baris= mysql_fetch_array($show_user5)){?>
                    <tr>
                      <td><?php echo " $no "; ?></td>
                      <td><?php echo $baris['nama'] ?></td>
                      <td><?php echo $baris['alamat'] ?></td>
                      <td><?php echo $baris['telepon'] ?></td>
                      <td><?php echo list_status($baris['status']) ?></td>
                      <td><?php echo $baris['username'] ?></td>
                    </tr>
                      <?php $no++;} ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- page end-->
          <?php
      } if ($menu=="cetak_kasir") {
        $show_user3 = show_user3();
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
                  <h4 align=center>Rekap Data Kasir Happy Book Store</h4>
                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Status</th>
                            <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;  while ($baris= mysql_fetch_array($show_user3)){?>
                          <tr>
                            <td><?php echo " $no "; ?></td>
                            <td><?php echo $baris['nama'] ?></td>
                            <td><?php echo $baris['alamat'] ?></td>
                            <td><?php echo $baris['telepon'] ?></td>
                            <td><?php echo list_status($baris['status']) ?></td>
                            <td><?php echo $baris['username'] ?></td>
                          </tr>
                            <?php $no++;} ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </section>
      <!-- page end-->
                <?php
            } if ($menu=="cetak_petugas_gudang") {
              $show_user2 = show_user2();
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
                        <h4 align=center>Rekap Data Petugas Gudang Happy Book Store</h4>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Alamat</th>
                                  <th>Telepon</th>
                                  <th>Status</th>
                                  <th>Username</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $no=1;  while ($baris= mysql_fetch_array($show_user2)){?>
                                <tr>
                                  <td><?php echo " $no "; ?></td>
                                  <td><?php echo $baris['nama'] ?></td>
                                  <td><?php echo $baris['alamat'] ?></td>
                                  <td><?php echo $baris['telepon'] ?></td>
                                  <td><?php echo list_status($baris['status']) ?></td>
                                  <td><?php echo $baris['username'] ?></td>
                                </tr>
                                  <?php $no++;} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- page end-->
                      <?php
                  } 
              }
else
  echo "Anda tidak berhak mengakses file ini";
  ?>
</body>
