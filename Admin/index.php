<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
header("location:home.php"); 		
}
else
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Maxi Boutique</title>

<style type="text/css">
.Menu_Kiri {
	width: 100px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 16px;
	margin-top: 10px;
	margin-bottom: 10px;
}
.Menu_Tengah {
	width: 300px;
	margin-top: 10px;
	margin-left: 10px;
	margin-bottom: 10px;
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Menu_Login {
	margin-top: 125px;
}
body {
	background-image: url(../Gambar/Background.gif);
}
</style>

</head>

<body>
<div align="justify" class="Menu_Login">
  <table width="535" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
      <td colspan="2" align="center" valign="top"><img src="../Gambar/FooterNEW.png" width="535" height="86" /></td>
    </tr>
    <tr>
      <td width="164" align="center" valign="middle"><div class="Menu_Kiri"><img src="../Gambar/Login.gif" width="48" height="48" /></div></td>
      <td width="371" align="left" valign="top"><div class="Menu_Tengah">
        <form id="form1" name="form1" method="post" action="login.php">
          <table width="400" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="85">User Name</td>
              <td width="10">:</td>
              <td width="305"><label for="usertxt"></label>
                <input type="text" name="usertxt" id="usertxt" /></td>
              </tr>
            <tr>
              <td>Password</td>
              <td>:</td>
              <td><label for="pswtxt"></label>
                <input type="password" name="pswtxt" id="pswtxt" /></td>
              </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><input type="submit" name="logbtn" id="logbtn" value="Login" /></td>
              </tr>
            </table>
          </form>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="top"><img src="../Gambar/FooterNEW.png" width="535" height="86" /></td>
    </tr>
  </table>
</div>
</body>
</html>