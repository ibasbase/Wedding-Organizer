<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$perintah = "UPDATE downloadtbl set judul = '$_POST[judultxt]', deskripsi = '$_POST[deskripsitxt]', url = '$_POST[urltxt]' where id = '$_POST[idtxt]'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:download.php");
	} else { echo "Data belum dapat di ubah!!"; 
	}
}
?>