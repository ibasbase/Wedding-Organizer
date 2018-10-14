<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$username = $_POST['usertxt'];
$pswlama = $_POST['pswlamatxt'];
$psw_tag = $_POST['pswbarutxt'];
$password = nl2br($psw_tag);
$password= str_replace("'","&acute;",$password);
	
$cari="select * from admintbl WHERE username ='".$username."'";
$hasil=mysql_query($cari);
$data=mysql_fetch_array($hasil);
if($data > 0){
$pswcek = $data['password'];
}
if ($pswcek <> md5($pswlama)) {
	echo "<li>Password lama salah, input dengan benar password lama Anda!</li>";
}else{
$perintah = "UPDATE admintbl set password = '".md5($password)."' where username = '".$username."'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:admin.php");
	} else { echo "Data belum dapat di ubah!!"; 
	}
}
}
?>