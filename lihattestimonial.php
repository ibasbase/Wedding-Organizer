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
.Area_Login {
	height: auto;
	width: 175px;
	margin-left: 6px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Area_Menu_Kiri {
	height: auto;
	width: 175px;
	margin-left: 10px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Teks_Login {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.Teks_Informasi {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 11px;
	color:#FFF;
}
.Teks_Menu {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.Teks_Kategori {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.Teks_Testimonial {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	color:#000;
}
.Teks_Testi {
	font-family:Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #0096C3;
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
.Teks_Bank {
	font-size: 13px;
	font-family: Arial, Helvetica, sans-serif;
	color:#FFF;
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
	background-color:#CC0066;
}
.Area_Testimonial {
	height: auto;
	width: 375px;
	margin-top: 10px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	color:#FFF;
}
.Teks_Bank1 {	font-family:Arial, Helvetica, sans-serif;
	font-size: 11px;
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
<table width="1059" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <th width="203" align="left" valign="top" bgcolor="#F7FAE4" scope="col"><div class="Area_Login">
    <form id="form2" name="form2" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th align="left" valign="middle" class="Teks_Login" scope="col">Search</th>
          <th align="left" valign="middle" scope="col"><label for="searchtxt"></label>
            <input name="searchtxt" type="text" id="searchtxt" size="15" /></th>
          <th align="left" valign="middle" scope="col"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','Gambar/TSearch Rollover.jpg',1)"><img src="Gambar/TSearch.jpg" width="50" height="20" id="Image11" /></a></th>
        </tr>
      </table>
    </form>
  </div></th>
  <th colspan="2" align="right" valign="middle" bgcolor="#F8FBE6" class="Teks_Menu_Atas" scope="col"> <a href="logout.php" target="_self">logout</a> | selamat datang saudara/i
    <?php include("user.php") ?>
    &nbsp;</th>
</tr>
<tr>
  <td colspan="3"><img src="header/1.jpg" width="1065" height="439" /></td>
</tr>
<tr>
  <td colspan="3"><img src="Gambar/MENU.jpg" width="1064" height="25" usemap="#Map" border="0" />
    <map name="Map" id="Map2">
      <area shape="rect" coords="973,6,1059,21" href="pcontact.php" target="_self" />
      <area shape="rect" coords="498,4,713,22" href="pbusana.php" target="_self" />
      <area shape="rect" coords="287,6,467,22" href="ppg.php" target="_self" />
      <area shape="rect" coords="73,6,252,22" href="ppr.php" target="_self" />
      <area shape="rect" coords="6,4,65,21" href="index.php" target="_self" />
      <area shape="rect" coords="747,5,945,22" href="alatpesta.php" />
    </map>
    <map name="Map" id="Map2">
      <area shape="rect" coords="778,1,896,22" href="pcontact.php" target="_self" />
      <area shape="rect" coords="523,4,772,23" href="pbusana.php" target="_self" />
      <area shape="rect" coords="297,4,503,22" href="ppg.php" target="_self" />
      <area shape="rect" coords="95,4,274,22" href="ppr.php" target="_self" />
      <area shape="rect" coords="28,3,71,20" href="home.php" target="_self" />
    </map></td>
</tr>
<tr>
  <td align="left" valign="top" bgcolor="#FF6666"><div class="Area_Login">
    <form id="form1" name="form1" method="post" action="login.php">
      <table width="100%" border="0" cellspacing="2" cellpadding="0">
        <tr>
          <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <th align="left" valign="top" scope="col">&nbsp;</th>
            </tr>
            <tr>
              <th align="left" valign="top" scope="col"><img src="Gambar/news.jpg" alt="" width="175" height="25" /></th>
            </tr>
            <tr>
              <th align="left" valign="top" scope="col"><span class="Teks_Testimonial">
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
              <td align="left" valign="top" class="Teks_Testimonial" scope="col">&nbsp;</td>
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
  <td width="651" align="center" valign="top" bgcolor="#CC3333"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="Area_Testimonial">
    <tr>
      <th align="left" valign="top" class="Teks_Testi" scope="col">Data Komentar  !!</th>
    </tr>
    <tr>
      <th align="left" valign="top" class="Teks_Testi" scope="col"><hr /></th>
    </tr>
    <tr>
      <td align="left" valign="top"><br />
        <?php include "lihattestimonialinfo.php"; ?>
</div>
</td>
</tr>
  </table>
</td>
<td width="211" align="left" valign="top" bgcolor="#FF6666"><div class="Area_Menu_Kiri">
  <table width="100%" border="0" cellspacing="2" cellpadding="0">
    <tr>
      <td width="87%" align="left" valign="middle" class="Teks_Menu" scope="col">Keranjang Belanja
        <?php include "jumlah.php"; ?></td>
    </tr>
    <tr>
      <th align="left" valign="top" class="Teks_Keranjang" scope="col"></th>
    </tr>
    <tr>
      <th align="left" valign="top" class="Teks_Keranjang" scope="col"><div class="Area_Menu_Keranjang">
        <?php include "keranjang_belanja_memo.php"; ?>
      </div></th>
    </tr>
    <tr>
      <th align="left" valign="top" scope="col" class="Area_Menu_Keranjang_Total"></th>
    </tr>
    <tr>
      <th align="left" valign="middle" class="Teks_Keranjang" scope="col"><div class="Area_Menu_Keranjang_Total"></div>
        &nbsp;</th>
    </tr>
    <tr>
      <th align="center" valign="top" scope="col">&nbsp;</th>
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
      <th align="center" valign="top" scope="col"><a href="https://ib.bankmandiri.co.id/retail/Login.do?action=form&amp;lang=in_ID" target="new"><img src="Gambar/mandiri.jpg" width="172" height="50" align="left" /></a><a href="https://ibank.klikbca.com/" target="new"></a></th>
    </tr>
    <tr>
      <th align="center" valign="top" class="Teks_Bank" scope="col"><span class="Teks_Bank1">No . Rekening</span></th>
    </tr>
    <tr>
      <th align="center" valign="top" class="Teks_Bank" scope="col"><span class="Teks_Bank1">125 000 253 6217 </span></a></th>
    </tr>
    <tr>
      <td align="center" valign="top" class="Teks_Bank" scope="col"><span class="Teks_Bank1">Rini Amira Wedding Organizer</span></td>
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
  <td colspan="3" align="center" valign="top"><img src="Gambar/FooterNEW.png" width="1065" height="86" /></td>
</tr>
</table>
<map name="Map" id="Map">
  <area shape="rect" coords="128,6,168,21" href="home.php" target="_self" />
  <area shape="rect" coords="200,7,251,21" href="produk.php" target="_self" />
  <area shape="rect" coords="288,8,357,20" href="caraorder.php" target="_self" />
  <area shape="rect" coords="394,7,455,20" href="download.php" target="_self" />
  <area shape="rect" coords="495,7,549,21" href="about.php" target="_self" />
  <area shape="rect" coords="573,4,649,20" href="contact.php" target="_top" />
</map>
</body>
</html>
