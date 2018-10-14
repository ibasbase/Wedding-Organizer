<?php

include("config.php");

	$query = "select * from testimonialtbl order by id desc";
	$hasil = mysql_query($query);
	$jumlah = mysql_num_rows($hasil);
	$limit = 5;
	if (empty($offset)) {
		$offset = 0;
	}
		if(isset($_GET['offset'])){$offset = $_GET['offset']; }
		$seleksi = "SELECT * FROM testimonialtbl ORDER BY id DESC LIMIT $offset, $limit";
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
						echo "<b><font face=\"arial\" size=\"2\">[<a style=\"color: black\" 	href=\"lihattestimonial.php?offset=$newoffset\">$i</a>]</font></B>";
					} else { 
						echo "<b><font face=\"arial\" size=\"3\" color=\"red\">[$i]</font></b>"; 
					} 
			}
						echo "</div>";
?>

<?php
while($data=mysql_fetch_array($result)){
echo "<br>
<b>$data[nama]</b>, $data[tanggal]<br>
$data[testimonial]<br>";
} 
?>