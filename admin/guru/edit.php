<html>
<head>
<title>BIODATA GURU</title>
</head>
<body>
<h2>TABEL BIODATA GURU</h2>
<p><a href="index.php"><button>Beranda</button></a> / <a href="tambah.php"><button>Tambah Data</button></a></p>
<h3>Edit Data Guru</h3>
	<?php
	include "koneksi.php";
	$nip = $_GET['nip'];
	$query_mysql = mysql_query("SELECT * FROM guru WHERE nip='$nip'")or die(mysql_query());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
<form action="edit_proses.php" method="post">
<table cellpadding="3" cellspacing="0">
<tr>	
	<td>Nama</td>
	<td>:</td>
	<input type="hidden" name="nip" value="<?php echo $data['nip'] ?>">
	<td><input type="text" name="nama" size="30" value="<?php echo $data['nama'] ?>"></td>
</tr>
<tr>	
	<td>Alamat</td>
	<td>:</td>
	<td><input type="text" name="alamat" size="30" value="<?php echo $data['alamat'] ?>"></td>
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