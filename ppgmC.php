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
	width: 800px;
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
	background-color:#CC0066  ;
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
      <th align="right" valign="middle" scope="col"><marquee scrollamount="8">Selamat datang di website kami, Rini Amira Wedding Organizer siap melayani keperluan Anda dengan harga terbaik, Terimakasih....&nbsp; </marquee></th>
      </tr>
    </table>
    </th>
</tr>
<tr>
  <td colspan="3"><img src="header/1.jpg" width="1065" height="439" /></td>
</tr>
<tr>
  <td colspan="3"><img src="Gambar/MENU.jpg" width="1065" height="25" usemap="#Map" border="0" />
    <map name="Map" id="Map2">
      <area shape="rect" coords="982,6,1065,22" href="pcontact.php" target="_self" />
      <area shape="rect" coords="486,5,714,20" href="pbusana.php" target="_self" />
      <area shape="rect" coords="280,4,473,21" href="ppg.php" target="_self" />
      <area shape="rect" coords="73,4,253,21" href="ppr.php" target="_self" />
      <area shape="rect" coords="9,5,58,19" href="index.php" target="_self" />
      <area shape="rect" coords="748,6,943,21" href="alatpesta.php" />
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
              <th align="left" valign="top" scope="col"><img src="Gambar/kategori1.jpg" alt="" width="175" height="25" /></th>
            </tr>
            <tr>
              <th align="left" valign="top" class="Teks_Kategori" scope="col"><marquee behavior="" scrollamount="2">
              </marquee></th>
            </tr>
            <tr>
              <th align="left" valign="top" class="Teks_Kategori" scope="col"><ul>
                <li><a href="ppgmA.php"><font color="#0096C3">Paket Type A</font></a></li>
                <li><a href="ppgmB.php"><font color="#0096C3">Paket Type B</font></a></li>
                <li><a href="ppgmC.php"><font color="#0096C3">Paket Type C</font></a></li>
                </ul></th>
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
  <th width="400" align="center" valign="top" bgcolor="#CC3333"><table width="396" border="0" cellpadding="0" cellspacing="0" class="Area_Produk">
    <tr>
      <th width="191" align="left" valign="top" bgcolor="#CC3333" class="Teks_Produk" scope="col"><font color="#FFCC00"><marquee direction="left" scrollamount="3">*Harga Diluar Sewa Gedung Dan Cas</marquee></font></th>
    </tr>
    <tr>
      <th align="left" valign="top" bgcolor="#CC3333" class="Teks_Produk" scope="col"><font color="#0096C3" size="2px">PAKET TYPE C</font></th>
    </tr>
    <tr>
      <th align="left" valign="top" bgcolor="#CC3333" class="Teks_Produk" scope="col">&nbsp;</th>
      </tr>
    <tr>
      <th align="left" valign="top" bgcolor="#CC3333" class="Teks_Produk" scope="col"><font color="yellow">Paket Rias Pengantin + Catring 1000 Porsi</font></th>
    </tr>
    <tr>
      <th align="left" valign="top" bgcolor="#CC3333" class="Teks_Produk" scope="col"><font color="yellow">Harga Rp 69 juta </font></th>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><strong><b><font face="Lucida Sans Unicode, Lucida Grande, sans-serif"><font color="#FFFF00">Menu :</font></font></b></strong></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b><font face="Lucida Sans Unicode, Lucida Grande, sans-serif">PAKET CATERING TYPE C</font></b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><b><font face="Lucida Sans Unicode, Lucida Grande, sans-serif">Buffe Utama 800 Porsi</font></b></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">1 .Nasi Putih </td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">2. Nasi Goreng Special</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">3. Soup</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Soup Ayam Jagung</li>
        <li>Soup Kimio</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">4. Daging</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Rolade Saos BBQ</li>
        <li>Beef Teriyaki</li>
        <li>Daging Rendang</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">5. Ayam</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Ayam Bakar Kalasan</li>
        <li>Chicken Teriyaki</li>
        <li>Ayam Cabe Paprika</li>
        <li>Ikan / Udang</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">6. Ikan / Udang</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Udang Mayonaise</li>
        <li>Udang Balado</li>
        <li>Ikan Tepung Saos Padang</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">7. Salad</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Fruit Coctail</li>
        <li>Selada Bangkok / Sayuran</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">8. Schotel</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Macaroni Schotel</li>
        <li>Spaghetti</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">9. Kerupuk</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">10. Aneka Puding</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">11. Aneka Soft Drink</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">12. Aneka Buah Segar</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">13. Aneka Snack</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">14. Air Es / Mineral</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">15. Menu Gubukan</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Kambing Guling 100</li>
        <li>Ice Cream 2 Galon</li>
        <li>Zuppa Soup 100 Porsi</li>
        <li>Soto Betawi 100 Porsi</li>
        <li>Soto / Sate Ayam 100 Porsi</li>
        <li>Somay 100 Porsi</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">16. Rias , Busana + Accessories Pengantin</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Rias Pengantin Akad Nikah di Gedung</li>
        <li>Rias + Busana Pengantin Resepsi </li>
        <li>Rias + Busana Orang Tua  4 orang </li>
        <li>Rias + Busana Penerima Tamu  4 orang </li>
        <li>Rias + Busana Pagar Bagus 4 orang </li>
        <li>Rias + Busana Pagar Ayu  4 orang </li>
        <li>Bunga Tangan / Hand Bucket</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">17. Dekorasi Pelaminan Gedung</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Pelaminan Gedung Bunga Segar, Taman</li>
        <li>Standing Flower ( 2 Pasang ) di Pelaminan</li>
        <li>Karpet Jalan</li>
        <li>Standing Flower 6 Buah</li>
        <li>Umbul - Umbul 1 pasang</li>
<!--         <li>Palem Background Pelaminan</li> -->
        <li>Gazebo Pintu Masuk</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><p>18. Perlengkapan Pesta</p></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Meja Tamu ( 2 Set ) + Bunga Meja</li>
        <li>Buku Tamu + Spidol</li>
        <li>Kotak Uang 2 Buah</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">19. MC</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Mc Resepsi</li>
        <li>Organ Tunggal</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">20. Dokumentasi</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><ul>
        <li>Foto Digital 1 Album di Kolase</li>
        <li>Video Shooting Trasnfer DVD</li>
      </ul></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333"><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#CC3333">&nbsp;</td>
      </tr>
  </table></th>
  <td width="200" align="left" valign="top" bgcolor="#FF6666"><div class="Area_Menu_Kanan">
    <table width="100%" height="435" border="0" cellpadding="0" cellspacing="2">
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
        <th align="left" valign="top" scope="col"><img src="Gambar/informasii.jpg" width="172" height="25" /></th>
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
        <th align="left" valign="top" scope="col"><img src="Gambar/pembayaran.jpg" alt="" width="172" height="25" /></th>
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
        <th align="center" valign="top" class="Teks_Bank" scope="col"><a href="http://www.bankmandiri.co.id/" target="new"></a></th>
      </tr>
      <tr>
        <td align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <td align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
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