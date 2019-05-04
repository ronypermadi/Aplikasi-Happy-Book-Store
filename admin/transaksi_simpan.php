<?php
include "../core/koneksi.php";
include "../core/fungsi.php";

$id_buku1 = $_POST[id_buku];
$jumlah = $_POST[jumlah];
$nonota = $_POST[nonota];
$username = $_POST[username];

$id_buku = substr($id_buku1,0,13);

$waktu = date("Y-m-d H:i:s");

echo "id_buku = $id_buku<br>jumlah = $jumlah<br>no nota = $nonota<br>username = $username<br>waktu = $waktu<br>";

if ($jumlah == '')
$jumlah='1';


$id_kasir = id_kasir($username);
$harga_jual = harga_jual($id_buku);
$total = $harga_jual * $jumlah;



$hasil = mysql_query("INSERT INTO penjualan (nonota , id_buku ,id_kasir , jumlah , total , tanggal ) VALUES ('$nonota' , '$id_buku' ,'$id_kasir' , '$jumlah', '$total' , '$waktu') ", $id_mysql);

if(!$hasil)
	echo "Penyimpanan penjualan gagal";
else
	echo "Penyimpanan penjualan berhasil";

print("<html><head><meta http-equiv='refresh' content='0;url=index.php?menu=jual_kelola&tampil=1&no=$nonota'></head><body></body></html>");

?>
