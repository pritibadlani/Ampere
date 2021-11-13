<?php
session_start();
if(isset($_SESSION['status'])){
header("location:cart.php");
 }
 else{
 	header("location:login_in.php");
 }


?>
