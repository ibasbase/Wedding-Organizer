<?php session_start();
if (ISSET($_SESSION['userlogin']))
{
	header("location:home.php");
}
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
	text-align:center;
	color:#FFF;
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

	font-family:Tahoma, Geneva, sans-serif;
	font-size: 12px;
	color:#FFF;
}

.Teks_Testimonial {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	color:#000;
}

.Teks_Informasi {
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 11px;
	color:#FFF;
}

.Teks_Bank {
	font-family:Arial, Helvetica, sans-serif;
	font-size: 11px;
	color:#FFF;
}

.Teks_Produk {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
	color: #0096C3;
	text-align:left;
}

.Area_Produk {
	height: auto;
	width: 375px;
	margin-top: 0px;
	font-size: 10px;
	font-family: Arial, Helvetica, sans-serif;
	text-align:center;
}

.Area_Slider {
	width: 500px;
	margin-top: 10px;
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
	background-color:#CC0066      ;
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
<table width="1114" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="204" height="22" align="left" valign="top" bgcolor="#F7FAE4" scope="col"><div class="Area_Menu_Kiri">
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
          <th align="right" scope="col"><marquee scrollamount=”1”>Selamat datang di website kami, Rini Amira Wedding Organizer siap melayani keperluan Anda dengan harga terbaik, Terimakasih....&nbsp;
          </marquee></th>
        </tr>
      </table>
</th>
  </tr>
  <tr>
    <td colspan="3"><img src="header/1.jpg" width="1128" height="439" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="Gambar/MENU.jpg" width="1128" height="25" usemap="#Map" border="0" /></td>
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
                <th align="left" valign="top" class="Teks_Kategori" scope="col"><img src="Gambar/news.jpg" alt="" width="175" height="25" /></tr>
              <tr>
                <th align="left" valign="top" class="Teks_Kategori" scope="col">&nbsp;</th>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
              <tr>
                <th align="left" valign="top" scope="col"><span class="Teks_News">
                  <?php include "news.php"; ?>
                </span></th>
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
 <td valign="top" bgcolor="#FF6666" class="Teks_Testimonial" scope="col"><?php include "top_testimonial.php"; ?>
                  <br />
                  <br />
                  <div><a href="isitestimonial.php" target="_self">>> isi testimonial</a><br />
                    <a href="lihattestimonial.php" target="_self">>> lihat testimonial </a></div>
<br /></td>
              </tr>
            </table></td>
            </tr>
          <tr>
            <td align="center" valign="top">&nbsp;</td>
            <td>&nbsp;</td>
            <td class="Teks_Menu">&nbsp;</td>
          </tr>
        </table>
      </form>
    </div></td>
    <th width="716" align="left" valign="top" bgcolor="#CC3333"><table width="1545" border="0" align="center" cellpadding="0" cellspacing="0" dir="ltr" class="Area_Produk">
      <tr>
        <th width="515" align="" valign="top" scope="col">&nbsp;</th>
        <th width="515" align="" valign="top" scope="col">&nbsp;</th>
        <th width="515" align="" valign="top" scope="col"><div class="Area_Slider">
          <table width="100%" border="0">
            <tr>
              <td width="36%">&nbsp;</td>
              <td width="24%">&nbsp;</td>
              <td width="40%"><?php include"slider.php" ?></td>
            </tr>
          </table>
        </div></th>
      </tr>
      <tr>
        <th align="left" valign="top" class="Teks_Selamat" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Selamat" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Selamat" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th align="left" valign="top" class="Teks_Selamat" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Selamat" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Selamat" scope="col"> Selamat datang di Rini Amira Wedding Organizer<br />
          Nikmati kemudahan berkerjasama bersama kami !!!     <br /></th>
      </tr>
      <tr>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Produk" scope="col"><hr /></th>
      </tr>
      <tr>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
        <th align="left" valign="top" class="Teks_Produk" scope="col"><?php include "produk_baru.php"; ?></th>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top"><div class="Area_Produk"></div></td>
      </tr>
    </table></th>
    <td width="194" align="left" valign="top" bgcolor="#FF6666"><div class="Area_Menu_Kanan">
        <table width="100%" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <th align="left" valign="top" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <td align="left" valign="middle" class="Teks_Informasi" scope="col"><img src="Gambar/informasii.jpg" alt="" width="172" height="25" /></td>
          </tr>
          <tr>
            <td align="left" valign="middle" class="Teks_Informasi" scope="col">&nbsp;</td>
          </tr>
          <tr>
            <td width="80%" align="left" valign="middle" class="Teks_Informasi" scope="col"> </td>
          </tr>
          <tr>
            <td align="left" valign="middle" class="Teks_Informasi" scope="col"></td>
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
            <th align="center" valign="top" scope="col"><a href="http://www.bankmandiri.co.id/" target="new"><img src="Gambar/mandiri.jpg" width="172" height="50" align="left" /></a><a href="https://ibank.klikbca.com/" target="new"></a></th>
          </tr>
          <tr>
            <td align="center" valign="top" class="Teks_Bank" scope="col">No . Rekening</td>
          </tr>
          <tr>
            <td align="center" valign="top" class="Teks_Bank" scope="col">125 000 253 6217 </td>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col">Rini Amira  Wedding Organizer</th>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col"><a href="http://www.bankmandiri.co.id/" target="new"><img src="Gambar/newstock.jpg" width="175" height="25" align="left" /></a></th>
          </tr>
          <tr>
            <td align="center" valign="top" class="Teks_Bank" scope="col"><a href="http://www.bankmandiri.co.id/" target="new"></a></td>
          </tr>
          <tr>
            <td align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col"><img src="sidebar/6.jpg" width="172" height="200" align="left" /></th>
          </tr>
          <tr>
            <td align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top" class="Teks_Bank" scope="col"><img src="Gambar_Slider/slider2.jpg" width="172" height="175" /></td>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col"><img src="sidebar/IMG-20170312-WA0038.jpg" width="172" height="200" align="left" /></th>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col"><img src="sidebar/7.jpg" width="172" height="200" /></th>
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
    <td colspan="3"><img src="Gambar/FooterNEW.png" width="1128" height="86" /></td>
  </tr>
</table>

<map name="Map" id="Map">
  <area shape="rect" coords="1039,6,1120,22" href="pcontact.php" target="_self" />
  <area shape="rect" coords="535,4,753,20" href="pbusana.php" target="_self" />
  <area shape="rect" coords="294,5,489,20" href="ppg.php" target="_self" />
  <area shape="rect" coords="89,6,262,21" href="ppr.php" target="_self" />
  <area shape="rect" coords="8,8,59,21" href="index.php" target="_self" />
  <area shape="rect" coords="798,5,997,22" href="nyewaalat.php" target="_self" />
</map>
</body>
</html>