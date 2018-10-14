  <?php
  require ("config.php");
  $perintah="select * from newstbl where judul='".$_GET['judul']."'";
  $hasil=mysql_query($perintah);
  $data=mysql_fetch_array($hasil);
  $tampil_berita=str_replace("<br>","\r\n",$data['news']);
  $jdl = $data['judul']
  ?>
  
<form id="form1" name="form1" method="post" action="news_ubah_proses.php">
  <table width="400" border="0" align="left">
    <tr>
      <td align="left" valign="top">Tanggal</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="tgltxt"></label>
      <input name="tgltxt" type="text" id="tgltxt" value="<?php echo $data['tanggal'] ?>" readonly="readonly" />
      <input type="hidden" name="judulhidetxt" id="judulhidetxt" value="<?php echo $data['judul'] ?>" /></td>
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
      <td align="left" valign="top">Berita</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label></label>
        <label></label>
        <label>
          <textarea name="beritatxt" cols="35" rows="4" id="beritatxt"/><?php echo "$tampil_berita" ?></textarea>
      </label></td>
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
