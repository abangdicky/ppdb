<?php
$mysqli = new mysqli("localhost","root","","db_mugas");
function ai($val){
	global $mysqli;
	$safetext = $mysqli->real_escape_string(stripslashes(strip_tags(htmlspecialchars($val,ENT_QUOTES))));
	return $safetext;
}
$title = "PPDB - SMK Muhammadiyah 3 Singosari";
$title_logo = "PPDB MUGAS";
$head = "Selamat Datang di Halaman PPDB SMK Muhammadiyah 3 Singosari";
$des = "Halaman ini merupakan halaman resmi Pendaftaran Peserta Didik SMK Muhammadiyah 3 Singosari";
?>