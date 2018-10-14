<?php session_start();
if (ISSET($_SESSION['userlogin']))
{
	//Tidak ada event, dalam artian menghindari jump page  		
}
else
header("location:index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Maxi Boutique Online</title>

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
	font-size: 13px;
}

.Teks_Produk {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	color: #0096C3;
}

.Area_Keranjang {
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
	background-image: url(Gambar/Background.gif);
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
    <th colspan="2" align="right" valign="middle" bgcolor="#F8FBE6" class="Teks_Menu_Atas" scope="col">
      <table width="95%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th align="right" valign="middle" scope="col">
            <a href="logout.php" target="_self">logout</a> | selamat datang saudara/i
            <?php include("user.php") ?>
            &nbsp;
          </th>
        </tr>
      </table>
</th>
  </tr>
  <tr>
    <td colspan="3"><img src="Gambar/Header.png" width="800" height="214" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="Gambar/Menu Tengah.jpg" width="800" height="25" usemap="#Map" border="0" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E8EED7"><div class="Area_Menu_Kiri">
      <form id="form1" name="form1" method="post" action="login.php">
        <table width="100%" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
              <tr>
                <th align="left" valign="top" scope="col"><img src="Gambar/Menu Kiri Kategori.jpg" alt="" width="175" height="25" /></th>
                </tr>
              <tr>
                <th align="left" valign="top" class="Teks_Kategori" scope="col"><?php include "kategori.php"; ?></th>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
              <tr>
                <th align="left" valign="top" scope="col"><img src="Gambar/Menu Kiri News.jpg" alt="" width="175" height="25" /></th>
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
                <th align="left" valign="top" scope="col"><img src="Gambar/Menu Kiri Tertimonial.jpg" alt="" width="175" height="25" /></th>
              </tr>
              <tr>
                <td align="left" valign="top" class="Teks_Testimonial" scope="col"><?php include "top_testimonial.php"; ?>
                  <br />
                  <br />
                  <div><a href="testimonial.php">>> isi testimonial</a><br />
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
    <th width="400" align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="Area_Keranjang">
      <tr>
        <th width="25" align="left" valign="top" class="Teks_Produk" scope="col"><img src="Gambar/Kantong Belanja.jpg" alt="" width="25" height="24" /></th>
        <th width="350" align="left" valign="middle" class="Teks_Produk" scope="col">&nbsp;Keranjang Belanja</th>
      </tr>
      <tr>
        <th colspan="2" align="left" valign="top" class="Teks_Produk" scope="col"><hr /></th>
      </tr>
      <tr>
        <th colspan="2" align="center" valign="top" class="Teks_Menu_Atas" scope="col"><?php include "keranjang_belanja_data.php" ?></th>
      </tr>
      <tr>
        <th colspan="2" align="center" valign="top" class="Teks_Menu_Atas" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top" class="Teks_Menu_Atas" scope="col">Kami Melayani Anda Berbelanja Online Dengan Nyaman Dan Aman <br />
Maxi Boutique -  Muhammad Sadeli</td>
      </tr>
      <tr>
        <th colspan="2" align="center" valign="top" class="Teks_Produk" scope="col">&nbsp;</th>
      </tr>
      
    </table></th>
    <td width="200" align="left" valign="top" bgcolor="#E8EED7"><div class="Area_Menu_Kanan">
        <table width="100%" border="0" cellspacing="2" cellpadding="0">
          <tr>
            <th width="13%" align="left" valign="top" scope="col"><img src="Gambar/Kantong Belanja.png" width="25" height="25" /></th>
            <td width="87%" align="left" valign="middle" class="Teks_Menu" scope="col">Keranjang Belanja <?php include "jumlah.php"; ?></td>
          </tr>
          <tr>
            <th align="left" valign="top" scope="col">&nbsp;</th>
            <th align="left" valign="top" scope="col"><hr /></th>
          </tr>
          <tr>
            <th colspan="2" align="center" valign="top" scope="col"><div class="Area_Menu_Keranjang"><?php include "keranjang_belanja_memo.php"; ?></div></th>
          </tr>
          <tr>
            <th colspan="2" align="left" valign="top" class="Teks_Keranjang" scope="col"><div class="Area_Menu_Keranjang_Total"><hr /></div></th>
          </tr>
          <tr>
            <th colspan="2" align="left" valign="top" class="Teks_Keranjang" scope="col"><div class="Area_Menu_Keranjang_Total"><?php include "total.php"; ?></div>&nbsp;</th>
          </tr>
          <tr>
            <th colspan="2" align="left" valign="top" scope="col"><img src="Gambar/Menu Kanan Best Seller.jpg" width="175" height="25" /></th>
          </tr>
          <tr>
            <th colspan="2" align="center" valign="top" scope="col"><?php include "bestseller.php"; ?></th>
          </tr>
          <tr>
            <th colspan="2" align="left" valign="top" scope="col"><img src="Gambar/Menu Kanan Informasi.jpg" width="175" height="25" /></th>
          </tr>
          <tr>
            <th align="left" valign="top" scope="col">&nbsp;</th>
            <td align="left" valign="middle" class="Teks_Informasi" scope="col"><?php include "visitor.php"; ?></td>
          </tr>
          <tr>
            <th align="left" valign="top" scope="col">&nbsp;</th>
            <td align="left" valign="middle" class="Teks_Informasi" scope="col"><?php include "counter.php"; ?>&nbsp;</td>
          </tr>
          <tr>
            <th align="center" valign="top" scope="col">&nbsp;</th>
            <td align="left" valign="top" class="Teks_Informasi" scope="col">CS Online : 0812 345 678<br />
              pin BB : 4KH454D311           <br /></td>
          </tr>
          <tr>
            <th colspan="2" align="center" valign="top" scope="col"><?php include "yahoo.php"; ?>&nbsp;</th>
          </tr>
          <tr>
            <th colspan="2" align="left" valign="top" scope="col"><img src="Gambar/Menu Kanan Pembayaran.jpg" alt="" width="175" height="25" /></th>
          </tr>
          <tr>
            <th align="center" valign="top" scope="col">&nbsp;</th>
            <th align="center" valign="top" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="2" align="center" valign="top" scope="col"><a href="https://ibank.klikbca.com/" target="new"><img src="Gambar/bca.jpg" alt="" width="150" height="50" /></a></th>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">1150325788</td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">Maxi Boutique</td>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="2" align="center" valign="top" class="Teks_Bank" scope="col"><a href="http://www.bankmandiri.co.id/" target="new"><img src="Gambar/mandiri.jpg" width="150" height="50" /></a></th>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">by request</td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">Maxi Boutique</td>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
          </tr>
          <tr>
            <th colspan="2" align="center" valign="top" class="Teks_Bank" scope="col"><a href="https://www.cimbclicks.co.id/ib-cimbniaga/Login.html" target="new"><img src="Gambar/CIMBNiaga.png" alt="" width="150" height="50" /></a></th>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">by request</td>
          </tr>
          <tr>
            <td colspan="2" align="center" valign="top" class="Teks_Bank" scope="col">Maxi Boutique</td>
          </tr>
          <tr>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
            <th align="center" valign="top" class="Teks_Bank" scope="col">&nbsp;</th>
          </tr>
        </table>
    </div></td>
  </tr>
  <tr>
    <td colspan="3"><img src="Gambar/Footer.png" width="800" height="86" /></td>
  </tr>
</table>

<map name="Map" id="Map">
  <area shape="rect" coords="128,6,168,21" href="home.php" target="_self" />
  <area shape="rect" coords="201,7,252,21" href="produk.php" target="_self" />
  <area shape="rect" coords="288,8,357,20" href="caraorder.php" target="_self" />
  <area shape="rect" coords="394,7,455,20" href="download.php" target="_self" />
  <area shape="rect" coords="495,7,549,21" href="about.php" target="_self" />
  <area shape="rect" coords="573,4,649,20" href="contact.php" target="_self" />
</map>
</body>
</html>