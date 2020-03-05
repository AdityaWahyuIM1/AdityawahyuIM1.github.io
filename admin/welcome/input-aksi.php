<?php
include 'koneksi.php';
$judul = $_POST['judul'];
$isi = $_POST['isi'];

mysql_query("INSERT INTO home VALUES('','$judul','$isi')");

header("location:index.php?pesan=input");
?>