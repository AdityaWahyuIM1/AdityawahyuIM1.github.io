<html>
<head></head>
<body>
<h1>SISWA</h1>

    <table border="1" class="table" align="center">
	    <tr>
		    <th>No.</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Kota</th>
			<th>Orang Tua</th>
			<th>Foto</th>
		</tr>
		<?php
		include("./config/koneksi.php");
		$query_mysql = mysql_query("SELECT*FROM siswa")or die(mysql_error());
		$nomor = 1;
	    while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
	  <td width="20"><?php echo $nomor++;?></td>
	  <td width="130"><?php echo $data['nis'];?></td>
	  <td width="130"><?php echo $data['nama'];?></td>
	  <td width="50"><?php echo $data['jenis_kelamin'];?></td>
	  <td width="130"><?php echo $data['alamat'];?></td>
	  <td width="130"><?php echo $data['kota'];?></td>
	  <td width="130"><?php echo $data['ortu'];?></td>
	  <td><img src="<?php echo "admin/siswa/images/".$data['foto']; ?>" width="100" height="100"></td>
	</tr>
	<?php } ?>
  </table>
  </body>
  </html>