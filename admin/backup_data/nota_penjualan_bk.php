<?php
require_once "../core/cek_user.php";
require_once "../core/fungsi.php";
require_once "../core/koneksi.php";
$username = $_SESSION[username];
$password = $_SESSION[password];
$akses = $_SESSION[akses];

if($akses=='3'||$akses=='1'){

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

    <title>GRAMEDIA TOKO BUKU</title>

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

<!-- Main charts -->
          <div class="row">
            <div class="col-lg-12">

              <div class="panel panel-primary">
                  <!--<div class="panel-heading navyblue"> INVOICE</div>-->
                  <div class="panel-body">
                      <div class="row invoice-list">
                          <div class="text-center corporate-id">
                            <?php
                              $tgl=date('Y-m-d');
                              $nonota=$_GET[nonota];

                              $hasil=mysql_query("SELECT penjualan.id_buku, buku.judul, buku.harga_jual, penjualan.jumlah FROM penjualan,buku WHERE penjualan.id_buku=buku.id_buku and penjualan.nonota='$nonota'",$id_mysql);

                             ?>
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
                                    <td style="font-size:16px;text-align:center;">
                                      No Nota<span>:</span><?php echo $nonota ?><br/>
                                      Tanggal<span>:</span> <?php echo list_tanggal($tgl) ?><br/>
                                      Kasir<span>:</span> <?php echo nama_kasir_popup($username) ?>
                                    </td>
                                  </td>
                                </tr>
                              </table>
                          </div>
                      </div>
                          <div class="adv-table editable-table ">
                              <div class="clearfix">
                                <table class="table table-bordered table-striped table-hover">
                                  <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Judul</th>
                                      <th>Harga</th>
                                      <th>Jumlah</th>
                                      <th>Total</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <?php
                                      $no=1;
                                      while($baris=mysql_fetch_row($hasil)){
                                    ?>

                                    <tr>
                                      <td><?php echo $no ?></td>
                                      <td><?php echo $baris[1] ?></td>
                                      <td><?php echo  'Rp '. number_format($baris[2]) ?></td>
                                      <td><?php echo $baris[3] ?></td>
                                      <td>
                                      <?php
                                        $sub_total = $baris[2] * $baris[3];
                                        echo  'Rp '. number_format($sub_total);
                                        echo "</td></tr>";
                                        if($no=='1')
                                          $total = $sub_total;
                                        else
                                          $total = $total + $sub_total;

                                        $no++;
                                        }

                                        $nonota=$_GET[nonota];
                                        $bayar = $_GET[bayar];
                                        $kembali = $bayar - $total;
                                      ?>
                                      <tr>
                                      <td colspan=3 rowspan=4></td>
                                      <td><b>Jumlah Total<b></td>
                                      <td><b><?php echo 'Rp '. number_format($total); ?></b></td>
                                    </tr>
                                      <tr>
                                        <td><b>Jumlah Uang</b></td>
                                        <td><b><?php echo 'Rp '. number_format($bayar); ?></b></td>
                                      </tr>
                                      <tr>
                                        <td><b>Jumlah Kembalian</b></td>
                                        <td><b><?php echo 'Rp '. number_format($kembali); ?></br></td>
                                      </tr>
                                    </table><br>
                                  <?php
                                  //echo "<tr>
                              //<td colspan=5  align=center>Jumlah</td>
                              //<td>";echo 'Rp '. number_format($total);
                              //echo "</td>";

                          //echo "</table><br>";
                                  ?>
                                </div>
                            </div>
                  </div>
              </div>
        </div>
      </div>
          <!-- /main charts -->
          <?php
          }
else
  echo "Anda tidak berhak mengakses file ini";
  ?>
</body>
