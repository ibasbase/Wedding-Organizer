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
<title>Rini Amira Wedding Organizer</title>

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
	font-family:Arial, Helvetica, sans-serif;
	font-size: 11px;
	color:#999;
}

.Teks_News {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	color:#FFF;
}

.Teks_Testimonial {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	color:#000;
}

.Teks_Informasi {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 11px;
	color:#FFF;
}

.Teks_Bank {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color:#FFF;
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
	color: #FFF;
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
	background-color:#CC0066 ;
}
li {
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	text-shadow:#0F0;
	color:#FFF;
	
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
      <th align="right" valign="middle" scope="col"><marquee scrollamount=8">Selamat datang di website kami, Rini Amira Wedding Organizer siap melayani keperluan Anda dengan harga terbaik, Terimakasih....&nbsp; </marquee></th>
      </tr>
    </table>
    </th>
</tr>
<tr>
  <td colspan="3"><img src="header/1.jpg" width="1065" height="439"></td>
</tr>
<tr>
  <td colspan="3"><img src="Gambar/MENU.jpg" width="1065" height="25" usemap="#Map" border="0" />
    <map name="Map" id="Map2">
      <area shape="rect" coords="983,6,1061,22" href="pcontact.php" target="_self" />
      <area shape="rect" coords="497,5,709,20" href="pbusana.php" target="_self" />
      <area shape="rect" coords="286,3,461,20" href="ppg.php" target="_self" />
      <area shape="rect" coords="89,7,249,22" href="ppr.php" target="_self" />
      <area shape="rect" coords="6,6,57,20" href="index.php" target="_self" />
      <area shape="rect" coords="755,6,946,21" href="#" />
    </map></td>
</tr>
<tr>
  <td align="left" valign="top" bgcolor="#FF6666"><div class="Area_Menu_Kiri">
    <form id="form1" name="form1" method="post" action="login.php">
      <table width="100%" border="0" cellspacing="2" cellpadding="0">
        <tr>
          <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <th align="left" valign="top" scope="col">&nbsp;</th>
            </tr>
            <tr>
              <th align="left" valign="top" class="Teks_Kategori" scope="col"><img src="Gambar/news.jpg" alt="" width="175" height="25" /></th>
            </tr>
            <tr>
              <th align="left" valign="top" class="Teks_Kategori" scope="col"><span class="Teks_News">
                <?php include "news.php"; ?>
              </span></th>
            </tr>
            </table></td>
        </tr>
        <tr>
          <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <th align="left" valign="top" scope="col">&nbsp;</th>
              </tr>
            </table></td>
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
          <td width="29%" align="left" valign="top">&nbsp;</td>
          <td width="3%">&nbsp;</td>
          <td width="68%" class="Teks_Menu">&nbsp;</td>
        </tr>
      </table>
    </form>
  </div></td>
  <th width="400" align="center" valign="top" bgcolor="#CC3333"><table width="396" border="0" cellpadding="0" cellspacing="0" class="Area_Produk">
    <tr>
      <th align="left" valign="top" bgcolor="#CC3333" class="Teks_Produk" scope="col">&nbsp;</th>
      <th align="left" valign="top" bgcolor="#CC3333" class="Teks_Produk" scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th align="left" valign="top" bgcolor="#CC3333" class="Teks_Produk" scope="col"><font color="yellow">MENYEWAKAN ALAT - ALAT PESTA</font></th>
      <th align="left" valign="top" bgcolor="#CC3333" class="Teks_Produk" scope="col">&nbsp;</th>
    </tr>
    <tr>
      <th width="237" align="left" valign="top" bgcolor="#CC3333" class="Teks_Produk" scope="col"><font color="yellow">TENDA KURSI DAN DEKORASI PERNIKAHAN</font></th>
      <th width="138" align="left" valign="top" bgcolor="#CC3333" class="Teks_Produk" scope="col">&nbsp;</th>
    </tr>
  
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b><font color="yellow">DAFTAR ITEM ( NO PAKET )</font></b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>1 . Dokumentasi Standar</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>1 Album Kolase Press Anti Gores</li>
        <li> Studio Mini</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>2 . Dokumentasi Lengakap</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>1 Album Kolase Lengakap Anti Gores</li>
        <li>Studio Mini</li>
        <li>DVD Liputan</li>
        <li>40 x 50 cm Foto Kanvase</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>3 . Foto Preewedding Indoor</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Termasuk Rias Dan Busana</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>4 . Foto Preewedding Out Door</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Termasuk Rias Dan Busana</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>5. Pelaminan Pilihan 3 sd 4 Meter</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>6. Pelaminan Pilihan 5 sd 6 Meter</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Dengan Tema Mini Garden</li>
        </ul></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>7. Dekorasi Piliahan 7 sd 12 Meter</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Taman Mini Garden</li>
        <li>Standing Flower</li>
        <li>Gazebo Pintu Masuk</li>
        <li>Janur Umbul - Umbul</li>
      </ul></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>8. Dekorasi Eksklusive Lengkap</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>9.. Dekorasi Kamar Pengantin</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>10 .Standing Flower</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">11. Gazebo Pintu Masuk</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>12. Janur Umbul - Umbul </b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>13. Rias Dan Busana Penganten</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">14. Rias Make Up+ Rambut / Jilbab</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>15. Rias Make Up + Rambut / Jilbab Dengan Busana</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">16. Kebaya Wanita + Kain</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><p><b>17 .Beskap Jawa /Nan/Sunda</b></p></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">18. Jas Modern</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b>19 . MC Resepsi</b></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">20. MC Akad Nikah</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">21. MC Akad Nikah Sungkeman</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">22. Upacara Adat Panggih / Temon</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">23. Upacara Adat Siraman Jawa</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">24. Tarian Pengiring cck Lampah</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">25. Tarian Hiburan Gatot Kaca Jawa</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">26. Tarian Pengiring Lengser Sunda</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">27. Tarian Hiburan Sunda</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">28. Tarian Persembahan Padang</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">29. Organ Tunggal</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">30. Mobil Penganten</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">31. Kue Penganten Pilihan</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">32. Tempat Uang</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">33. Kursi Vernekel + Cover</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">34. Kursi Futura + Cover</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">35. Tenda Plafon Dekorasi</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">36. Tenda Plafon Standar</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">37. Tirai Dinding / Tirai Penutup Tenda</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">38. AC</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">39. Cooling Fan</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">40. Pemanas Segi Kecil</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">41.Pemanas Segi Besaar</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">42. Pemanas Rottop</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">43. Piring Sendok Garpu</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">44. Meja + Cover</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">45. Gubukan + Meja</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">46. Panggung Pelaminan</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">47. Panggung Musik</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">48. Standing Flower</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">49. Hand Bucket</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><p>&nbsp;</p></td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
  </table></th>
  <td width="200" align="left" valign="top" bgcolor="#FF6666"><div class="Area_Menu_Kanan">
    <table width="100%" border="0" cellspacing="2" cellpadding="0">
      <tr>
        <td width="87%" align="left" valign="middle" class="Teks_Menu" scope="col">Keranjang Belanja
          <?php include "jumlah.php"; ?></td>
      </tr>
      <tr>
        <th align="left" valign="top" scope="col"></th>
      </tr>
      <tr>
        <th align="center" valign="top" scope="col"><div class="Area_Menu_Keranjang">
          <?php include "keranjang_belanja_memo.php"; ?>
        </div></th>
      </tr>
      <tr>
        <th align="left" valign="top" class="Teks_Keranjang" scope="col"><div class="Area_Menu_Keranjang_Total">
          
        </div></th>
      </tr>
      <tr>
        <th align="left" valign="top" scope="col"><img src="Gambar/informasii.jpg" width="172" height="25" align="left" /></th>
      </tr>
      <tr>
        <td align="left" valign="middle" class="Teks_Informasi" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="middle" class="Teks_Informasi" scope="col"><div align="center">Komp . Harapan Jaya Blok A</div></td>
      </tr>
      <tr>
        <td align="left" valign="middle" class="Teks_Informasi" scope="col"><div align="center">Jl. Mahoni ll No. 108 Bekasi </div></td>
      </tr>
      <tr>
        <td align="left" valign="middle" class="Teks_Informasi" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <th align="left" valign="top" scope="col"><img src="Gambar/pembayaran.jpg" alt="" width="172" height="25" align="left" /></th>
      </tr>
      <tr>
        <th align="center" valign="top" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th align="center" valign="top" scope="col"><a href="http://www.bankmandiri.co.id/" target="new"><img src="Gambar/mandiri.jpg" width="172" height="50" align="left" /></a></th>
      </tr>
      <tr>
        <td align="center" valign="top" class="Teks_Bank" scope="col">125 000 253 6217</td>
      </tr>
      <tr>
        <td align="center" valign="top" class="Teks_Bank" scope="col">Rini Amirai Wedding Organizer</td>
      </tr>
      <tr>
        <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th align="center" valign="top" class="Teks_Bank" scope="col"><a href="http://www.bankmandiri.co.id/" target="new"><img src="Gambar/newstock.jpg" width="172" height="25" align="left" /></a></th>
      </tr>
      <tr>
        <td align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top" class="Teks_Bank" scope="col"><img src="sidebar/14.jpg" width="172" height="200" align="left" /></td>
      </tr>
      <tr>
        <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th align="center" valign="top" class="Teks_Bank" scope="col"><img src="sidebar/16.jpg" width="172" height="200" align="left" /></th>
      </tr>
      <tr>
        <td align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top" class="Teks_Bank" scope="col"><img src="sidebar/gtrhdgrrgrs.jpg" width="172" height="200" align="left" /></td>
      </tr>
      <tr>
        <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th align="center" valign="top" class="Teks_Bank" scope="col"><img src="sidebar/3.jpg" width="172" height="200" align="left" /></th>
      </tr>
      <tr>
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