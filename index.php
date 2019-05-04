<?php
include 'header.php';

$menu = $_REQUEST['menu'];

if(empty($menu)){
include 'home.php';
}
if($menu=="keranjang"){
include 'keranjang.php';
}
if ($menu=="check_out") {
  include 'check_out.php';
}
if ($menu=="konfirmasi") {
  include 'konfirmasi.php';
}
if ($menu=="tentang") {
  include 'tentang.php';
}


include 'footer.php';
 ?>
