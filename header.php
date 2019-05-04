<?php
session_start();
include 'core/koneksi.php';
include 'core/fungsi.php';
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
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/datepicker/datepicker3.css">

    <link rel="stylesheet" href="assets/revolution_slider/css/rs-style.css" media="screen">
    <link rel="stylesheet" href="assets/revolution_slider/rs-plugin/css/settings.css" media="screen">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--header start-->
    <header class="header-frontend">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Happy Book Store</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                      <?php
                      $username = $_SESSION[username];
                      $password = $_SESSION[password];
                      $akses = $_SESSION[akses];

                      if(!$akses){?>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?menu=tentang">Tentang</a></li>
                        <li class="dropdown">
                            <a href="#" class="icon-shopping-cart dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                              <?php
                              $hitung = 0;
                              if(empty($_SESSION['shop_chart'])){
                                  $hitung = "0";
                              }
                              else{
                                  foreach($_SESSION['shop_chart'] as $id_produk=>$jml){
                                      $ambil_data = mysql_query("SELECT * FROM buku WHERE  id_buku='$id_produk'");
                                      $tampil_data=mysql_fetch_array($ambil_data);
                                      $hitung++;
                                  }
                              }
                              ?>
                                <?php echo $hitung; ?> item(s)
                            <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="icon-shopping-cart" href="index.php?menu=keranjang"> Lihat Pesanan</a></li>
                            </ul>
                        </li>
                        <li><a href="login_page/">Login/Daftar</a></li>
                        <?php }
                        if($akses=="5"){
                          include 'core/cek_user.php';
                          ?>
                          <li><a href="index.php">Home</a></li>
                          <li><a href="index.php?menu=tentang">Tentang</a></li>
                          <li class="dropdown">
                              <a href="#" class="icon-shopping-cart dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                                <?php
                                $hitung = 0;
                                if(empty($_SESSION['shop_chart'])){
                                    $hitung = "0";
                                }
                                else{
                                    foreach($_SESSION['shop_chart'] as $id_produk=>$jml){
                                        $ambil_data = mysql_query("SELECT * FROM buku WHERE  id_buku='$id_produk'");
                                        $tampil_data=mysql_fetch_array($ambil_data);
                                        $hitung++;
                                    }
                                }
                                ?>
                                  <?php echo $hitung; ?> item(s)
                              <b class=" icon-angle-down"></b></a>
                              <ul class="dropdown-menu">
                                  <li><a class="icon-shopping-cart" href="index.php?menu=keranjang"> Lihat Pesanan</a></li>
                              </ul>
                          </li>
                          <li class="dropdown ">
                              <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Hallo, <b><?php echo nama_user($username); ?></b><b class=" icon-angle-down"></b></a>
                              <ul class="dropdown-menu">
                                <li><a href="profil.php">Profilku</a></li>
                                  <li><a href="core/logout.php">Logout</a></li>
                              </ul>
                          </li>
                          <?php } ?>
                      </ul>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->
