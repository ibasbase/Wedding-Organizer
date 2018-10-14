<?php
if (isset($visitor)){
if ($visitor=="visited")
include("counter.txt");
//membaca file text dengan nama counter.txt
} else {
$file=fopen("counter.txt","r+");
$nilai=fread($file,filesize("counter.txt"));
fclose($file);
$nilai += 1;
$file=fopen("counter.txt","w+");
fputs($file,$nilai);
fclose($file);
echo "Anda Pengunjung ke-<b>";
include("counter.txt");
//menampilkan angka pada file text
}
?>