<?php
$pemakai = "root";
$password = "";

$id_mysql = mysql_connect("localhost",$pemakai,$password);

if (! $id_mysql)
	die("Data Base MySQL tak dapat dibuka");

if (! mysql_select_db("ukk2017_ronypermadi", $id_mysql))
	die("Data Base tidak bisa di pilih");

?>
