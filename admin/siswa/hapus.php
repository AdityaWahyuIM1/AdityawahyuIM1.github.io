<?php
include 'koneksi.php';
$nis = $_GET['nis'];
mysql_query("DELETE FROM siswa WHERE nis='$nis'")or die(mysql_error());

header("location:index.php?pesan=hapus");
?>