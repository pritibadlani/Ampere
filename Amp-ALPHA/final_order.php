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
<meta name="viewport" content="width=device-width, initial-scale=1">
<script >
      function contact_us_validate()
      {
      
         if( document.contact_us_form.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.contact_us_form.name.focus() ;
            return false;
         }
         
         if( document.contact_us_form.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.contact_us_form.email.focus() ;
            return false;
         }
         
         if( document.contact_us_form.phone.value == "" ||
         isNaN( document.contact_us_form.phone.value ) ||
         document.contact_us_form.phone.value.length<10 ||
         document.contact_us_form.phone.value.length>10 )
         {
            alert( "Please enter correct mobile number" );
            document.contact_us_form.phone.focus() ;
            return false;
         }
         
         if( document.contact_us_form.query.value.length<10 )
         {
            alert( "Please mention your query in detail" );
            return false;
         }
         return( true );
      }
   //-->
</script>

<script type="text/javascript">
   <!--
      function validateEmail()
      {
         var emailID = document.contact_us_form.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID")
            document.contact_us_form.email.focus() ;
            return false;
         }
         return( true );
      }
   //-->
</script>
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
   <li><a  class="con" id="bottom-pad">Contact Us</a>
    <div id="myModal_con" class="modal_con">  
  <div class="modal-content_con">
    <span class="close_con">&times;</span>
    <div>
      <p id="signinpara">Contact Us</p>
      <form name="contact_us_form" style="text-align:center" action="/action_page.php" onsubmit="contact_us_validate();validateEmail();">
      <div id="div3">
      <input id="name" name="name" placeholder="Name" type="text" autocomplete="off" >
      <br>
      <br>
      <input id="email" name="email" placeholder="Email" type="text"autocomplete="off" >
      <br>
      <br>
      <input id="phone" name="phone" placeholder="Phone number" type="text" autocomplete="off">
      <br>
      <br>
      <textarea autocomplete="off" name="query" placeholder="Your queries...." style="width: 100%;height:100px;border-radius: 10px;"></textarea>
      <br>
      <br>
      <button class="buttonsignin buttonsign">SIGN IN
        </button>
      </div>
      </form>
  </div>
</div></div>
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


        <p>Product : <?php echo $row["pname"]; ?></p>
        <p>Quantity : <?php echo $row["qnt"]; ?></p>
        <p>Date : <?php echo $row["ts"]; ?></p>
        <p>Status : <?php echo $row["sts"]; ?></p>
         <p>Total Cost : <?php echo $row["price"]; ?></p>
        <p>-----------------------------</p>
    


  <?php } }else{ ?>
        
       
});
</script>
        <?php } ?>
</div>
<div style="text-align: center; width: 30%;margin-left: auto;margin-right: auto;">
  <p><strong>Address:    
        <?php
        //get rows query
      $name=$_SESSION['name'];
        $query = $db->query("SELECT address FROM userinfo where email='$name';");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>

         
   <?php echo $row["address"]; ?></strong></p>

  <?php } }else{ ?>
        
        <?php } ?>
        <p style="text-align: center">Payment:COD</p>
        <p style="text-align: center">You will receive your  order soon</p>
</div>
</div>




   </div>

<!--FOOTEREND-->
 <script>
 var modal_con=document.getElementById('myModal_con');
 var btn_con = document.getElementsByClassName("con")[0];
 var span_con = document.getElementsByClassName("close_con")[0];
 btn_con.onclick = function() {
    modal_con.style.display = "block";
}
span_con.onclick = function() {
    modal_con.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal_con) {
        modal_con.style.display = "none";
    }
}

</script>
</body>
</html>