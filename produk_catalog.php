<style type="text/css">
.teks_nama_produk {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000000;
}
.teks_harga_produk {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #990000;
	font-weight: bold;
}
</style>

<?php

include("config.php");

	$query = "select * from barangtbl order by id desc";
	$hasil = mysql_query($query);
	$numrows = mysql_num_rows($hasil);
	
	//Paging Data sebanyak 30 data product perlembar
	$jumlah = mysql_num_rows($hasil);
	$limit = 30;
	if (empty($offset)) {
		$offset = 0;
	}
		if(isset($_GET['offset'])){$offset = $_GET['offset']; }
		$seleksi = "SELECT * FROM barangtbl ORDER BY id DESC LIMIT $offset, $limit";
		$result = mysql_query($seleksi);

		echo "<div align=\"right\">";
		$halaman = intval($jumlah/$limit);
		if ($jumlah%$limit) { 
			$halaman++; 
		} 
			for ($i=1;$i<=$halaman;$i++) {
				$newoffset=$limit*($i-1); 
					if ($offset!=$newoffset)
						{ 
						echo "<b><font face=\"arial\" size=\"2\">[<a style=\"color: black\" 	href=\"produk.php?offset=$newoffset\">$i</a>]</font></B>";
					} else { 
						echo "<b><font face=\"arial\" size=\"3\" color=\"red\">[$i]</font></b>"; 
					} 
			}
						echo "</div>";
	    //Batas kode paging data
?>



<table border=0px cellpadding='10' cellspacing="2" bgcolor="" bordercolor="" align="left">
	<tr>
     
<?php
	$kolom=3;
	$x = 0;
	if($numrows > 0){
	while($data=mysql_fetch_array($result))
		{
		    if ($x >= $kolom) 
			    {
			      echo "</tr><tr>";
			      $x = 0;
				}
	$x++;
?>

<td align=center>			 
	<div class ="teks_nama_produk">
    	<?php echo $data['nama']; ?><br><br>
    </div>
    
    <div>
		<img width='80px' height='105px' valign='top' border='1,5' src="produk/<?php echo $data['gambar']; ?>"><br><br>
	</div>		 
	
    <div class ="teks_harga_produk">
        <?php $hargarp = $data['harga'] ?>
        <?php echo "Rp " .number_format($hargarp, 0, ',', '.').",-" ?><br><br>
    </div>

    <div>
        <?php
		echo '
	<a href="produk_beli.php?id='.$data['id'].'"><img src="Gambar/TBeli.jpg"\ title="Beli Sekarang" border="0" width=\"50\" height=\"30\"></a><a href="produk_detail.php?id='.$data['id'].'"><img src="Gambar/TDetail.jpg"\ title="Detail Barang" border="0" width=\"50\" height=\"30\"></a>';
		?>
	</div>
        <hr />	
</td>
            
<?php
	}
	}
?>

</tr>
</table>
    