<?php
session_start();
$name=$_SESSION['name'];
$con = new mysqli('localhost', 'root', '', 'ampere'); 
if(isset($_POST['submit'])){

    if(!empty($_POST['lang'])) {

        foreach($_POST['lang'] as $value){
        	mysqli_query($con,"DELETE FROM name WHERE name='$name' and pname='$value'");        	
        }
        header("Location:cart.php");
    }
    else{
    	header("Location:cart.php");
    }

}
else{
	header("Location:cart.php");
}
?>