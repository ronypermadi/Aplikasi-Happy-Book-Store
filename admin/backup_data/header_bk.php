<?php
require_once "../core/cek_user.php";
require_once "../core/fungsi.php";
require_once "../core/koneksi.php";

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
    <script type="text/javascript" LANGUAGE="JavaScript">
      function popUp(URL){
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=1,statusbar=0,menubar=0,rezizable=0,width=1000,height=700,left=340,top=100')");
      }
    </script>
  </head>
  <body>
  <section id="container" >
      <!--header start-->
      <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="index.php" class="logo"><img src="img/banner.gif" alt="Favicon Happy Book Store" width="25%"></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="">
                            <span class="username"><?php echo nama_user($username); ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="../core/logout.php"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>

        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                <?php
                $username = $_SESSION[username];
                $password = $_SESSION[password];
                $akses = $_SESSION[akses];

                if($akses=='1'){
                  echo
                    "<li>
                      <a href=index.php>
                          <i class=icon-home></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class=sub-menu>
                      <a href=?=user_kelola>
                          <i class=icon-user></i>
                          <span>Mengelola Hak Akses</span>
                      </a>
                      <ul class=sub>
                          <li><a href=menu_user.php?menu=user_kelola1>Super Admin</a></li>
                          <li><a href=menu_user.php?menu=user_kelola2>Petugas Gudang</a></li>
                          <li><a href=menu_user.php?menu=user_kelola3>Kasir</a></li>
                          <li><a href=menu_user.php?menu=user_kelola4>Pemilik</a></li>
                          <li><a href=menu_user.php?menu=user_kelola5>Member</a></li>
                      </ul>
                  </li>
                  <li class=sub-menu>
                      <a href=?=user_kelola>
                          <i class=icon-user></i>
                          <span>Mengelola Member</span>
                      </a>
                      <ul class=sub>
                          <li><a href=index.php?menu=data_member>Data Member</a></li>
                          <li><a href=index.php?menu=data_pemesanan>Data Pemesanan</a></li>
                          <li><a href=index.php?menu=data_pembayaran>Data Pembayaran</a></li>
                      </ul>
                  </li>
                  <li class=sub-menu>
                      <a href=index.php?menu=buku_kelola >
                          <i class=icon-th></i>
                          <span>Mengelola Buku</span>
                      </a>
                  </li>
                  <li class=sub-menu>
                      <a href=index.php?menu=jual_kelola >
                          <i class=icon-shopping-cart></i>
                          <span>Transaksi</span>
                      </a>
                  </li>
                  <li class=sub-menu>
                      <a href= >
                          <i class=icon-list-alt></i>
                          <span>Laporan</span>
                      </a>
                      <ul class=sub>
                      <li class=sub-menu>
                          <a  href=rekap_penjualan.php>Rekap Penjualan</a>
                      </li>
                          <li class=sub-menu>
                              <a  href=rekap_keuntungan.php>Rekap Keuntungan</a>
                          </li>
                          <li><a href=rekap_penjualan_kasir.php>Rekap Penjualan Kasir</a></li>
                          <li class=sub-menu>
                              <a  href=>Rekap Data User</a>
                              <ul class=sub>
                                  <li><a  href=javascript:;>Super Admin</a></li>
                                  <li><a  href=javascript:;>Petugas Gudang</a></li>
                                  <li><a  href=javascript:;>Kasir</a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>";
                }
                if($akses=='2'){
                  echo
                    "<li>
                      <a href=index.php>
                          <i class=icon-home></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class=sub-menu>
                      <a href=?menu=buku_kelola >
                          <i class=icon-th></i>
                          <span>Mengelola Buku</span>
                      </a>
                  </li>
                  ";
                }
                if($akses=='3'){
                  echo
                    "<li>
                      <a href=index.php>
                          <i class=icon-home></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li class=sub-menu>
                      <a href=?menu=jual_kelola >
                          <i class=icon-shopping-cart></i>
                          <span>Transaksi</span>
                      </a>
                  </li>
                  <li class=sub-menu>
                      <a href=?menu=nota_kelola_daftar >
                          <i class=icon-shopping-cart></i>
                          <span>Nota Penjualan</span>
                      </a>
                  </li>";
                }
                if($akses=='4'){
                  echo
                    "<li>
                      <a href=index.php>
                          <i class=icon-home></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li class=sub-menu>
                      <a href= >
                          <i class=icon-list-alt></i>
                          <span>Laporan</span>
                      </a>
                      <ul class=sub>
                          <li><a href=?menu=nota_kelola_daftar>Nota Penjualan</a></li>
                      </ul>
                  </li>";
                }

                  ?>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
