<?php session_start();
include("config.php");
$admin = $_POST['usertxt'];
$admin = str_replace("'","&acute;",$admin);
$psw=$_POST['pswtxt'];
$psw= str_replace("'","&acute;",$psw);
$cek = "Select * from admintbl where username='".$admin."' and password='".md5($psw)."'";
$hasil = mysql_query($cek);
$hasil_cek = mysql_num_rows($hasil);
if ($hasil_cek==0){
header("location:index.php");
}else{
$_SESSION['adminlogin'] =$admin;
header("location:home.php");
}
?>