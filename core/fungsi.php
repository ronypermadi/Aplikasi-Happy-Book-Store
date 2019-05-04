<?php
//1. Fungsi merubah username menjadi nama lengkap
function nama_user ($username){
include "koneksi.php";
$hasil = mysql_query("SELECT * FROM kasir WHERE username='$username'", $id_mysql);
while($baris=mysql_fetch_array($hasil)){
return $baris[nama];
}
}
//2. Fungsi merubah username menjadi nama lengkap
function nama_akses ($id){
include "koneksi.php";
$hasil = mysql_query("SELECT * FROM list_akses WHERE id_akses='$id'", $id_mysql);
while($baris=mysql_fetch_array($hasil)){
return $baris[akses];
}
}
//3. Fungsi menampilkan dropdown hak akses
function drop_akses($id){
  include 'koneksi.php';
  $hasil = mysql_query("SELECT * FROM list_akses", $id_mysql);
  while ($baris=mysql_fetch_array($hasil)) {
    echo "<option value=$baris[id_akses] ";
    if ($id==$baris[id_akses])
      echo "SELECTED";
    echo">$baris[akses]</option>";
  }
}
//4. Fungsi merubah status menjadi nama status
function list_status($status)
{
	if($status == '1')
		$ket = 'Menikah';
	if($status == '2')
		$ket = 'Belum Menikah';
	if($status == '3')
		$ket = 'Duda';
	if($status == '4')
		$ket = 'Janda';
	return ($ket);
}
//5. Fungsi menampilkan id_kasir dari username 		45
function id_kasir($username){
include "koneksi.php";
$hasil = mysql_query("SELECT * FROM kasir WHERE username='$username'", $id_mysql);

while($baris=mysql_fetch_array($hasil)){
return $baris[id_kasir];
}
}
//6. Fungsi menampilkan popup nama kasir
function nama_kasir_popup($username){
include "koneksi.php";
$hasil = mysql_query("SELECT * FROM kasir WHERE username='$username'", $id_mysql);

while($baris=mysql_fetch_array($hasil)){
return $baris[nama];
}
}
//7. Fungsi menampilkan nama kasir per id_kasir
function nama_kasir($id){
include "koneksi.php";
$hasil = mysql_query("SELECT * FROM kasir WHERE id_kasir='$id'", $id_mysql);

while($baris=mysql_fetch_array($hasil)){
return $baris[nama];
}
}
//8. Fungsi menampilkan harga_jual dari id_buku
function harga_jual($id_buku){
include "koneksi.php";
$hasil = mysql_query("SELECT * FROM buku WHERE id_buku='$id_buku'", $id_mysql);

while($baris=mysql_fetch_array($hasil)){
return $baris[harga_jual];
}
}
//9. Fugsi Menu User.php
function show_user(){
  include 'koneksi.php';
  $hasil = mysql_query("SELECT * FROM kasir", $id_mysql);
  return $hasil;
}
function show_user1(){
  include 'koneksi.php';
  $hasil = mysql_query("SELECT * FROM kasir WHERE akses=1 order by nama asc", $id_mysql);
  return $hasil;
}
function show_user2(){
  include 'koneksi.php';
  $hasil = mysql_query("SELECT * FROM kasir WHERE akses=2 order by nama asc", $id_mysql);
  return $hasil;
}
function show_user3(){
  include 'koneksi.php';
  $hasil = mysql_query("SELECT * FROM kasir WHERE akses=3 order by nama asc", $id_mysql);
  return $hasil;
}
function show_user4(){
  include 'koneksi.php';
  $hasil = mysql_query("SELECT * FROM kasir WHERE akses=4 order by nama asc", $id_mysql);
  return $hasil;
}
function show_user5(){
  include 'koneksi.php';
  $hasil = mysql_query("SELECT * FROM kasir WHERE akses=5 order by nama asc", $id_mysql);
  return $hasil;
}
function add_user($nama,$alamat,$telepon,$status,$username,$sandi,$akses,$fileName){
  include 'koneksi.php';
  $hasil=mysql_query("INSERT INTO kasir(nama, alamat, telepon, status ,username, password, akses, foto) VALUES('$nama', '$alamat', '$telepon', '$status' ,'$username', password('$sandi'),'$akses','$username-$fileName')", $id_mysql);

  if (!$hasil) {
    echo "Penyimpanan Data Gagal";
  }else {
      move_uploaded_file($_FILES['gambar']['tmp_name'], "../admin/img/hak_akses/".$username.'-'.$fileName);
      echo"<script>alert('Data dan Gambar Berhasil di Simpan !')</script>";
  }
  return $hasil;
}
function edit_user($id_kasir,$nama,$alamat,$telepon,$status,$username,$sandi,$akses,$fileName){
  include 'koneksi.php';
  if(empty($fileName)){
    $hasil=mysql_query("UPDATE kasir SET nama='$nama' , alamat='$alamat', telepon='$telepon' , status='$status' , username='$username', akses='$akses' WHERE id_kasir='$id_kasir'", $id_mysql);
    if (!$hasil) {
      echo "Penyimpanan Data Gagal";
    }else {
        echo"<script>alert('Data dan Gambar Berhasil di Update !')</script>";
    }
  }else if (empty($sandi)) {
    $hasil=mysql_query("UPDATE kasir SET nama='$nama' , alamat='$alamat', telepon='$telepon' , status='$status' , username='$username', akses='$akses' WHERE id_kasir='$id_kasir'", $id_mysql);
    if (!$hasil) {
      echo "Penyimpanan Data Gagal";
    }else {
        echo"<script>alert('Data dan Gambar Berhasil di Update !')</script>";
    }
  }
  if ($fileName) {
  $sql= mysql_query("SELECT * from  kasir where id_kasir=$id_kasir");
  $sql1= mysql_fetch_array($sql);
  $gambar=$sql1['foto'];
  	$tmpfile = "../admin/img/hak_akses/$gambar";
  unlink ($tmpfile);
$hasil=mysql_query("UPDATE kasir SET nama='$nama' , alamat='$alamat', telepon='$telepon' , status='$status' , username='$username', akses='$akses', foto='$username-$fileName' WHERE id_kasir='$id_kasir'", $id_mysql);

  if (!$hasil) {
    echo "Penyimpanan Data Gagal";
  }else {
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../admin/img/hak_akses/".$username.'-'.$fileName);
      echo"<script>alert('Data dan Gambar Berhasil di Update !')</script>";
  }
} else if ($sandi) {
$hasil=mysql_query("UPDATE kasir SET nama='$nama' , alamat='$alamat', telepon='$telepon' , status='$status' , username='$username', password=password('$sandi') , akses='$akses' WHERE id_kasir='$id_kasir'", $id_mysql);
  if (!$hasil) {
    echo "Penyimpanan Data Gagal";
  }else {
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../admin/img/hak_akses/".$_FILES['gambar']['name']);
      echo"<script>alert('Data dan Gambar Berhasil di Update !')</script>";
  }
}
  return $hasil;
}
function delete_user($id_kasir){
  include 'koneksi.php';
	$id_kasir=$_REQUEST['id_kasir'];
  $sql= mysql_query("SELECT * from  kasir where id_kasir=$id_kasir");
  $sql1= mysql_fetch_array($sql);
  $gambar=$sql1['foto'];
  	$tmpfile = "../admin/img/hak_akses/$gambar";
  unlink ($tmpfile);
	$hasil = mysql_query("DELETE FROM kasir WHERE id_kasir=$id_kasir", $id_mysql);
	return $hasil;
}
//10. Fungsi Menu Buku.php
function show_buku(){
  include 'koneksi.php';
  $hasil = mysql_query("SELECT * FROM buku order by judul asc", $id_mysql);
  return $hasil;
}
function add_buku($id_buku,$judul,$noisbn,$penulis,$penerbit,$tahun,$stok,$harga_pokok,$harga_jual,$ppn,$diskon,$fileName,$keterangan){
  include 'koneksi.php';
  $hasil=mysql_query("INSERT INTO buku(id_buku, judul, noisbn, penulis ,penerbit, tahun, stok, harga_pokok, harga_jual, ppn, diskon, foto, keterangan) VALUES('$id_buku','$judul','$noisbn','$penulis','$penerbit','$tahun','$stok','$harga_pokok','$harga_jual','$ppn','$diskon','$fileName','$keterangan')", $id_mysql);
  if ($hasil) {
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../admin/img/buku/".$_FILES['gambar']['name']);
      echo"<script>alert('Data dan Gambar Berhasil di Simpan !')</script>";
   }
    else {
      echo 'Proses Gagal!';
    }
  return $hasil;
}
function edit_buku($id_buku,$judul,$noisbn,$penulis,$penerbit,$tahun,$stok,$harga_pokok,$harga_jual,$ppn,$diskon,$fileName,$keterangan){
  include 'koneksi.php';
  if(empty($fileName)){
    $hasil=mysql_query("UPDATE buku SET id_buku='$id_buku' , judul='$judul', noisbn='$noisbn' , penulis='$penulis' , penerbit='$penerbit', tahun='$tahun' , stok='$stok', harga_pokok='$harga_pokok', harga_jual='$harga_jual', ppn='$ppn', diskon='$diskon', keterangan='$keterangan' WHERE id_buku='$id_buku'", $id_mysql);
    if (!$hasil) {
      echo "Penyimpanan Data Gagal";
    }else {
        echo"<script>alert('Data dan Gambar Berhasil di Update !')</script>";
    }
  }else if ($fileName) {
  $sql= mysql_query("SELECT * FROM buku where id_buku=$id_buku");
  $sql1= mysql_fetch_array($sql);
  $gambar=$sql1['foto'];
  	$tmpfile = "../admin/img/buku/$gambar";
  unlink ($tmpfile);
$hasil=mysql_query("UPDATE buku SET id_buku='$id_buku' , judul='$judul', noisbn='$noisbn' , penulis='$penulis' , penerbit='$penerbit', tahun='$tahun' , stok='$stok', harga_pokok='$harga_pokok', harga_jual='$harga_jual', ppn='$ppn', diskon='$diskon', foto='$fileName', keterangan='$keterangan' WHERE id_buku='$id_buku'", $id_mysql);

  if (!$hasil) {
    echo "Penyimpanan Data Gagal";
  }else {
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../admin/img/buku/".$_FILES['gambar']['name']);
      echo"<script>alert('Data dan Gambar Berhasil di Update !')</script>";
  }
}
  return $hasil;
}
function delete_buku($id_buku){
  include 'koneksi.php';
	$id_buku=$_REQUEST['id_buku'];
  $sql= mysql_query("SELECT * FROM buku WHERE id_buku=$id_buku");
  $sql1= mysql_fetch_array($sql);
  $gambar=$sql1['foto'];
  	$tmpfile = "../admin/img/buku/$gambar";
  unlink ($tmpfile);
	$hasil = mysql_query("DELETE FROM buku WHERE id_buku=$id_buku", $id_mysql);
	return $hasil;
}
function show_penjualan(){
  include 'koneksi.php';
  $hasil = mysql_query("SELECT * FROM penjualan,buku WHERE penjualan.id_buku=buku.id_buku", $id_mysql);
  return $hasil;
}
//11. Fungsi merubah format tanggal
function list_tanggal($nilai)
{
$tahun = substr($nilai,0,4);
$bulan = substr($nilai,5,2);
$tanggal = substr($nilai,8,2);

if($bulan == '01')
	$bul = 'Januari';
if($bulan == '02')
	$bul = 'Februari';
if($bulan == '03')
	$bul = 'Maret';
if($bulan == '04')
	$bul = 'April';
if($bulan == '05')
	$bul = 'Mei';
if($bulan == '06')
	$bul = 'Juni';
if($bulan == '07')
	$bul = 'Juli';
if($bulan == '08')
	$bul = 'Agustus';
if($bulan == '09')
	$bul = 'September';
if($bulan == '10')
	$bul = 'Oktober';
if($bulan == '11')
	$bul = 'November';
if($bulan == '12')
	$bul = 'Desember';

$tanggalnya = $tanggal." ".$bul." ".$tahun;

	return $tanggalnya;
}
//12. Fungsi menampilkan judul buku dari id_buku
function judul($id){
include "koneksi.php";
$hasil = mysql_query("SELECT * FROM buku WHERE id_buku='$id'", $id_mysql);

while($baris=mysql_fetch_array($hasil)){
return $baris[judul];
}
}
//13. Fungsi menampilkan harga_pokok buku dari id_buku
function harga_pokok($id_buku){
include "koneksi.php";
$hasil = mysql_query("SELECT * FROM buku WHERE id_buku='$id_buku'", $id_mysql);

while($baris=mysql_fetch_array($hasil)){
return $baris[harga_pokok];
}
}
//14. Fungsi menampilkan keuntungan berdasarkan tanggal
function show_keuntungan_hari(){
  include 'koneksi.php';
  $tgl=date('Y-m-d');
  $hasil = mysql_query("SELECT * FROM penjualan WHERE tanggal LIKE '$tgl%'",$id_mysql);
  return $hasil;
}
//15. Fungsi menampilkan keuntungan berdasarkan bulan
function show_keuntungan_tiap_bulan(){
  include 'koneksi.php';
  $bulan = $_POST['bulan'];
  $hasil = mysql_query("SELECT * FROM penjualan WHERE month(tanggal)='$bulan'",$id_mysql);
  return $hasil;
}
//16. Fungsi menampilkan keuntungan berdasarkan tahun
function show_keuntungan_tiap_tahun(){
  include 'koneksi.php';
  $tahun = $_POST['tahun'];
  $hasil = mysql_query("SELECT * FROM penjualan WHERE year(tanggal)='$tahun'",$id_mysql);
  return $hasil;
}
//16. Fungsi menampilkan penjualan tiap kasir per hari
function show_kasir_hari(){
  include 'koneksi.php';
  $kasir = $_POST['kasir'];
  $tgl=date('Y-m-d');
  $hasil = mysql_query("SELECT * FROM penjualan WHERE tanggal LIKE '$tgl%' and id_kasir='$kasir'",$id_mysql);
  return $hasil;
}
function show_kasir_bulan(){
  include 'koneksi.php';
  $kasir = $_POST['kasir'];
  $tgl=date('Y-m');
  $hasil = mysql_query("SELECT * FROM penjualan WHERE tanggal LIKE '$tgl%' and id_kasir='$kasir'",$id_mysql);
  return $hasil;
}
function daftar($nama,$alamat,$telepon,$status,$username,$sandi,$akses){
  include 'koneksi.php';
  $hasil=mysql_query("INSERT INTO kasir(nama, alamat, telepon, status ,username, password, akses) VALUES('$nama', '$alamat', '$telepon', '$status' ,'$username', password('$sandi'),'$akses')", $id_mysql);

  if (!$hasil) {
    echo "Penyimpanan Data Gagal";
  }else {
    echo "Penyimpanan Berhasil";
  }
  return $hasil;
}

