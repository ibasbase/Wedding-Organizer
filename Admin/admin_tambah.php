<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$username = $_POST['usertxt'];
$psw_tag = $_POST['pswtxt'];
$password = nl2br($psw_tag);
$password= str_replace("'","&acute;",$password);
$perintah = "INSERT INTO admintbl (username,password)
VALUES ('$username','" .md5($password). "')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:admin.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>