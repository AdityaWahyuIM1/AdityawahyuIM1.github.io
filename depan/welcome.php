<?php
include ("./config/koneksi.php");
?>
<?php
$query_mysql = mysql_query("SELECT * FROM home")or die(mysql_error());
While($data = mysql_fetch_array($query_mysql)){
?>
<h2><center><?php echo $data['judul'];?></center></h2>
<table width="600" height="350" border="0" align="center">
  <tr align="justify">
   <td><?php echo $data['isi'];?></td>
   <tr width="250" height="150"></tr>
 </tr>
</table>
<?php }
?>  