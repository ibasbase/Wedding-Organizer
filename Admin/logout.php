<?php session_start();
if(isset($_SESSION['adminlogin']))
  unset($_SESSION['adminlogin']);
  header("location:index.php");
?>