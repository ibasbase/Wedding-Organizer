<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$tanggal=date("Ymd");
$jud = $_POST['judultxt'];
$news = $_POST['beritatxt'];
$perintah = "INSERT INTO newstbl (tanggal,judul,news)
VALUES ('$tanggal','$jud','$news')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:news.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>