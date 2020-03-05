<?php

include 'koneksi.php';
$id = $_POST['id'];
$pass = $_POST['pass'];
$user = $_POST['user'];
$nama = $_POST['nama'];

mysql_query("UPDATE user SET pass='$pass', user='$user', nama='$nama' WHERE id='$id'");

header("location:index.php?pesan=update");

?>