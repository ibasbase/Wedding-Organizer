<?php
include("config.php");
$valid_nama= "/^[a-z]+[.,a-z ]+$/";
$valid_mail = "/^([._a-z0-9-]+[._a-z0-9-]*)@(([a-z0-9-]+\.)*([a-z0-9-]+)(\.[a-z]{2,3}))$/";
$tanggal=date("Ymd");
$nama = $_POST['namatxt'];
$email = $_POST['emailtxt'];
$testi_tag = $_POST['testitxt'];
$testimonial = nl2br($testi_tag);
if (!preg_match($valid_mail, $email) || !preg_match($valid_nama, $nama) || empty($testimonial)){
$kesalahan=TRUE;
}
if (isset($_POST['kesalahan'])) {
if (!preg_match($valid_mail,$email)){echo "<li>Penulisan alamat E-mail Anda salah!</li>";}
if (!preg_match($valid_nama,$nama)){echo "<li>Penulisan nama Anda salah!</li>";}
if (empty($testimonial)){ echo "<li>Anda belum menuliskan <b>Testimonial Anda</b></li>"; }
} else {		
$query = "INSERT INTO testimonialtbl (nama,email,tanggal,testimonial) 
VALUES ('$nama','$email','$tanggal','$testimonial')";
$result = mysql_query($query);
if ($result) {
header("location:isitestimonial.php");	
}else{
echo"Pesan Anda tidak dapat diproses.";
}
}
?>