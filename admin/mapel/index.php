<html>
<head>
<title>BIODATA MATA PELAJARAN</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrap">
    <div class="judul" align="center">
<h2>TABEL BIODATA MATA PELAJARAN</h2>
<h3>Data Mata Pelajaran</h3>
<table cellpadding="5" cellspacing="0" border="1">
<tr bgcolor="#CCCCCC">
	<th>No.</th>
	<th>Kode Mapel</th>
	<th>Nama Mapel</th>
	<th>Pilihan</th>
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
	<p><a href="index.php"><button>Beranda</button></a> / <a href="tambah.php"><button>Tambah Data</button></a></p>

</tr>
<?php
			include "koneksi.php";
			$query_mysql = mysql_query("SELECT * FROM mapel")or die(mysql_error());
			$nomor = 1;
			while($data = mysql_fetch_array($query_mysql)){
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $data['kode_mapel']; ?></td>
				<td><?php echo $data['nama_mapel']; ?></td>
				<td>
					<a href="edit.php?kode_mapel=<?php echo $data['kode_mapel']; ?>">Edit</a>
					<a href="hapus.php?kode_mapel=<?php echo $data['kode_mapel']; ?>">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>	