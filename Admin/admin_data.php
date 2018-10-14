<?php
if (ISSET($_SESSION['adminlogin']))
{
}
else
header("location:index.php");
?>

<table width="600" border="1" cellpadding="0" cellspacing="0" bgcolor="#E8EED7">
  <tr>
    <th width="20%" align="left" scope="col" >ID</th>
    <th width="600" align="left" scope="col">User Name</th>
    <th width="25%" scope="col">Aksi</th>
</tr>

<?php
require("config.php");
$query = "select * from admintbl order by id asc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"left\" width=\"20%\" bgcolor=\"#FFFFFF\">".$data['id']."</td>
<td align=\"left\" width=\"70%\" bgcolor=\"#FFFFFF\">".$data['username']."</td>
<td align=\"center\" width=\"10%\" bgcolor=\"#FFFFFF\"><a href=\"admin_ubah.php?user=$data[username]\"><img width=\"15\" src=\"../Gambar/Ubah.png\" height=\"15\" border=\"0\" valign=\"middle\"></a>&nbsp;&nbsp;<a href=\"admin_hapus.php?id=$data[id]\"><img width=\"15\" src=\"../Gambar/Hapus.png\" height=\"15\" border=\"0\" valign=\"middle\"></a></td>
</tr>";

}

?>

</table>
