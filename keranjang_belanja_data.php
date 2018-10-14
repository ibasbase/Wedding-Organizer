<style type="text/css">

.teks_tabel {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color: #FFF;
	font-weight: bold;
}
.isi_tabel {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 9px;
	font-weight: bold;
	color: #000;
}

.isi_tabel_harga {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 10px;
}
.isi_tabel_nama {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 10px;
	color: #00F;
}
.isi_tabel_total {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 10px;
}
.isi_tabel_grandtotal {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 11px;
	color: #F00;
}
.teks {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 11px;
	color: #FFF;
}
</style>

<SCRIPT language=Javascript>
//Membuat validasi hanya untuk input angka menggunakan kode javascript
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
</SCRIPT>

<form action="ubah_transaksi.php" method="post" id="form1">

<table border='0' bgcolor="#E8EED7" cellspacing='1' cellpadding='1' align ="center">
<tr>
  <td bgcolor="#666666" class="teks_tabel">Produk</td>
  <td bgcolor="#666666" class="teks_tabel">Nama</td>
  <td align="right" bgcolor="#666666"  class="teks_tabel">Harga (Rp)</td>
  <td align="center" colspan = "2" bgcolor="#666666" class="teks_tabel">Aksi</td>
  <td align="center" bgcolor="#666666" class="teks_tabel">Qty</td>
  <td align="right" bgcolor="#666666" class="teks_tabel">Total (Rp)</td>
</tr>

<?php
require("config.php");
$user = $_SESSION['userlogin'];
$query = "select * from transaksirincitbl inner join barangtbl on barangtbl.id = transaksirincitbl.id inner join transaksitbl on transaksitbl.notransaksi = transaksirincitbl.notransaksi where transaksirincitbl.username='".$user."' AND transaksitbl.status ='0'";
$hasil = mysql_query($query);
if ($hasil > 0) {
$i = 1;
while ($data = mysql_fetch_array($hasil))
{
echo "<tr>
<td align=\"center\"><img src=\"Produk/$data[gambar]\" width=\"25\" height=\"25\" border=\"0\"/></td>

<td align=\"left\" width=\"150\" class=\"isi_tabel_nama\">".$data['nama']."</td>

<td align=\"right\" class=\"isi_tabel_harga\">".number_format($data['harga'], 0, ',', '.').",-</td>

<td align=\"center\"><a href=\"hapus_transaksi.php?id=$data[id]\"><img width=\"15\" src=\"Gambar/Hapus.png\" height=\"15\" border=\"0\" alt=\"Ubah jumlah beli\"></a></td>

<td align=\"center\"><a href=\"ubah_transaksi.php?id=$data[id]\"><input name=\"ubah_transaksi\" type=\"image\" src=\"Gambar/Ubah.png\" width=\"15\" border=\"0\"\>

<td align =\"right\" \><input type='hidden' name='id".$i."' value='".$data['id']."' /><input type='text' name='jumlah".$i."' value='".$data['jumlah']."' size=\"1\" width=\"10\" maxlength=\"3\" onkeypress=\"return isNumberKey(event)\" /></td>

<td align=\"right\" class=\"isi_tabel_total\">".number_format($data['subtotal'], 0, ',', '.').",-</td></tr>";
$i++;
}
$no = $i-1;
}
?>

<?php
  $back = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
?>

</table>
<hr/>

<table width ="100%" border='0' cellspacing='1' cellpadding='1' align ="center">
<tr>
<td align="left" bgcolor="#CCCCCC" width="10%"><a href="<?=$back?>"><img src=Gambar\TBack.jpg /></a></td>
<td align="left" bgcolor="#CCCCCC" width="10%"><a href=checkout.php><img src="Gambar/TCheckout.jpg"\ title="Check Out" border="0" width=\"50\" height=\"30\"></a></td>
<td align="right" bgcolor="#666666" width="50%" class="teks">Grand Total (Rp) : </td>
<td align="right" bgcolor="#E8EED7" width="30%" class="isi_tabel_grandtotal"><?php include("keranjang_total.php");?></td>
</table>

<input type="hidden" name="n" value="<?php echo $no ?>" />

</form>
