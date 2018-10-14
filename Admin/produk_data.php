<?php
if (ISSET($_SESSION['adminlogin']))
{
}
else
header("location:index.php");
?>

<table width="600" border="1" cellpadding="0" cellspacing="0" bgcolor="#E8EED7">
  <tr>
    <th width="5%" align="left" scope="col" >ID</th>
    <th width="15%" align="left" scope="col">Nama</th>
    <th width="15%" align="left" scope="col">Deskripsi</th>
    <th width="5%" align="left" scope="col">Warna</th>
    <th width="5%" align="left" scope="col">Ukuran</th>
    <th width="0%" align="left" scope="col" hidden="true">Kategori</th>
    <th width="7%" align="right" scope="col">Harga</th>
    <th width="5%" align="right" scope="col">Stock</th>
    <th width="7%" align="left" scope="col" hidden="true">Gambar</th>
    <th width="7%" align="center" scope="col">Aksi</th>
</tr>

<?php
require("config.php");
$query = "select * from barangtbl order by id desc";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['id']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['nama']."</td>
<td align=\"left\" width=\"10%\" bgcolor=\"#FFFFFF\">".$data['deskripsi']."</td>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['warna']."</td>
<td align=\"left\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['ukuran']."</td>
<td align=\"left\" width=\"0%\" bgcolor=\"#FFFFFF\" hidden=\"true\">".$data['kategori']."</td>
<td align=\"right\" width=\"7%\" bgcolor=\"#FFFFFF\">".number_format($data['harga'], 0, ',','.')."</td>
<td align=\"right\" width=\"5%\" bgcolor=\"#FFFFFF\">".$data['stock']."</td>
<td align=\"left\" width=\"0%\" bgcolor=\"#FFFFFF\" hidden=\"true\">".$data['gambar']."</td>
<td align=\"center\" width=\"7%\" bgcolor=\"#FFFFFF\"><a href=\"produk_ubah.php?id=$data[id]\"><img width=\"15\" src=\"../Gambar/Ubah.png\" height=\"15\" border=\"0\" valign=\"middle\"></a>&nbsp;&nbsp;<a href=\"produk_hapus.php?id=$data[id]\"><img width=\"15\" src=\"../Gambar/Hapus.png\" height=\"15\" border=\"0\" valign=\"middle\"></a></td>
</tr>";

}

?>

</table>
