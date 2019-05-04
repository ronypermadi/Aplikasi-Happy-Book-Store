<?php
if (!$akses){
  echo "<script>alert('Silahkan Login Untuk Konfirmasi Pembayaran Anda')</script>";
  echo "<script>window.location='login_page/';</script>";
}elseif($akses=="5"){
?>

<div class="container">
  <style media="screen">
  .jumbotron {
    position: relative;
    background: #000 url("img/3.png") center;
    width: 100%;
    height: 100%;
    background-size: cover;
    overflow: hidden;
  }
  </style>
  <div class="jumbotron" align="center">
    <h2><font style="color:white;"><b>Happy Book Store</b></font></h2>
    <p><font style="color:white;">Toko Buku Terbesar & Terpercaya di Indonesia.</font></p>
  </div>
</div>

    <!--container start-->
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!--feature start-->
            <div class="text-center feature-head">
                <h1>welcome to Happy Book Store</h1>
                <p>Toko Buku Terbesar & Terpercaya di Indonesia</p>
            </div>
          </div>
          <div class="col-md-12">
            <h3 class="title" align="center"><b>Konfirmasi Pembayaran</b></h3>
              <div class="table-responsive">

              </div>
    </div><br />
     <!--parallax start-->
     <section class="parallax1">
         <div class="container">
           <div class="row">
               <h1>“Ada banyak cara kecil untuk meluaskan dunia anak-anak. Cinta Buku adalah yang terbaik dari segalanya.” (Jacqueline Kennedy)</h1>
           </div>
         </div>
     </section>
     <!--parallax end-->
     <?php
   }
     ?>
