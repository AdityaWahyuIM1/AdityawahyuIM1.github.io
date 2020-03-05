<?php
include 'koneksi.php';
$kode_mapel = $_GET['kode_mapel'];
mysql_query("DELETE FROM mapel WHERE kode_mapel='$kode_mapel'")or die(mysql_error());

header("location:index.php?pesan=hapus");
?>