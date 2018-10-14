<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$kategori = $_POST['ktgtxt'];
$perintah = "INSERT INTO kategoritbl (kategori)
VALUES ('$kategori')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:kategori.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>