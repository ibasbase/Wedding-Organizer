<form id="form1" name="form1" method="post" action="admin_ubah_proses.php">
  <table width="500" border="0" align="left">
    <tr>
      <td width="22%" align="left" valign="top">Username </td>
      <td width="2%" align="left" valign="top">:</td>
      <td width="76%" align="left" valign="top"><label>
        <input name="usertxt" type="text" value="<?php echo $_GET['user'] ?>" id="usertxt" />
      </label>
        </span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Password Lama</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label></label>
        <label></label>
        <label>
          <input name="pswlamatxt" type="password" id="pswlamatxt" maxlength="10" />
        </label></td>
    </tr>
    <tr>
      <td align="left" valign="top">Password Baru</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><label for="pswbarutxt"></label>
      <input name="pswbarutxt" type="password" id="pswbarutxt" maxlength="10" />
      &nbsp;<span class="Font_Info_Psw">*Maksimal 10 karakter</span></span></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><label>
        <input type="submit" name="Submit" value="Ubah" />
      </label>
        </span></td>
    </tr>
  </table>
</form>
