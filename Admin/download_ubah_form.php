  <?php
  require ("config.php");
  $perintah="select * from downloadtbl where id='".$_GET['id']."'";
  $hasil=mysql_query($perintah);
  $data=mysql_fetch_array($hasil);
  $tampil_deskripsi=str_replace("<br>","\r\n",$data['deskripsi']);
  ?>
  
<form id="form1" name="form1" method="post" action="download_ubah_proses.php">
  <table width="400" border="0" align="left">
    <tr>
      <td align="left" valign="top">ID</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="idtxt"></label>
      <input name="idtxt" type="text" id="idtxt" value="<?php echo $data['id'] ?>" readonly="readonly" />
      </td>
    </tr>
    <tr>
      <td width="10%" align="left" valign="top">Judul</td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="89%" align="left" valign="top"><label>
        <input name="judultxt" type="text" id="judultxt" value="<?php echo $data['judul'] ?>" />
      </label>
        </span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Deskripsi</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label></label>
        <label></label>
        <label>
          <textarea name="deskripsitxt" cols="35" rows="4" id="deskripsitxt"/><?php echo "$tampil_deskripsi" ?></textarea>
      </label></td>
    </tr>
    <tr>
      <td align="left" valign="top">Url</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="urltxt"></label>
      <input type="text" name="urltxt" id="urltxt" value="<?php echo $data['url'] ?>"/></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><hr /></td>
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
