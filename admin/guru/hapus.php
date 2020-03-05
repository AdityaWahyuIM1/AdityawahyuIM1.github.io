<?php
include 'koneksi.php';
$nip = $_GET['nip'];
mysql_query("DELETE FROM guru WHERE nip='$nip'")or die(mysql_error());

header("location:index.php?pesan=hapus");
?>