<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$perintah = "UPDATE barangtbl set nama = '$_POST[namatxt]', deskripsi = '$_POST[destxt]', warna = '$_POST[wrntxt]', ukuran = '$_POST[ukrtxt]', kategori = '$_POST[ktglist]', harga = '$_POST[hrgtxt]', stock = '$_POST[stktxt]', gambar = '$_POST[gbrtxt]' where id = '$_POST[idtxt]'";
$result = mysql_query($perintah);
	if ($result) {
		header("location:produk.php");
	} else { echo "Data belum dapat di ubah!!"; 
	}
}
?>