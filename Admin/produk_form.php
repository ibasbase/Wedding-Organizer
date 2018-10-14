<form id="form1" name="form1" method="post" action="produk_tambah.php">
  <table width="400" border="0" align="left">
    <tr>
      <td width="10%" align="left" valign="top">Nama </td>
      <td width="1%" align="left" valign="top">:</td>
      <td width="89%" align="left" valign="top"><label>
        <input name="namatxt" type="text" id="namatxt" />
      </label>
        </span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Deskripsi</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label></label>
        <label></label>
        <label>
          <textarea name="destxt" cols="25" rows="3" id="destxt"></textarea>
        </label></td>
    </tr>
    <tr>
      <td align="left" valign="top">Warna</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="wrntxt"></label>
      <input type="text" name="wrntxt" id="wrntxt" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Ukuran</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="ukrtxt"></label>
      <input type="text" name="ukrtxt" id="ukrtxt" /></td>
    </tr>

  
    <tr>
      <td align="left" valign="top">Kategori</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="ktgtxt"></label>
        <label for="ktglist"></label>
        <select name="ktglist" size="1" id="ktglist">
            
      <?php
  require ("config.php");
  $perintah="select * from kategoritbl order by kategori asc";
  $hasil=mysql_query($perintah);
  while ($data = mysql_fetch_array($hasil))
 {
  ?>
      <option value="<?php echo "$data[kategori]"; ?>"><?php echo "$data[kategori]"; }?></option>
      </select></td>
    </tr>
    <tr>
      <td align="left" valign="top">Harga</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="hrgtxt"></label>
      <input type="text" name="hrgtxt" id="hrgtxt" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Stock</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="stktxt"></label>
      <input type="text" name="stktxt" id="stktxt" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">Gambar</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="gbrtxt"></label>
      <input type="text" name="gbrtxt" id="gbrtxt" /></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top">&nbsp;</td>
      <td align="left" valign="top"><p>* Untuk gambar baik dengan ukuran 100 x 125 Pixels<br />
      * Ketik nama gambar beserta format, contoh : B001.png</p></td>
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
        <input type="submit" name="Submit" value="Simpan" />
      </label>
        <label>
          <input type="reset" name="Submit2" value="Batal" />
        </label>
        </span></td>
    </tr>
  </table>
</form>
