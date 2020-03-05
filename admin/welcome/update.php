<?php

include 'koneksi.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

mysql_query("UPDATE home SET judul='$judul', isi='$isi'  WHERE id='$id'");

header("location:index.php?pesan=update");

?>