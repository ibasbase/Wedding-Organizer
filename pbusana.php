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
<title>Rini Amira  Wedding Organizer</title>

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
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
	color: #0096C3;
}

.Area_Produk {
	height: auto;
	width: 375px;
	margin-top: 10px;
	font-size: 10px;
	font-family: Arial, Helvetica, sans-serif;
	color:#FFF;
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
td {
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
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
<table width="1053" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="208" height="22" align="left" valign="top" bgcolor="#F7FAE4" scope="col"><div class="Area_Menu_Kiri">
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
    <th colspan="2" align="right" valign="middle" bgcolor="#F8FBE6" class="Teks_Menu_Atas" scope="col">
      <table width="95%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th align="right" valign="middle" scope="col"><marquee scrollamount="8">Selamat datang di website kami, Rini Amira Wedding Organizer siap melayani keperluan Anda dengan harga terbaik, Terimakasih....&nbsp; </marquee></th>
        </tr>
      </table>
</th>
  </tr>
  <tr>
    <td colspan="3"><img src="header/1.jpg" width="1065" height="439" border="0" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="Gambar/MENU.jpg" width="1065" height="25" usemap="#Map" border="0" />
      <map name="Map" id="Map">
        <area shape="rect" coords="989,6,1055,21" href="pcontact.php" target="_self" />
        <area shape="rect" coords="496,7,712,21" href="pbusana.php" target="_self" />
        <area shape="rect" coords="287,5,469,21" href="ppg.php" target="_self" />
        <area shape="rect" coords="83,7,248,22" href="ppr.php" target="_self" />
        <area shape="rect" coords="8,5,55,20" href="index.php" target="_self" />
        <area shape="rect" coords="754,7,948,22" href="alatpesta.php" target="_self" />
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
                <th align="left" valign="top" class="Teks_Kategori" scope="col">
                  <img src="Gambar/news.jpg" alt="" width="175" height="25" />
                </th>
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
              <tr>
                <td align="left" valign="top" class="Teks_News" scope="col">&nbsp;</td>
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
    <th width="642" align="center" valign="top" bgcolor="#CC3333"><table width="395" border="0" cellpadding="0" cellspacing="0" class="Area_Produk">
      <tr>
        <th align="left" width="300" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
        <th width="75" align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th align="left" valign="top" class="Teks_Produk" scope="col"></th>
        <th align="left" valign="top" class="Teks_Produk" scope="col"></th>
      </tr>
      <tr>
        <td align="left"  valign="top">1 . Up &amp; Hair do ( Akad &amp; Resepsi-1 lokasi) Re touch</td>
        <td align="left"  valign="top" >Rp. 2.000.000</td>
      </tr>
      <tr>
        <td align="left" valign="top">2. Up Ibu Pengantin &amp; Hair Do Jilbab</td>
        <td align="left" valign="top">Rp. 200.000</td>
      </tr>
      <tr>
        <td height="15" align="left" valign="top">3. Up Saudara Kandung Hair Do Jilbab (min 8 orang</td>
        <td align="left" valign="top">Rp. 175.000</td>
      </tr>
      <tr>
        <td height="17" align="left" valign="top">4. Kebaya Akad Pengantin ( Plus Kain Bustier dan Selop )</td>
        <td align="left" valign="top">Rp .500.000</td>
      </tr>
      <tr>
        <td align="left" valign="top">5. Kebaya Resepsi Pengantin ( Plus Kain Bustier dan Selop)</td>
        <td align="left" valign="top">Rp. 500.000 </td>
      </tr>
      <tr>
        <td align="left" valign="top">6. Baskap Pengantin ( Lengkap Plus Peci dan Slop)</td>
        <td align="left" valign="top">Rp. 200.000</td>
      </tr>
      <tr>
        <td align="left" valign="top">7. Kebaya Orang Tua Pengantin ( Plus Kain dan Bustier)</td>
        <td align="left" valign="top">Rp. 200.000</td>
      </tr>
      <tr>
        <td align="left" valign="top">8. Beskap Nasional Orang Tua Pengantin ( Tanpa Pasang)</td>
        <td align="left" valign="top">Rp. 150.000</td>
      </tr>
      <tr>
        <td align="left" valign="top">9. Beskap Jawa Untuk Orang Tua Pengantin ( Tanpa Pasang </td>
        <td align="left" valign="top">Rp. 150.000</td>
      </tr>
      <tr>
        <td align="left" valign="top">10.Kebaya Keluarga ( Plus Kain dan Bastier )</td>
        <td align="left" valign="top">Rp. 200.000 </td>
      </tr>
      <tr>
        <td align="left" valign="top">11.Baskap Nasional ( Tanpa Pasang )</td>
        <td align="left" valign="top">Rp. 150.000</td>
      </tr>
      <tr>
        <td align="left" valign="top">12.Baskap Nasional ( Plus Pasang ) Minimal 10 Orang</td>
        <td align="left" valign="top">Rp. 175.000</td>
      </tr>
      <tr>
        <td align="left" valign="top">13.Baskap Jawa ( Tanpa Pasang )</td>
        <td align="left" valign="top">Rp. 150.000</td>
      </tr>
      <tr>
        <td align="left" valign="top">14.Baskap Jawa ( Plus Pasang ) Minimal 10 Orang</td>
        <td align="left" valign="top">Rp. 175.000</td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table></th>
    <td width="203" align="left" valign="top" bgcolor="#FF6666"><div class="Area_Menu_Kanan">
        <table width="51%" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <td width="87%" align="left" valign="middle" class="Teks_Menu" scope="col">Keranjang Belanja <?php include "jumlah.php"; ?></td>
          </tr>
          <tr>
            <th align="left" valign="top" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th align="center" valign="top" scope="col"><div class="Area_Menu_Keranjang"><?php include "keranjang_belanja_memo.php"; ?></div></th>
          </tr>
          <tr>
            <th align="left" valign="top" class="Teks_Keranjang" scope="col"><div class="Area_Menu_Keranjang_Total"></div></th>
          </tr>
          <tr>
            <th align="center" valign="top" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th align="left" valign="top" scope="col"><img src="Gambar/informasii.jpg" width="175" height="25" /></th>
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
            <th align="left" valign="top" scope="col"><img src="Gambar/pembayaran.jpg" alt="" width="175" height="25" /></th>
          </tr>
          <tr>
            <th align="center" valign="top" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th align="center" valign="top" scope="col"><a href="http://www.bankmandiri.co.id/" target="new"><img src="Gambar/mandiri.jpg" width="172" height="50" align="left" /></a><a href="https://ibank.klikbca.com/" target="new"></a></th>
          </tr>
          <tr>
            <td align="center" valign="top" class="Teks_Bank" scope="col">125 000 253 6217</td>
          </tr>
          <tr>
            <td align="center" valign="top" class="Teks_Bank" scope="col"> Rini Amira Wedding Organizer</td>
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
            <td align="center" valign="top" class="Teks_Bank" scope="col"><img src="sidebar/9.jpg" width="172" height="200" align="left" /></td>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col"><img src="sidebar/10.jpg" width="172" height="200" align="left" /></th>
          </tr>
          <tr>
            <td align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top" class="Teks_Bank" scope="col"><img src="sidebar/11.jpg" width="172" height="200" align="left" /></td>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col"><img src="sidebar/14.jpg" width="172" height="200" align="left" /></th>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
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
</body>
</html>