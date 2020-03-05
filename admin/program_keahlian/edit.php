<html>
<head>
<title>BIODATA PROGRAM KEAHLIAN</title>
</head>
<body>
<h2>TABEL BIODATA PROGRAM KEAHLIAN</h2>
<p><a href="index.php"><button>Beranda</button></a> / <a href="tambah.php"><button>Tambah Data</button></a></p>
<h3>Edit Data Program Keahlian</h3>
	<?php
	include "koneksi.php";
	$kode_program = $_GET['kode_program'];
	$query_mysql = mysql_query("SELECT * FROM program_keahlian WHERE kode_program='$kode_program'")or die(mysql_query());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
<form action="edit_proses.php" method="post">
<table cellpadding="3" cellspacing="0">
<tr>	
	<td>Nama Program</td>
	<td>:</td>
	<input type="hidden" name="kode_program" value="<?php echo $data['kode_program'] ?>">
	<td><input type="text" name="nama_program" size="30" value="<?php echo $data['nama_program'] ?>"></td>
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