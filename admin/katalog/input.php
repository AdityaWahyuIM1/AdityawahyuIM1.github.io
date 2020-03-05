<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="wrap">
    <div class="judul">
	    <h1>ADMINISTRATOR HALAMAN KATALOG PRODUK</h1>
	    <h2>WEBSITE ONLINESHOP</h2>
	    <h3>RAINPHY SHOES</h3>
	</div>
    
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
	
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post" enctype="multipart/form-data">
	    <table cellpadding="8">
		<table>
	        <tr>
			    <td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
			    <td>Foto</td>
				<td><input type="file" name="foto" rows="7" cool="300"></td>
				</tr>
			<tr>
			    <td>Harga</td>
				<td><textarea name="harga" rows="7" col="300"></textarea></td>
			</tr>
			<tr>
			    <td>Deskripsi</td>
				<td><textarea name="deskripsi" rows="7" col="300"></textarea></td>
			</tr>
				<tr>
				<td></td>
				<td><input type="submit" value="Simpan">
				<a href="index.php"><input type="button" value="Batal"></a></td>
				<tr>
				</table>
				
	</form>
	</div>
</body>
</html>