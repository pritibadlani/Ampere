<?php
session_start();
include 'dbConfig.php'  ;
?>

<!DOCTYPE html>
<html>
<head>
<title>AMPERE</title>
<link rel="icon" 
      type="image/png" 
      href="img/fav.jpg">
<link href="css/cart.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type='text/javascript' src='http://code.jquery.com/jquery.min.js'></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script>
function call() {
    var x = document.getElementById("myCheck").value;
    alert(x);
}
</script>

</head>
<body >
<!--NAVBAR-->
<div class="navbar" style="overflow:hidden;position: fixed;top: 0;width: 100%;z-index:10;" >
<ul class="topnav sizehover" id="myTopnav">
<a href="main.php"><img id="logo-img" src="img/logo.jpg"></a>
   <li>        
   <a href="cart.php"><img src="img/cart.jpg"></a>
  
  </li>
   
  <li><a class="sign" href="login_in.php"id="bottom-pad">
    <?php
        if(isset($_SESSION['status'])){
          
           echo "<?php <a href='#'>".$_SESSION["result"]."</a> ?>";
        }
        else{
          echo "<?php <a href='#'>Login</a> ?>";
        }
        ?>
          
        </a>
</li>
  <li><a id="bottom-pad"href=hardware_parts.php" class="font-a">Hardware Parts</a></li>
  <li>  <a id="bottom-pad"href="home_app.php">Home Appliances</a> </li>
  <li>  <a id="bottom-pad"href="gaming.php">Gaming Parts</a></li>
   <li class="icon">
    <a id="bottom-pad-1" href="javascript:void(0);"  onclick="myFunction()">MENU</a>
  </li>
</ul>
</div>

<!--CATEGORY-->
<div class="table_style">

    <form method="POST" action="delete.php">  
        <?php
        //get rows query
      $name=$_SESSION['name'];
        $query = $db->query("SELECT * FROM name where name='$name'");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>


        <p>Products : <input type="checkbox" id="checkme" name='lang[]' value="<?php echo $row["pname"]; ?>"><?php echo $row["pname"]; ?></p>
        <p>Quantity : <?php echo $row["qnt"]; ?></p>
        <p>Date : <?php echo $row["ts"]; ?></p>
        <p>Status : <?php echo $row["sts"]; ?></p>
         <p>Total Cost : <?php echo $row["price"]; ?></p>
        <p>-----------------------------</p>
    


  <?php } }else{ ?>
        <p style="text-align: center;">Add Products to your cart....</p>
        <script>
          $(document).ready(function(){
          $(".disab").remove();
          $(".removenote").remove();
       
});
</script>
        <?php } ?>
<p style="text-align: center;">
<button  class="disab" type="submit" value="Submit" name="submit" ><img width='15' height='15'src="img/del.png"></button>
</p>
<form>
  <p style="text-align: center;">
<input style="margin-left: auto;margin-right: auto"  type="button" value="Place Order" class="disab" onclick="window.location.href='checkout.php'" /></p>
<h4 style="text-align: center;" class="removenote">NOTE:To remove item from the cart please check the item and delete</h4>
</form><script>
var checker=document.getElementById('checkme');
var send=document.getElementById('disab');
checker.onchange=function(){

  if(this.checked){
    send.disabled=false;
  }
  else{
    send.disabled=true;
  }
}

</script>
</div>


</form>
</div>
        <script type="text/javascript">
function myFunction(){
 document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
</script>

<!--FOOTEREND-->

</body>
</html>