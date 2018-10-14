<style type="text/css">
.teks_info_produk {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color:#FFF;
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
$id = $_GET['id'];
	$query = "select * from barangtbl where id = '".$id."'";
	$hasil = mysql_query($query);
	$temukan = mysql_num_rows($hasil);
	$data = mysql_fetch_array($hasil);
	if($temukan==0){
	}else{
?>

<table border=0px cellpadding='10' cellspacing="2" bgcolor="" bordercolor="" align="center">
	<tr>
        
<td align=center>			 
	<div class ="teks_info_produk">
    	<?php echo $data['nama']; ?><br><br>
        <?php echo $data['ukuran']; ?><br><br>
        <?php echo $data['warna']; ?><br><br>
    </div>
    
    <div>
	<img width='200px' height='225px' valign='top' border='1,5' src="produk/<?php echo $data['gambar']; ?>"><br><br>
	</div>		
    
    <div class ="teks_info_produk">
    	<?php echo $data['deskripsi']; ?><br><br>
    </div> 
	
   

    <div>
        <?php
		echo '
	<a href="produk_beli.php?id='.$data['id'].'"><img src=""\ title="" border="0" width=\"50\" height=\"30\"></a>';
		?>
	</div>
     <hr />
     
<?php
	}
?>
</td>    
</tr>
</table>
    