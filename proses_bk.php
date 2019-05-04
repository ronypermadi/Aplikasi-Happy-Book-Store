<?php
session_start();
include 'core/koneksi.php';
include 'core/fungsi.php';

$menu=$_GET['menu'];

if (isset($_POST['registrasi'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $status = $_POST['status'];
  $username = $_POST['username'];
  $sandi = $_POST['sandi'];
  $akses = 5;

  if (daftar($nama,$alamat,$telepon,$status,$username,$sandi,$akses)) {
    echo "<script>alert('Selamat Akun Anda Berhasil Dibuat')</script>";
    echo "<meta http-equiv='refresh' content='0;url=login_page/'>";
  }
}
//bagian keranjang
//untuk menu keranjang belanja

if ($menu=="keranjang"){
  foreach ($_POST['jml'] as $id_produk => $jml) {
    $ambil_stok = mysql_query("SELECT * FROM buku WHERE id_buku='$id_produk'");
    $tampil_stok = mysql_fetch_array($ambil_stok);

    if($jml>$tampil_stok['stok']){
    $stok = $tampil_stok['stok'];
    echo "<script>alert('Stok tidak tersedia')</script>";
    echo "<script language=javascript>window.history.go(-1);</script>";
    exit;
    }
  }

if(isset($_REQUEST['aksi']) && isset($_REQUEST['id'])){

if($_REQUEST['aksi']=='tambah'){		//untuk menambahkan barang
if(isset($_SESSION['shop_chart'][$_REQUEST['id']])){
$_SESSION['shop_chart'][$_REQUEST['id']] += 1;
  echo "<script>alert('Barang Sudah Ditambahkan ke Keranjang Anda')</script>";
}else{
$_SESSION['shop_chart'][$_REQUEST['id']] = 1;
}

}
else if($_REQUEST['aksi']=='ubah'){		//untuk merubah barang dalam jumlah
foreach($_REQUEST['id'] as $id=>$id_produk){
$_SESSION['shop_chart'][$id_produk] = $_REQUEST['jml'][$id_produk];
if($_REQUEST['jml'][$id_produk]==0){
unset($_SESSION['shop_chart'][$id_produk]);}
}

}
else if($_REQUEST['aksi']=='hapus'){	//untuk menghapus barang dalam keranjang belanja
unset($_SESSION['shop_chart'][$_REQUEST['id']]);
}
else if($_REQUEST['aksi']=='kosongkan'){	//untuk mengosongkan keranjang belanja
unset($_SESSION['shop_chart']);
}
}

//ARAHKAN
echo "<script>window.location='index.php?menu=keranjang';</script>";
}

if ($menu=="pemesanan"){
  $id_kasir = $_SESSION['id_kasir'];
  $id_buku = $_POST['id_buku'];
  $jumlah = $_POST['jml'];
  $total = $_POST['total'];
  $kode_pemesanan = $_POST['kode_pemesanan'];
  $tgl = date('Y-m-d');
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $kota = $_POST['kota'];
  $provinsi = $_POST['provinsi'];
  $kodepos = $_POST['kodepos'];
  $nohp = $_POST['nohp'];

  $hasil = mysql_query("INSERT INTO pemesanan (kode_pemesanan,id_kasir,total,tanggal ) VALUES ('$kode_pemesanan' ,'$id_kasir' ,'$total' , '$tgl') ", $id_mysql);

  $hasil1 = mysql_query("INSERT INTO pengiriman (kode_pemesanan,id_kasir,nama,alamat,kota,provinsi,kodepos,nohp) VALUES ('$kode_pemesanan','$id_kasir','$nama' ,'$alamat' , '$kota','$provinsi','$kodepos','$nohp') ", $id_mysql);

  if(!empty($_SESSION['shop_chart'])){
    $harga = 0;
    foreach($_SESSION['shop_chart'] as $id_produk=>$jml){
      $produk		= mysql_fetch_array(mysql_query("SELECT harga_jual,stok FROM buku WHERE id_buku='$id_produk'"));
      $produk_harga 	= $produk['harga_jual'];
      $hasil2 = mysql_query("INSERT INTO detail_pemesanan (kode_pemesanan,harga_pemesanan,jumlah_pemesanan,id_buku) VALUES ('$kode_pemesanan' ,'$produk_harga' ,'$jml' , '$id_produk') ", $id_mysql);
    }
  }

  $result= $hasil.$hasil1.$hasil2;
  if(!$result)
  	echo "Penyimpanan penjualan gagal";
  else
  unset ($_SESSION['keranjang']);
  	echo "<script>alert('Konfirmasi Pemesanan Berhasil')</script>";

  print("<html><head><meta http-equiv='refresh' content='0;url=profil.php?menu=status_pesananku'></head><body></body></html>");
}
if ($menu=="konfirmasi") {
  if($_GET['act']=="tambah"){
		//sql input database
		$kode_pemesanan = $_POST['kode_pemesanan'];
    $nominal = $_POST['nominal'];
    $tgl_kirim = $_POST['tgl_kirim'];
    $fileName = $_FILES['gambar']['name'];
    $bank = "BRI";
    $no_rek = 359201026431532;
	$input = mysql_query("INSERT INTO pembayaran (nominal,tgl_kirim,bukti_transfer,kode_pemesanan,id_kasir,bank,no_rek,status)VALUES ('$nominal','$tgl_kirim','$fileName','$kode_pemesanan','$_SESSION[id_kasir]','$bank','$no_rek','Belum Lunas')");
		if (! $input){
			echo mysql_error();
			echo "<script>alert('Penyimpanan Data gagal dilaksanakan. ')</script>";
			echo "<script language=javascript>window.history.go(-1);</script>";
		}
		else{
      move_uploaded_file($_FILES['gambar']['tmp_name'], "admin/img/bukti_transfer/".$_FILES['gambar']['name']);
			echo "<script>alert('Proses Pembayaran Berhasil Dilakukan.')</script>";
      echo "<script>alert('Pembayaran Anda Sedang Diverifikasi')</script>";
		}
		echo "<meta http-equiv='refresh'content='0;url=profil.php?menu=status_pesananku'>";
	}
}
?>
