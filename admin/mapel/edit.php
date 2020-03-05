<html>
<head>
<title>BIODATA MATA PELAJARAN</title>
</head>
<body>
<h2>TABEL BIODATA MATA PELAJARAN</h2>
<p><a href="index.php"><button>Beranda</button></a> / <a href="tambah.php"><button>Tambah Data</button></a></p>
<h3>Edit Data Mata Pelajaran</h3>
	<?php
	include "koneksi.php";
	$kode_mapel = $_GET['kode_mapel'];
	$query_mysql = mysql_query("SELECT * FROM mapel WHERE kode_mapel='$kode_mapel'")or die(mysql_query());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
<form action="edit_proses.php" method="post">
<table cellpadding="3" cellspacing="0">
<tr>	
	<td>Nama Mapel</td>
	<td>:</td>
	<input type="hidden" name="kode_mapel" value="<?php echo $data['kode_mapel'] ?>">
	<td><input type="text" name="nama_mapel" size="30" value="<?php echo $data['nama_mapel'] ?>"></td>
</tr>
<tr>	
	<td>&nbsp;</td>
	<td></td>
	<td><input type="submit" name="tambah" value="Tambah"></td>
</tr>
</table>
</form>
<?php } ?>
</body>
</html>