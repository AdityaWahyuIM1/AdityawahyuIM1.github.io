<?php
include 'koneksi.php';
$kode_program = $_GET['kode_program'];
mysql_query("DELETE FROM program_keahlian WHERE kode_program='$kode_program'")or die(mysql_error());

header("location:index.php?pesan=hapus");
?>