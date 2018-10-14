<?php

if (ISSET($_SESSION['userlogin']))
{
	include("config.php");
	$user = $_SESSION['userlogin'];
	$query = "select sum(jumlah) as jumlahitem from transaksirincitbl inner join barangtbl on barangtbl.id = transaksirincitbl.id inner join transaksitbl on transaksitbl.notransaksi = transaksirincitbl.notransaksi WHERE transaksirincitbl.username='".$user."' AND transaksitbl.status ='0'";
	$hasil = mysql_query($query);
	$data = mysql_fetch_assoc($hasil);
	if ($hasil > 0) 
	{
		echo "(<a href=\"keranjang_belanja.php\"><Font color=\"blue\">".number_format($data['jumlahitem'], 0, ',','.')."</font></a>)";
	}
}
else
	echo "<Font color=\"blue\">(0)</font>";
?>