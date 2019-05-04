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
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../admin/css/style.css" rel="stylesheet">
    <link href="../admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="../core/login.php" method="post">
        <h2 class="form-signin-heading">Member Area</h2>
        <div class="login-wrap">
            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
            <input type="password" name="sandi" class="form-control" placeholder="Password">
            <button class="btn btn-lg btn-login btn-block" name="login" type="submit">Login</button>
            <div class="registration">
                <a href="../" align="center">Back To Home</a></br>
                Belum Punya Akun?
                <a class="" href="registration.php">
                    Buat Akun Sekarang
                </a>
            </div>
      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../admin/js/jquery.js"></script>
    <script src="../admin/js/bootstrap.min.js"></script>


  </body>
</html>
