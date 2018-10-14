<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$jud = $_POST['judultxt'];
$desk = $_POST['deskripsitxt'];
$url = $_POST['urltxt'];
$perintah = "INSERT INTO downloadtbl (judul,deskripsi,url)
VALUES ('$jud','$desk','$url')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:download.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>