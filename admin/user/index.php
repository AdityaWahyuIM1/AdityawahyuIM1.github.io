<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wrap">
    <div class="judul">
	    <h1><center>ADMINISTRATOR</h1>
		<h2><center>SISTEM INFORMATIAK</h2>
		<h3><center>Rekayasa Perangkat Lunak</h3>
	</div>
	<br/>
	<div class="menu">
	<ul>
		<li><a href ="http://localhost/pendidikan/admin/welcome/index.php"><b><button class="button1">HOME</a></b></li>
	<li><a href ="http://localhost/pendidikan/admin/program_keahlian/index.php"><b><button class="button1">PROG KEAHLIAN</a></b></li>
	<li><a href ="http://localhost/pendidikan/admin/mapel/index.php"><b><button class="button1">MAPEL</a></b></li>
	<li><a href="http://localhost/pendidikan/admin/guru/index.php"><b><button class="button1">DAFTAR GURU<a></b></li>
	<li><a href="http://localhost/pendidikan/admin/siswa/index.php"><b><button class="button1">DAFTAR SISWA<a></b></li>
	<li><a href="http://localhost/pendidikan/admin/nilai_akhir/index.php"><b><button class="button1">NILAI AKHIR<a></b></li>
	<li><a href="http://localhost/pendidikan/admin/guesbook/index.php?pesan=hapus"><b><button class="button1">DAFTAR TAMU<a></b></li>
	<li><a href ="http://localhost/pendidikan/index.php?dir=depan&link=program_keahlian"><b><button class="button1">LOGOUT</a></b></li>
	</ul>
	 </div>
	<?php
	if(isset($_GET['pesan'])){
	    $pesan = $_GET['pesan'];
		if($pesan == "input"){
		    echo "Data berhasil di input.";
		}else if($pesan == "update"){
		    echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
		    echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
	
	<h3>Data user</h3>
	<table border="1" class="table" width="100%">
	    <tr>
		    <th>No</th>
			<th>Password</th>
			<th>Username</th>
			<th>Nama</th>
			<th>Opsi</th>
	    </tr>
		<?php
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
		    <td><?php echo $nomor++; ?></td>
			<td><?php echo $data['pass']; ?></td>
			<td><?php echo $data['user']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			
			
			<td>
			    <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
		        <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>