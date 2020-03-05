<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="pendidikan";
	
	$konek=mysql_connect($host,$user,$pass)or die('Koneksi ke database gagal!');
	mysql_select_db($db);
	
	$con=mysqli_connect($host,$user,$pass,$db)
?>