//Fungsi Pagination Halaman Member
function paginate_one($reload, $page, $tpages) {

	$firstlabel = "&laquo;&nbsp;";
	$prevlabel  = "&lsaquo;&nbsp;";
	$nextlabel  = "&nbsp;&rsaquo;";
	$lastlabel  = "&nbsp;&raquo;";

	$out = "<ul class=\"pagination\">";

	// first
	if($page>1) {
		$out.= "<li><a href=\"" . $reload . "\">" . $firstlabel . "</a></li>";
	}
	else {
		$out.= "<li><span>" . $firstlabel . "</span></li>";
	}

	// previous
	if($page==1) {
		$out.= "<li><span>" . $prevlabel . "</span></li>";
	}
	elseif($page==2) {
		$out.= "<li><a href=\"" . $reload . "\">" . $prevlabel . "</a></li>";
	}
	else {
		$out.= "<li><a href=\"" . $reload . "&amp;page=" . ($page-1) . "\">" . $prevlabel . "</a></li>";
	}

	// current
	$out.= "<li><span class=\"current\">Page " . $page . " of " . $tpages ."</span></li>";

	// next
	if($page<$tpages) {
		$out.= "<li><a href=\"" . $reload . "&amp;page=" .($page+1) . "\">" . $nextlabel . "</a></li>";
	}
	else {
		$out.= "<li><span>" . $nextlabel . "</span></li>";
	}

	// last
	if($page<$tpages) {
		$out.= "<li><a href=\"" . $reload . "&amp;page=" . $tpages . "\">" . $lastlabel . "</a></li>";
	}
	else {
		$out.= "<li><span>" . $lastlabel . "</span></li>";
	}

	$out.= "</ul>";

	return $out;
}
function delete_pemesanan($kode_pemesanan){
  include 'koneksi.php';
	$kode_pemesanan=$_REQUEST['kode_pemesanan'];
	$hasil1 = mysql_query("DELETE FROM pemesanan WHERE kode_pemesanan='$kode_pemesanan'", $id_mysql);
  $hasil2 = mysql_query("DELETE FROM detail_pemesanan WHERE kode_pemesanan='$kode_pemesanan'", $id_mysql);
  $hasil3 = mysql_query("DELETE FROM pengiriman WHERE kode_pemesanan='$kode_pemesanan'", $id_mysql);
  $hasil =$hasil1.$hasil2.$hasil3;
	return $hasil;
}
?>
