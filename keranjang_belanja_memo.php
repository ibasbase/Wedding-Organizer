<?php

if (ISSET($_SESSION['userlogin']))
{
	include("config.php");
	$user = $_SESSION['userlogin'];
	$query = "select * from transaksirincitbl inner join barangtbl on barangtbl.id = transaksirincitbl.id inner join transaksitbl on transaksitbl.notransaksi = transaksirincitbl.notransaksi WHERE transaksirincitbl.username='".$user."' AND transaksitbl.status ='0'";
	$hasil = mysql_query($query);
	$seleksi = mysql_num_rows($hasil);
	if ($seleksi > 0) 
	{
	while ($data = mysql_fetch_array($hasil))
		{
			echo "<tr>
<td align=\"right\"><img src=\"Produk/$data[gambar]\" width=\"15\" height=\"15\" border=\"0\"/>
<td valign=\"middle\"><Font color=\"blue\"><b>".$data['nama']."</b></font><br> ".number_format($data['harga'], 0, ',', '.')." x ".$data['jumlah']." = ".number_format($data['subtotal'], 0, ',', '.')."</td></tr>";
		}
	}
	else
	echo "<img src=\"Gambar/Kantong Kosong.png\" width=\"100\" height=\"85\" border=\"0\"/>";
}
else
echo "<img src=\"Gambar/Kantong Kosong.png\" width=\"100\" height=\"85\" border=\"0\"/>";
?>