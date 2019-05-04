<<!DOCTYPE html>
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

      <form class="form-signin" action="../proses.php" method="post">
        <h2 class="form-signin-heading">Form Pendaftaran Member</h2>
        <div class="login-wrap">
            <p>Masukan Data Pribadi Anda</p>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" autofocus required>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" autofocus required>
            <input type="text" name="telepon" class="form-control" placeholder="Telepon" autofocus required>
            <select class="form-control" name="status" required>
              <option>Status</option>
              <option value="1" name="status">Menikah</option>
              <option value="2" name="status">Belum Menikah</option>
              <option value="3" name="status">Duda</option>
              <option value="4" name="status">Janda</option>
            </select><br/>

            <p>Masukan Data Akun Anda</p>
            <input type="text" name="username" class="form-control" placeholder="Username" autofocus required>
            <input type="password" name="sandi" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-login btn-block" name="registrasi" type="submit">Submit</button>

            <div class="registration">
                Sudah Punya Akun ?
                <a class="" href="index.php">
                    Masuk Di Sini
                </a>
            </div>

        </div>

      </form>

    </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../admin/js/jquery.js"></script>
    <script src="../admin/js/bootstrap.min.js"></script>


    </body>
    </html>
