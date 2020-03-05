<head></head>
<body>
<h1>DAFTAR GURU</h1>

  <table border="1"class="table" width="100%">
    <tr>
	  <th>No.</th>
	  <th>Nip</th>
	  <th>Nama</th>
	  <th>Alamat</th>
	</tr>
	<?php
	include("./config/koneksi.php");
	$query_mysql=mysql_query("SELECT*FROM guru")or die(mysql_error());
	$nomor=1;
	while($data=mysql_fetch_array($query_mysql)){
	?>
	<tr>
	  <td width="10"><?php echo $nomor++;?></td>
	  <td width="130"><?php echo $data['nip'];?></td>
	  <td width="130"><?php echo $data['nama'];?></td>
	  <td width="130"><?php echo $data['alamat'];?></td>
	</tr>
	<?php } ?>
  </table>
  </body>
  </html>