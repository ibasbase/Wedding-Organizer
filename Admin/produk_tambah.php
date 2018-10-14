<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$nama = $_POST['namatxt'];
$des = $_POST['destxt'];
$wrn = $_POST['wrntxt'];
$ukr = $_POST['ukrtxt'];
$ktg = $_POST['ktglist'];
$hrg = $_POST['hrgtxt'];
$stk = $_POST['stktxt'];
$gbr = $_POST['gbrtxt'];
$perintah = "INSERT INTO barangtbl (nama,deskripsi,warna,ukuran,kategori,harga,stock,gambar)
VALUES ('$nama','$des','$wrn','$ukr','$ktg','$hrg','$stk','$gbr')";
$result = mysql_query($perintah);
	if ($result) {
		header("location:produk.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>