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
	$amt=$_POST['price'];

	
	$con = new mysqli('localhost', 'root', '', 'ampere'); 
	$query = mysqli_query($con,"select * from name where name='$desig' and pname='$pname'");
	$rows=mysqli_num_rows($query);

		if($rows>=1)
			{
				$val = 0;

				$val = $val + ($amt * $qnt) ; 
				
				mysqli_query($con,"UPDATE name SET qnt='$qnt',price='$val' WHERE name='$desig' and pname='$pname'");
				 
                mysqli_query($con,"CREATE EVENT reset  ON name
      				EVERY 1 Hour DO update name
					set sts='P' 
					where ts < date_sub($current_date,date_interval_create_from_date_string('1 minute')) 
  						;"
						);
				
				
				header("location:cart.php");
			}
		else
			{
				
				mysqli_query($con,"INSERT INTO name  VALUES ('$desig','$pname','$qnt','$current_date','$sts','$amt');");

				$val = 0;

				$val = $val + ($amt * $qnt) ; 
				
				mysqli_query($con,"UPDATE name SET qnt='$qnt',price='$val' WHERE name='$desig' and pname='$pname'");
				
				header("location:cart.php");
				
				
 			}
}
else
{
 	header("location:login_in.php");
}
?>
