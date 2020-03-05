<?php

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$url = $_POST['url'];
$komentar = $_POST['komentar'];
$tanggal = $_POST['tanggal'];

mysql_query("UPDATE guesbook SET nama='$nama', email='$email', url='$url', komentar='$komentar', tanggal='$tanggal' WHERE id='$id'");

header("location:index.php?pesan=update");

?>