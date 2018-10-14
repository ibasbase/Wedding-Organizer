<?php
require("config.php");
$cek="Select * from newstbl order by tanggal desc";
$hasil=mysql_query($cek);
while($data=mysql_fetch_array($hasil)){
echo "<br>
<b>$data[tanggal]</b><br>
<a href='www.google.com'>$data[news]</a><br>";
} 
?>