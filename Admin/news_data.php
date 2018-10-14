<?php
if (ISSET($_SESSION['adminlogin']))
{
}
else
header("location:index.php");
?>

<table width="600" border="1" cellpadding="0" cellspacing="0" bgcolor="#E8EED7">
  <tr>
    <th width="10%" align="left" scope="col" >Tanggal</th>
    <th width="15%" align="left" scope="col">Judul</th>
    <th width="65%" align="left" scope="col">Berita</th>
    <th width="7%" align="center" scope="col">Aksi</th>
</tr>

<?php
require("config.php");
$query = "select * from newstbl order by tanggal desc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['tanggal']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['judul']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['news']."</td>
<td align=\"center\" width=\"7%\" bgcolor=\"#FFFFFF\"><a href=\"news_ubah.php?judul=$data[judul]\"><img width=\"15\" src=\"../Gambar/Ubah.png\" height=\"15\" border=\"0\" valign=\"middle\"></a>&nbsp;&nbsp;<a href=\"news_hapus.php?judul=$data[judul]\"><img width=\"15\" src=\"../Gambar/Hapus.png\" height=\"15\" border=\"0\" valign=\"middle\"></a></td>
</tr>";

}

?>

</table>
