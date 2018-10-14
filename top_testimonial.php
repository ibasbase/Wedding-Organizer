<?php
require("config.php");
$cek="Select * from testimonialtbl order by id desc LIMIT 0,6";
$hasil=mysql_query($cek);
while($data=mysql_fetch_array($hasil)){
echo "<br>
<b>$data[nama]</b>, $data[tanggal]<br>
$data[testimonial]<br>";
} 
?>