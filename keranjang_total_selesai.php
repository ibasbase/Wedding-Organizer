<?php 
if (ISSET($_SESSION['userlogin']))
{
include "faktur_selesai.php";
include("config.php");
$user = $_SESSION['userlogin'];
$query = "select sum(subtotal) as total from transaksirincitbl inner join barangtbl on barangtbl.id = transaksirincitbl.id inner join transaksitbl on transaksitbl.notransaksi = transaksirincitbl.notransaksi WHERE transaksirincitbl.username='".$user."' AND transaksitbl.status ='1' and transaksirincitbl.notransaksi ='".$faktur."' order by transaksitbl.notransaksi desc";
	$hasil = mysql_query($query);
	$data = mysql_fetch_assoc($hasil);
	if ($hasil > 0) 
	{
		echo "".number_format($data['total'], 0, ',','.').",-";
	}
}else{
header("location:index.php");
}
?>