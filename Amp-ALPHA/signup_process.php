<?php
	$username=$_POST["name"];
	$add=$_POST["address"];
	$phone=$_POST["phone"];
	$email=$_POST["e_mail"];
	$password=$_POST['pass_word'];
$con=mysqli_connect('localhost', 'id7628228_root', 'rootroot');
$db=mysqli_select_db($con,"id7628228_ampere");
$query = mysqli_query($con,"select * from userinfo where email='$email'");
$rows=mysqli_num_rows($query);
if($rows==1){
		header("Location:login_in.php");
	}
	else{
mysqli_query($con,"INSERT INTO userinfo  VALUES ('$username', '$add', '$phone', '$email', '$password');");
	
	sleep(2);
	header("Location:login_in.php");
}
?>

