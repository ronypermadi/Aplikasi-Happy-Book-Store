<?php
include '../core/fungsi.php';
include '../core/koneksi.php';

$menu = $_REQUEST['menu'];
//Add Data Super Admin Rony Permadi
if ($menu=="user_kelola1") {
if (isset($_POST['add_user'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $status = $_POST['status'];
  $username = $_POST['username'];
  $sandi = $_POST['sandi'];
  $akses = 1;
  $fileName = $_FILES['gambar']['name'];

  if (add_user($nama,$alamat,$telepon,$status,$username,$sandi,$akses,$fileName)) {
    echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola1'>";
  }
}else //Edit Data Super Admin Rony Permadi
if (isset($_POST['edit_user'])) {
  $id_kasir = $_POST['id_kasir'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $status = $_POST['status'];
  $username = $_POST['username'];
  $sandi = $_POST['sandi'];
  $akses = 1;
  $fileName = $_FILES['gambar']['name'];

  if (edit_user($id_kasir,$nama,$alamat,$telepon,$status,$username,$sandi,$akses,$fileName)) {
    echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola1'>";
  }
}else //Hapus Data Super Admin Rony Permadi
if (isset($_GET['id_kasir'])) {
if (delete_user($_GET['id_kasir'])){
  echo "Data Berhasil Di Hapus";
  echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola1'>";
}
else echo 'gagal menghapus data';
}
}
if ($menu=="user_kelola2") { //Add Data Petugas Gudang Rony Permadi
if (isset($_POST['add_user'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $status = $_POST['status'];
  $username = $_POST['username'];
  $sandi = $_POST['sandi'];
  $akses = 2;
  $fileName = $_FILES['gambar']['name'];

  if (add_user($nama,$alamat,$telepon,$status,$username,$sandi,$akses,$fileName)) {
    echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola2'>";
  }
}else //Edit Data Petugas Gudang Rony Permadi
if (isset($_POST['edit_user'])) {
  $id_kasir = $_POST['id_kasir'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $status = $_POST['status'];
  $username = $_POST['username'];
  $sandi = $_POST['sandi'];
  $akses = 2;
  $fileName = $_FILES['gambar']['name'];

  if (edit_user($id_kasir,$nama,$alamat,$telepon,$status,$username,$sandi,$akses,$fileName)) {
    echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola2'>";
  }
}else //Hapus Data Petugas Gudang Rony Permadi
if (isset($_GET['id_kasir'])) {
if (delete_user($_GET['id_kasir'])){
  echo "Data Berhasil Di Hapus";
  echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola2'>";
}
else echo 'gagal menghapus data';
}
}
if ($menu=="user_kelola3") { //Add Data Kasir Rony Permadi
if (isset($_POST['add_user'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $status = $_POST['status'];
  $username = $_POST['username'];
  $sandi = $_POST['sandi'];
  $akses = 3;
  $fileName = $_FILES['gambar']['name'];

  if (add_user($nama,$alamat,$telepon,$status,$username,$sandi,$akses,$fileName)) {
    echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola3'>";
  }
}else //Edit Data Kasir Rony Permadi
if (isset($_POST['edit_user'])) {
  $id_kasir = $_POST['id_kasir'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $status = $_POST['status'];
  $username = $_POST['username'];
  $sandi = $_POST['sandi'];
  $akses = 3;
  $fileName = $_FILES['gambar']['name'];

  if (edit_user($id_kasir,$nama,$alamat,$telepon,$status,$username,$sandi,$akses,$fileName)) {
    echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola3'>";
  }
}else //Hapus Data Kasir Rony Permadi
if (isset($_GET['id_kasir'])) {
if (delete_user($_GET['id_kasir'])){
  echo "Data Berhasil Di Hapus";
  echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola3'>";
}
else echo 'gagal menghapus data';
}
}
if ($menu=="user_kelola4") { //Add Data Pemilik Rony Permadi
if (isset($_POST['add_user'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $status = $_POST['status'];
  $username = $_POST['username'];
  $sandi = $_POST['sandi'];
  $akses = 4;
  $fileName = $_FILES['gambar']['name'];

  if (add_user($nama,$alamat,$telepon,$status,$username,$sandi,$akses,$fileName)) {
    echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola4'>";
  }
}else //Edit Data Pemilik Rony Permadi
if (isset($_POST['edit_user'])) {
  $id_kasir = $_POST['id_kasir'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $status = $_POST['status'];
  $username = $_POST['username'];
  $sandi = $_POST['sandi'];
  $akses = 4;
  $fileName = $_FILES['gambar']['name'];

  if (edit_user($id_kasir,$nama,$alamat,$telepon,$status,$username,$sandi,$akses,$fileName)) {
    echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola4'>";
  }
}else //Hapus Data Pemilik Rony Permadi
if (isset($_GET['id_kasir'])) {
if (delete_user($_GET['id_kasir'])){
  echo "Data Berhasil Di Hapus";
  echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola4'>";
}
else echo 'gagal menghapus data';
}
}
if ($menu=="user_kelola5") { //Add Data Member Rony Permadi
if (isset($_POST['add_user'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $status = $_POST['status'];
  $username = $_POST['username'];
  $sandi = $_POST['sandi'];
  $akses = 5;
  $fileName = $_FILES['gambar']['name'];

  if (add_user($nama,$alamat,$telepon,$status,$username,$sandi,$akses,$fileName)) {
    echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola5'>";
  }
}else //Edit Data Member Rony Permadi
if (isset($_POST['edit_user'])) {
  $id_kasir = $_POST['id_kasir'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $status = $_POST['status'];
  $username = $_POST['username'];
  $sandi = $_POST['sandi'];
  $akses = 5;
  $fileName = $_FILES['gambar']['name'];

  if (edit_user($id_kasir,$nama,$alamat,$telepon,$status,$username,$sandi,$akses,$fileName)) {
    echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola5'>";
  }
}else //Hapus Data Member Rony Permadi
if (isset($_GET['id_kasir'])) {
if (delete_user($_GET['id_kasir'])){
  echo "Data Berhasil Di Hapus";
  echo "<meta http-equiv='refresh' content='0;url=menu_user.php?menu=user_kelola5'>";
}
else echo 'gagal menghapus data';
}
}


if (isset($_POST['add_buku'])) { //Add Data Buku Rony Permadi
  $id_buku = $_POST['id_buku'];
  $judul = $_POST['judul'];
  $noisbn = $_POST['noisbn'];
  $penulis = $_POST['penulis'];
  $penerbit = $_POST['penerbit'];
  $tahun = $_POST['tahun'];
  $stok = $_POST['stok'];
  $harga_pokok =$_POST['harga_pokok'];
  $harga_jual =$_POST['harga_jual'];
  $ppn =$_POST['ppn'];
  $diskon =$_POST['diskon'];
  $fileName = $_FILES['gambar']['name'];
  $keterangan = $_POST['keterangan'];
  if (add_buku($id_buku,$judul,$noisbn,$penulis,$penerbit,$tahun,$stok,$harga_pokok,$harga_jual,$ppn,$diskon,$fileName,$keterangan)) {
    echo "<meta http-equiv='refresh' content='0;url=index.php?menu=buku_kelola'>";
  }
}else //Edit Data Buku Rony Permadi
if (isset($_POST['edit_buku'])) {
  $id_buku = $_POST['id_buku'];
  $judul = $_POST['judul'];
  $noisbn = $_POST['noisbn'];
  $penulis = $_POST['penulis'];
  $penerbit = $_POST['penerbit'];
  $tahun = $_POST['tahun'];
  $stok = $_POST['stok'];
  $harga_pokok =$_POST['harga_pokok'];
  $harga_jual =$_POST['harga_jual'];
  $ppn =$_POST['ppn'];
  $diskon =$_POST['diskon'];
  $fileName = $_FILES['gambar']['name'];
  $keterangan = $_POST['keterangan'];

  if (edit_buku($id_buku,$judul,$noisbn,$penulis,$penerbit,$tahun,$stok,$harga_pokok,$harga_jual,$ppn,$diskon,$fileName,$keterangan)) {
    echo "<meta http-equiv='refresh' content='0;url=index.php?menu=buku_kelola'>";
  }
}else //Hapus Data Buku Rony Permadi
if (isset($_GET['id_buku'])) {
if (delete_buku($_GET['id_buku'])){
  echo "Data Berhasil Di Hapus";
  echo "<meta http-equiv='refresh' content='0;url=index.php?menu=buku_kelola'>";
}
else echo 'gagal menghapus data';
}

  if (isset($_GET['kode_pemesanan'])) {
  if (delete_pemesanan($_GET['kode_pemesanan'])){
    echo "Data Berhasil Di Hapus";
    echo "<meta http-equiv='refresh' content='0;url=index.php?menu=data_pemesanan'>";
  }
  else echo 'gagal menghapus data';
  }


  if (isset($_POST['edit_pembayaran'])) {
    $kode_pemesanan = $_POST['kode_pemesanan'];
    $status = $_POST['status'];
    $update = mysql_query("UPDATE pembayaran SET status='$status' WHERE kode_pemesanan ='$kode_pemesanan'");

    if (! $update){
      echo mysql_error();
      echo "<script>alert('Penyimpanan Data gagal dilaksanakan. ')</script>";
      echo "<script language=javascript>window.history.go(-1);</script>";
    }
    else{
      echo "<script>alert('Penyimpanan Data berhasil dilaksanakan. ')</script>";
    }
    echo "<script language=javascript>window.history.go(-1);</script>";

  }
?>
