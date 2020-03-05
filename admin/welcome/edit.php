<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="wrap">
    <div class="judul">
	    <h1>ADMINISTRATOR</h1>
	    <h2>SISTEM INFORMATIKA</h2>
	    <h3>Rekayasa Perangkat Lunak</h3>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>
	
	<br/>
	<h3>Edit data</h3>
	
	<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM home WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">
	    <table>
		    <tr>
			    <td>Judul</td>
				<td>
				    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="judul" value="<?php echo $data['judul'] ?>">
                </td>
            </tr>
            <tr>
                <td>Isi</td>
                <td><textarea name="isi" rows="7" col="300"><?php echo $data['isi']?></textarea></td>
			</tr>
			
			<tr>
			    <td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
			</table>
		</form>
		<?php } ?>
</body>
</html>