<?php
session_start();
if(isset($_SESSION['status']))
{
	$desig=$_SESSION['name'];
	$pname=$_POST['p_name'];
	$qnt=$_POST['qnt'];
	$date = date('FORMAT');
	$current_date =  date('Y-m-d');
	$sts='Processing';
	$con = new mysqli('localhost', 'id7628228_root', 'rootroot', 'id7628228_ampere'); 
	$query = mysqli_query($con,"select * from name where name='$desig' and pname='$pname'");
	$rows=mysqli_num_rows($query);
		if($rows>=1)
			{
				$val = 0;

				$val = $val + ($amt * $qnt) ; 
				mysqli_query($con,"UPDATE name SET qnt='$qnt' WHERE name='$desig' and pname='$pname'");
				header("location:hardware_parts.php");
			}
		else
			{
				mysqli_query($con,"INSERT INTO name  VALUES ('$desig','$pname','$qnt','$current_date','$sts');");
				header("location:hardware_parts.php");
 			}
}
else
{
 	header("location:login_in.php");
}
?>
