<?php
include('./config/koneksi.php');
$query_mysql = mysql_query("SELECT * FROM guesbook ORDER BY id DESC")or die(mysql_error());
while($data=mysql_fetch_array($query_mysql)){
$komentar=$data["komentar"];
?><table>
<tr><td>Nama</td><td>:</td><td><?php echo $data['nama'];?></td></tr>
<tr><td>Email</td><td>:</td><td><a href=mailto: <?php echo $data['email'];?>><?php echo $data['email'];?></td></tr>
<tr><td>Tanggal Kirim</td><td>:</td><td><?php echo $data['tanggal'];?></td></tr>
<tr><td>URL</td><td>:</td><td><a href="<?php echo $data['url'];?>"><?php echo $data['url'];?> </a>
</td>
</tr>
</table><hr>
<?php }?>