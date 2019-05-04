//awal skrip baru
$namafolder="../foto/"; //folder tempat menyimpan file
if (!empty($_FILES["Filegambar"]["tmp_name"]))
{
		$jenis_gambar=$_FILES['Filegambar']['type'];
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
		{
			$gambar = $namafolder . basename($_FILES['Filegambar']['name']);
			if (move_uploaded_file($_FILES['Filegambar']['tmp_name'], $gambar)) {
				echo "Gambar berhasil dikirim ".$gambar;
			} else {
				echo "Gambar gagal dikirim";
			}
	} else {
			echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
	}
} else {
	echo "Anda belum memilih gambar";
}
$jeneng=$_FILES['Filegambar']['name'];
//echo "<br>lokasi=$jeneng<br>";
$tempat="../foto/";
rename($tempat.$jeneng,$tempat.$nis.'.jpg');
