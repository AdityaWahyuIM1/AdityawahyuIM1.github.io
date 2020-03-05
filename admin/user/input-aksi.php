<?php
include 'koneksi.php';
$pass = $_POST['pass'];
$user = $_POST['user'];
$nama = $_POST['nama'];

mysql_query("INSERT INTO user VALUES('','$pass','$user','$nama')");

header("location:index.php?pesan=input");
?>