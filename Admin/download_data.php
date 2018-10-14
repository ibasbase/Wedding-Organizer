<?php
if (ISSET($_SESSION['adminlogin']))
{
}
else
header("location:index.php");
?>

<table width="600" border="1" cellpadding="0" cellspacing="0" bgcolor="#E8EED7">
  <tr>
    <th width="10%" align="left" scope="col" >ID</th>
    <th width="15%" align="left" scope="col">Judul</th>
    <th width="45%" align="left" scope="col">Deskripsi</th>
    <th width="20%" align="left" scope="col">Url</th>
    <th width="7%" align="center" scope="col">Aksi</th>
</tr>

<?php
require("config.php");
$query = "select * from downloadtbl order by id desc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['id']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['judul']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['deskripsi']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['url']."</td>
<td align=\"center\" width=\"7%\" bgcolor=\"#FFFFFF\"><a href=\"download_ubah.php?id=$data[id]\"><img width=\"15\" src=\"../Gambar/Ubah.png\" height=\"15\" border=\"0\" valign=\"middle\"></a>&nbsp;&nbsp;<a href=\"download_hapus.php?id=$data[id]\"><img width=\"15\" src=\"../Gambar/Hapus.png\" height=\"15\" border=\"0\" valign=\"middle\"></a></td>
</tr>";

}

?>

</table>
