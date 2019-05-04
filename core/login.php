<?php
session_start();
$username =$_POST['username'];
$sandi =$_POST['sandi'];

include "koneksi.php";

$hasil = mysql_query("SELECT * FROM kasir WHERE username='$username' and password=password('$sandi')", $id_mysql);

$jumlah = mysql_num_rows($hasil);

if($jumlah==0){
echo "<script>alert('Login Gagal Silahkan Ulangi Lagi')</script>";
print ("<html><head><meta http-equiv='refresh' content='0;url=../login_page/index.php'></head><body></body></html>");
}
else{
echo "Username dan Password cocok";

while ($baris=mysql_fetch_array($hasil)){
$username=$baris['username'];
$password=$baris['password'];
$akses=$baris['akses'];
$id_kasir=$baris['id_kasir'];
}

$_SESSION[username]=$username;
$_SESSION[password]=$password;
$_SESSION[akses]=$akses;
$_SESSION[id_kasir]=$id_kasir;
if ($akses==5) {
  print ("<html><head><meta http-equiv='refresh' content='0;url=../index.php'></head><body></body></html>");
}else
print ("<html><head><meta http-equiv='refresh' content='0;url=../admin/index.php'></head><body></body></html>");
}
?>
