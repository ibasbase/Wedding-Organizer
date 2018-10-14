<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$perintah = "UPDATE kategoritbl set kategori = '$_POST[ktgtxt]' where id = '$_POST[idtxt]'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:kategori.php");
	} else { echo "Data belum dapat di ubah!!"; 
	}
}
?>