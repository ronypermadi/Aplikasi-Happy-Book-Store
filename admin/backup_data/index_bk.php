<?php
include 'header.php';

$menu = $_REQUEST['menu'];

if(empty($menu)){
echo "<meta http-equiv='refresh' content='0;url=?menu=home'>";
}
if($menu=="home"){
include 'home.php';
}
if($menu=="user_kelola"){
include 'menu_user.php';
}
if($menu=="buku_kelola"){
include 'menu_buku.php';
}
if($menu=="jual_kelola"){
include 'menu_penjualan.php';
}
if($menu=="nota_kelola"){
include 'nota_penjualan.php';
}
if($menu=="nota_kelola_daftar"){
include 'daftar_nota.php';
}
if($menu=="data_member"){
include 'menu_member.php';
}
if($menu=="data_pemesanan"){
include 'menu_pemesanan.php';
}
if($menu=="data_pembayaran"){
include 'menu_pembayaran.php';
}

include 'footer.php';
 ?>
