<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="wrap">
    <div class="judul">
	    <h1>ADMINISTRATOR</h1>
		<h1>WEBSITE ONLINESHOP</h2>
		<h3>RAINPHY SHOES</h3>
	</div>
	<br/>
	<div class="menu">
		<ul>
			<li><a href="http://localhost/online_shop/admin/welcome/index.php"><b><button class="button1">DATA HOME</a></b></li>
			<li><a href="http://localhost/online_shop/admin/katalog/index.php"><b><button class="button1">KATALOG PRODUK<a></b></li>
			<li><a href="http://localhost/online_shop/admin/user/index.php"><b><button class="button1">DATA USER<a></b></li>
			<li><a href="http://localhost/online_shop/admin/guesbook/index.php"><b><button class="button1">GUESTBOOK<a></b></li>
			<li><a href="http://localhost/online_shop/admin/logout.php"><b><button class="button1">LOGOUT<a></b></li>
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
	<table border="1" width="100%" class="table">
	    <tr>
		    <th>No</th>
		    <th>Nama</th>
			<th>Foto</th>
			<th>Harga</th>
			<th>Deskripsi</th>
			<th colspan="2">Opsi</th>
	    </tr>
		<?php
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM katalog")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
		    <td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><img src="<?php echo "images/".$data['foto']; ?>" width="100" height="100"></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['deskripsi']; ?></td>
			<td>
			    <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
		        <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>