<html>
<head>
<title>AJAX Autocomplete With PHP - phphunger.com</title>
</head>
<body>
<?php

include "../core/koneksi.php";

if (isset($_GET['search']) && $_GET['search'] != '') {
 //Add slashes to any quotes to avoid SQL problems.
 $search = $_GET['search'];
 $suggest_query = mysql_query("SELECT * FROM buku WHERE judul like '$search%'  ORDER BY id_buku",$id_mysql);
 while($suggest = mysql_fetch_array($suggest_query)) {
  echo $suggest['id_buku']."-".$suggest['judul']."; Penulis: ".$suggest['penulis']."; Harga: ".$suggest['harga_jual']."-".$suggest['stok']."<hr>";
 }
}
?>
</body>
</html>
