<?php session_start();
if (ISSET($_SESSION['userlogin']))
{
}
else
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Amira Rafi Wedding Organizer</title>

<style type="text/css">

.Teks_Menu_Atas {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Area_Menu_Kiri {
	height: auto;
	width: 175px;
	margin-left: 6px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Area_Menu_Kanan {
	height: auto;
	width: 175px;
	margin-left: 10px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	text-align: left;
}
.Teks_Login {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 11px;
}

.Teks_Selamat {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 16px;
	text-align: center;
}

.Teks_Menu {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}

.Teks_Kategori {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}

.Teks_News {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
}

.Teks_Testimonial {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
}

.Teks_Informasi {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 11px;
}

.Teks_Bank {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}

.Teks_Produk {
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 10px;
	color: white;
}

.Area_Produk {
	height: auto;
	width: 375px;
	margin-top: 10px;
	font-size: 10px;
	font-family: Arial, Helvetica, sans-serif;
}

.Area_Slider {
	width: 375px;
	margin-top: 10px;
}
.Area_Menu_Keranjang {
	height: auto;
	width: 175px;
	margin-left: 10px;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Area_Menu_Keranjang_Total {
	height: auto;
	width: 175px;
	margin-left: 10px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
a:link {
	color: #006699;
	text-decoration: none;
}
a:hover {
	color: #5F9C9F;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #006699;
}
a:active {
	text-decoration: none;
	color: #5F9C9F;
}

body {
	background-color:#666  ;
}
li {
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	text-shadow:#0F0;
	color:#000;
	
}
td {
	font-family:Tahoma, Geneva, sans-serif;
}
</style>

<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('Gambar/TLogin copy.jpg','Gambar/TSearch Rollover.jpg')">
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
<tr></tr>
<tr>
  <th width="200" height="22" align="left" valign="top" bgcolor="#F7FAE4" scope="col"><div class="Area_Menu_Kiri">
    <form id="form2" name="form2" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th align="left" valign="middle" class="Teks_Login" scope="col">Search</th>
          <th align="left" valign="middle" scope="col"><label for="caritxt"></label>
            <input name="caritxt" type="text" id="caritxt" size="15" /></th>
          <th align="left" valign="middle" scope="col"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','Gambar/TSearch Rollover.jpg',1)"><img src="Gambar/TSearch.jpg" width="50" height="20" id="Image11" /></a></th>
          </tr>
        </table>
      </form>
    </div></th>
  <th colspan="2" align="right" valign="middle" bgcolor="#F8FBE6" class="Teks_Menu_Atas" scope="col"> <table width="95%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <th align="right" valign="middle" scope="col">&nbsp;</th>
      </tr>
    </table>
    </th>
</tr>
<tr>
  <td colspan="3"><img src="foto/header1.jpg" width="1065" height="439" /></td>
</tr>
<tr>
  <td colspan="3"><img src="Gambar/MENU.jpg" width="1065" height="25" usemap="#Map" border="0" />
    <map name="Map" id="Map2">
      <area shape="rect" coords="954,5,1060,22" href="pcontact.php" target="_self" />
      <area shape="rect" coords="638,4,929,23" href="pbusana.php" target="_self" />
      <area shape="rect" coords="385,4,603,23" href="ppg.php" target="_self" />
      <area shape="rect" coords="119,3,324,23" href="ppr.php" target="_self" />
      <area shape="rect" coords="14,5,73,22" href="home.php" target="_self" />
    </map></td>
</tr>
<tr>
  <td align="left" valign="top" bgcolor="#E8EED7"><div class="Area_Menu_Kiri">
    <form id="form1" name="form1" method="post" action="login.php">
      <table width="100%" border="0" cellspacing="2" cellpadding="0">
        <tr>
          <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <th align="left" valign="top" scope="col"><img src="Gambar/kategori1.jpg" alt="" width="175" height="25" /></th>
            </tr>
            <tr>
              <th align="left" valign="top" class="Teks_Kategori" scope="col"><dl>
                <dt>&nbsp;</dt>
              </dl></th>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <th align="left" valign="top" scope="col"><img src="Gambar/news.jpg" alt="" width="175" height="25" /></th>
            </tr>
            <tr>
              <td align="left" valign="top" class="Teks_News" scope="col"><?php include "news.php"; ?></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td width="29%" align="left" valign="top">&nbsp;</td>
          <td width="3%" align="left" valign="top">&nbsp;</td>
          <td width="68%" align="left" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <th align="left" valign="top" scope="col"><img src="Gambar/testimonial.jpg" alt="" width="175" height="25" /></th>
            </tr>
            <tr>
              <td align="left" valign="top" class="Teks_Testimonial" scope="col"><?php include "top_testimonial.php"; ?>
                <br />
                <br />
                <div><a href="isitestimonial.php">>> isi testimonial</a><br />
                  <a href="lihattestimonial.php" target="_self">>> lihat testimonial </a></div>
                <br /></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td>&nbsp;</td>
          <td class="Teks_Menu">&nbsp;</td>
        </tr>
      </table>
    </form>
  </div></td>
  <th width="400" align="center" valign="top" bgcolor="#FFFFFF"><table width="396" border="0" cellpadding="0" cellspacing="0" class="Area_Produk">
    <tr>
      <th align="left" valign="top" bgcolor="#FFFFFF" class="Teks_Produk" scope="col"><font color="#0096C3" size="2px">PENYEWAAN PERNIKAHAN GEDUNG !!!</font></th>
      <th align="left" valign="top" bgcolor="#FFFFFF" class="Teks_Produk" scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th align="left" valign="top" bgcolor="#FFFFFF" class="Teks_Produk" scope="col">&nbsp;</th>
      <th align="left" valign="top" bgcolor="#FFFFFF" class="Teks_Produk" scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th align="left" valign="top" bgcolor="#FFFFFF" class="Teks_Produk" scope="col"><font color="black">Paket Rias Pengantin + Catring 600 Porsi + Sewa Gedung</font></th>
      <th align="left" valign="top" bgcolor="#FFFFFF" class="Teks_Produk" scope="col"><font color="black">Paket Rias Pengantin + Catring 800 Porsi + Sewa Gedung</font></th>
    </tr>
    <tr>
      <th width="191" align="left" valign="top" bgcolor="#FFFFFF" class="Teks_Produk" scope="col"><font color="black">Harga Rp 58 juta !!!</font></th>
      <th width="184" align="left" valign="top" bgcolor="#FFFFFF" class="Teks_Produk" scope="col"><font color="black">Harga Rp 58 juta !!!</font></th>
    </tr>
    <tr></tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><strong><b><font face="Lucida Sans Unicode, Lucida Grande, sans-serif">Menu :</font></b></strong></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><strong><b><font face="Lucida Sans Unicode, Lucida Grande, sans-serif">Menu :</font></b></strong></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b><font face="Lucida Sans Unicode, Lucida Grande, sans-serif">PAKET CATERING TYPE A</font></b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b><font face="Lucida Sans Unicode, Lucida Grande, sans-serif">PAKET CATERING TYPE B</font></b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b><font face="Lucida Sans Unicode, Lucida Grande, sans-serif">Buffe Utama 600 Porsi</font></b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b><font face="Lucida Sans Unicode, Lucida Grande, sans-serif">Buffe Utama 800 Porsi</font></b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>1 . Nasi Putih</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>1 . Nasi Putih</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>2 . Nasi Goreng Special</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>2 . Nasi Goreng Special</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>3 . Soup</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>3 . Soup</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Soup Ayam Bakso</li>
        <li>Soup KImio</li>
        <li>Soup Sosis</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Soup Ayam Bakso</li>
        <li>Soup KImio</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>4 . Daging</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>4 . Daging</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Daging Rolade Saus BBQ</li>
        <li>Beef Tariyaki</li>
        <li>Daging Rendang</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Rolade Saus BBQ</li>
        <li>Beef Tariyaki</li>
        <li>Daging Rendang</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>5 . Ayam</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>5 . Ayam</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Ayam Goreng Mentega</li>
        <li>Chicken Teriyaki</li>
        <li>Ayam Bumbu Rujak</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Ayam Goreng Mentega</li>
        <li>Chicken Teriyaki</li>
        <li>Ayam Bumbu Rujak</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>6 . Salad</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>6 . Ikan / Udang</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Asinan Penganten</li>
        <li>Selada Bangkok</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Ikan Filet Asam Manis</li>
        <li>Kakap Saos Leci</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>7. Kerupuk</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>7 . Salad</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>8. Aneka Puding</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Asinan Penganten</li>
        <li>Selada Bangkok</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>8 . Kerupuk</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>9. Aneka Soft Drink</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>9. Aneka Puding</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>10 Aneka Buah Segar</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>10. Aneka Soft Drink</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>11. Aneka Snack</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>11. Aneka Buah Segar</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>12. Air Es / Mineral</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>12. Aneka Snack</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>13 .Menu Gubukan</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>13. Air Es / Mineral</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>14 .Menu Gubukan</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Ice Cream  ( 400 Porsi)</li>
        <li>Siomay ( 100 Porsi )</li>
        <li>Bakso ( 100 Porsi )</li>
        <li>Soto ( Sulung 100 Porsi )</li>
        <li>Kambing Guling ( 1 Ekor )</li>
        <li>Aneka Bubur ( 100 Porsi )</li>
      </ul>
        <p></p></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Kambing Guling ( 100 Porsi)</li>
        <li>Ice Cream  ( 2 Galon )</li>
        <li>Dimsum ( 100 Porsi )</li>
        <li>Bakso ( 100 Porsi )</li>
        <li>Zuppa Soup ( Sulung 100 Porsi )</li>
        <li>Soto Kudus ( 1 Ekor )</li>
        <li>Sate Ayam ( 100 Porsi )        </li>
        <li>Air 1 Galon</li>
      </ul>
        <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>14. Rias , Busana + Accessories Pengantin</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>15. Rias , Busana + Accessories Pengantin</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Rias Pengantin Akad Nikah di Gedung</li>
        <li>Rias + Busana Pengantin Resepsi </li>
        <li>Rias + Busana Orang Tua  4 orang </li>
        <li>Rias + Busana Penerima Tamu  4 orang </li>
        <li>Rias + Busana Pagar Bagus 3 orang </li>
        <li>Rias + Busana Pagar Ayu  3 orang </li>
        <li>Bunga Tangan / Hand Bucket</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Rias Pengantin Akad Nikah di Gedung</li>
        <li>Rias + Busana Pengantin Resepsi </li>
        <li>Rias + Busana Orang Tua  4 orang </li>
        <li>Rias + Busana Penerima Tamu  4 orang </li>
        <li>Rias + Busana Pagar Bagus 3 orang </li>
        <li>Rias + Busana Pagar Ayu  3 orang </li>
        <li>Bunga Tangan / Hand Bucket</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>15. Dekorasi Pelaminan Gedung</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>16. Dekorasi Pelaminan Gedung</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Pelaminan Gedung Bunga Segar</li>
        <li>Standing Flower ( 2 Pasang ) di Pelaminan</li>
        <li>Taman Mini Garden / Taman Miniatur</li>
        <li>Karpet Jalan</li>
        <li>Standing Flower ( 6 Buah )</li>
        <li>Umbul - Umbul ( 1 Pasang ) </li>
        <li>Gazebo Pintu Masuk</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Pelaminan Gedung Bunga Segar</li>
        <li>Standing Flower ( 2 Pasang ) di Pelaminan</li>
        <li>Taman Mini Garden / Taman Miniatur</li>
        <li>Karpet Jalan</li>
        <li>Standing Flower ( 6 Buah )</li>
        <li>Umbul - Umbul ( 1 Pasang ) </li>
        <li>Gazebo Pintu Masuk</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>16 . Perlengkapan Pesta</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>17 . Perlengkapan Pesta</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Meja Tamu ( 2 Set )</li>
        <li>Buku Tamu + Spidol</li>
        <li>Kotak Uang ( 2 Buah )</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Meja Tamu ( 2 Set ) + Bunga Meja</li>
        <li>Buku Tamu + Spidol</li>
        <li>Kotak Uang ( 2 Buah )</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><p><b>17 . MC</b></p></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><p><b>18 . MC</b></p></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Mc Resepsi</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Mc Resepsi</li>
        <li>Organ Tunggal</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>18 . Dokumentasi</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>19 . Dokumentasi</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Foto Digital 1 Album di Kolase</li>
        <li>Video Shooting Transfer DVD  *Harga sudah termasuk charge </li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Foto Digital 1 Album di Kolase</li>
        <li>Video Shooting Transfer DVD  *Harga sudah termasuk charge </li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>19 . Bonus</b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b>20 . Bonus</b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Buffe Keluarga 50 Porsi </li>
        <li>Siraman</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Buffe Keluarga 50 Porsi </li>
        <li>Siraman</li>
        <li>Mc Adat</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <th align="left" valign="top" bgcolor="#FFFFFF" class="Teks_Produk" scope="col"><font color="black">Paket Rias Pengantin + Catring 1000 Porsi + Sewa Gedung</font></th>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <th align="left" valign="top" bgcolor="#FFFFFF" class="Teks_Produk" scope="col"><font color="black">Harga Rp 70 juta !!!</font></th>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><strong><b><font face="Lucida Sans Unicode, Lucida Grande, sans-serif">Menu :</font></b></strong></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b><font face="Lucida Sans Unicode, Lucida Grande, sans-serif">PAKET CATERING TYPE C</font></b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><b><font face="Lucida Sans Unicode, Lucida Grande, sans-serif">Buffe Utama 800 Porsi</font></b></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">1 .Nasi Putih </td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">2. Nasi Goreng Special</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">3. Soup</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Soup Ayam Jagung</li>
        <li>Soup Kimio</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">4. Daging</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Rolade Saos BBQ</li>
        <li>Beef Teriyaki</li>
        <li>Daging Rendang</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">5. Ayam</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Ayam Bakar Kalasan</li>
        <li>Chicken Teriyaki</li>
        <li>Ayam Cabe Paprika</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">6. Ikan / Udang</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Udang Mayonaise</li>
        <li>Udang Balado</li>
        <li>Ikan Tepung Saos Padang</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">7. Salad</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Fruit Coctail</li>
        <li>Selada Bangkok / Sayuran</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">8. Schotel</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Macaroni Schotel</li>
        <li>Spaghetti</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">9. Kerupuk</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">10. Aneka Puding</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">11. Aneka Soft Drink</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">12. Aneka Buah Segar</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">13. Aneka Snack</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">14. Air Es / Mineral</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">15. Menu Gubukan</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Kambing Guling 100</li>
        <li>Ice Cream 2 Galon</li>
        <li>Martabak 100 Porsi</li>
        <li>Es Dawet 100 Porsi</li>
        <li>Zuppa Soup 100 Porsi</li>
        <li>Soto Betawi 100 Porsi</li>
        <li>Sate Ayam 100 Porsi</li>
        <li>Somay 100 Porsi</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">16. Rias , Busana + Accessories Pengantin</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Rias Pengantin Akad Nikah di Gedung</li>
        <li>Rias + Busana Pengantin Resepsi </li>
        <li>Rias + Busana Orang Tua  4 orang </li>
        <li>Rias + Busana Penerima Tamu  4 orang </li>
        <li>Rias + Busana Pagar Bagus 6 orang </li>
        <li>Rias + Busana Pagar Ayu  6 orang </li>
        <li>Bunga Tangan / Hand Bucket</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">17. Dekorasi Pelaminan Gedung</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Pelaminan Gedung Bunga Segar, Taman</li>
        <li>Standing Flower ( 2 Pasang ) di Pelaminan</li>
        <li>Karpet Jalan</li>
        <li>Standing Flower 6 Buah</li>
        <li>Umbul - Umbul 1 pasang</li>
        <li>Palem Background Pelaminan</li>
        <li>Gazebo Pintu Masuk</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><p>18. Perlengkapan Pesta</p></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Meja Tamu ( 2 Set ) + Bunga Meja</li>
        <li>Buku Tamu + Spidol</li>
        <li>Kotak Uang 2 Buah</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">19. MC</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Mc Resepsi</li>
        <li>Organ Tunggal</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">20. Dokumentasi</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Foto Digital 1 Album di Kolase</li>
        <li>Vidio Shooting Transfer DVD *Harga Sudah Termasuk Charge</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">21. Bonus</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><ul>
        <li>Buffi Keluarga 50 Porsi</li>
        <li>Mc Akat</li>
        <li>Akad</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
  </table></th>
  <td width="200" align="left" valign="top" bgcolor="#E8EED7"><div class="Area_Menu_Kanan">
    <table width="100%" border="0" cellspacing="2" cellpadding="0">
      <tr>
        <th width="13%" align="left" valign="top" scope="col"><img src="Gambar/Kantong Belanja.png" width="25" height="25" /></th>
        <td width="87%" align="left" valign="middle" class="Teks_Menu" scope="col">Keranjang Belanja
          <?php include "jumlah.php"; ?></td>
      </tr>
      <tr>
        <th align="left" valign="top" scope="col">&nbsp;</th>
        <th align="left" valign="top" scope="col"><hr /></th>
      </tr>
      <tr>
        <th colspan="2" align="center" valign="top" scope="col"><div class="Area_Menu_Keranjang">
          <?php include "keranjang_belanja_memo.php"; ?>
        </div></th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="top" class="Teks_Keranjang" scope="col"><div class="Area_Menu_Keranjang_Total">
          <hr />
        </div></th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="top" scope="col"><img src="Gambar/informasii.jpg" width="175" height="25" /></th>
      </tr>
      <tr>
        <th align="left" valign="top" scope="col">&nbsp;</th>
        <td align="left" valign="middle" class="Teks_Informasi" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <th align="left" valign="top" scope="col">&nbsp;</th>
        <td align="left" valign="middle" class="Teks_Informasi" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <th align="center" valign="top" scope="col">&nbsp;</th>
        <td align="left" valign="top" class="Teks_Informasi" scope="col"><br /></td>
      </tr>
      <tr>
        <th colspan="2" align="center" valign="top" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="top" scope="col"><img src="Gambar/pembayaran.jpg" alt="" width="175" height="25" /></th>
      </tr>
      <tr>
        <th align="center" valign="top" scope="col">&nbsp;</th>
        <th align="center" valign="top" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th colspan="2" align="center" valign="top" scope="col"><a href="http://www.bankmandiri.co.id/" target="new"><img src="Gambar/mandiri.jpg" width="150" height="50" /></a></th>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">125000253</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">Amira Rafi Wedding Organizer</td>
      </tr>
      <tr>
        <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
        <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th colspan="2" align="center" valign="top" class="Teks_Bank" scope="col"><a href="http://www.bankmandiri.co.id/" target="new"></a></th>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
        <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
        <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
      </tr>
    </table>
  </div></td>
</tr>
<tr>
  <td colspan="3"><img src="Gambar/FooterNEW.png" width="1065" height="86" /></td>
</tr>
</table>
<map name="Map" id="Map">
  <area shape="rect" coords="778,1,896,22" href="pcontact.php" target="_self" />
  <area shape="rect" coords="523,4,772,23" href="pbusana.php" target="_self" />
  <area shape="rect" coords="297,4,503,22" href="ppg.php" target="_self" />
  <area shape="rect" coords="95,4,274,22" href="ppr.php" target="_self" />
  <area shape="rect" coords="28,3,71,20" href="home.php" target="_self" />
</map>
</body>
</html>