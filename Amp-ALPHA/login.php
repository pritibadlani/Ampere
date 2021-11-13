<?php
	

$con=mysqli_connect('localhost', 'root', '');
$my=new mysqli('localhost', 'root', '','ampere');



$db=mysqli_select_db($con,"ampere");
if(isset($_SESSION['status'])){
	session_destroy();
}
else{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query = mysqli_query($con,"select * from userinfo where email='$username' and pass='$password'");
	$rows=mysqli_num_rows($query);
	if($rows == 1){
		session_start();

		$em = mysqli_query($con,"select email from userinfo where email='$username' and pass='$password'");
		$qu=("select email from userinfo where email='$username' and pass='$password'");
		$res=$my->query($qu);
		$row=$res->fetch_array(MYSQLI_NUM);
		$_SESSION['name']=$row[0];
		$result = $em->fetch_assoc();
		
		$_SESSION['status']=1;
		
		$_SESSION["result"] = 'Logout';
		
		echo 0;	
	}
	else
		{
		 echo 'incorrect';}
		}
	
?>

