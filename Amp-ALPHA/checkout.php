<?php
session_start();
include 'dbConfig.php';
if(isset($_SESSION['status']))
{

  $name=$_SESSION['name'];
  $query = $db->query("SELECT * FROM name where name='$name';");
  if($query->num_rows > 0){ 
          header("location:final_order.php");
        }
        else{
          header("location:cart.php");
        }
      }
  
       
?>
