<?php
include 'koneksi.php';
$nis = $_GET['nis'];
mysql_query("DELETE FROM nilai_akhir WHERE nis='$nis'")or die(mysql_error());

header("location:index.php?pesan=hapus");
?>