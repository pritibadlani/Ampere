<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>AMPERE</title>
<link rel="icon" 
      type="image/png" 
      href="img/fav.jpg">
<link href="css/home_appliance.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
</head>


<body >
<!--NAVBAR-->
<div class="navbar" style="overflow:hidden;position: fixed;top: 0;width: 100%;z-index:10;" >
<ul class="topnav sizehover" id="myTopnav">
<a href="main.php"><img id="logo-img" src="img/logo.jpg"></a>
   <li>        
   <a href="sesscheck.php"><img src="img/cart.jpg"></a>
  
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

<li class="up"><a  href='signup.php' class="up" id="bottom-pad">
  <?php
        if(isset($_SESSION['status']))
        {
          echo '<script type="text/javascript">',
              '$(".up").remove();',
                '</script>'; 
        }
        else
        {
          echo "<?php <a >Signup</a> ?>";
        }
        ?>
          
        </a>
  
</li>
  
  <li><a id="bottom-pad" href="hardware_parts.php" class="font-a">Hardware Parts</a></li>
  <li>  <a id="bottom-pad"href="home_app.php">Home Appliances</a> </li>
  <li>  <a id="bottom-pad"href="gaming.php">Gaming Parts</a></li>
  

   <li class="icon">
    <a id="bottom-pad-1" href="javascript:void(0);"  onclick="myFunction()">MENU</a>
  </li>
</ul>
</div>
<script type="text/javascript">
  function myFunction(){
 document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
</script>
<!--NAVEND-->

   <video  id="videonvidia" autoplay style="width: 100%;height: 10%;" loop>
  <source src="video/lg_video.mp4" type="video/mp4" >
</video>


<br>
<!--RTX-->
<!--<div class="parallax1"></div>-->


<div >
  <form action="addtocart.php" method="POST">
    <ul style="display:grid;grid-template-columns: repeat(auto-fit, minmax(200px, 5fr));grid-gap: 15px;">
      <li style="list-style-type:none; padding: 0px;font-size: 14px;padding: 20px;"><img id="img1" src="img/lg.jpg" width="700">
     </li>
      <li id="font1" style="list-style-type:none;background-color:#fff;border-radius: 3px padding: 20px; ">
        <h1 id="font2" >LG Signature Oled</h1> <br> <br> 
      <input name="qnt" type="number" placeholder="Quantity" autocomplete="off" min="1" max="5" value="1"> 
      <input name="p_name" value="LG Signature Oled" type="hidden">
      
         <input name="price" value="500" type="hidden">
      
        <button >Add to Cart</button>
        <p style="font-size: 24px"> Price : $500 </p>
    </li>
    </ul>
  </form>
</div>


 <div >
  <form action="addtocart.php" method="POST">
    <ul style="display:grid;grid-template-columns: repeat(auto-fit, minmax(200px, 5fr));grid-gap: 15px;">
      <li id="font1" style="list-style-type:none;background-color:#fff;border-radius: 3px padding: 20px; "><h1 id="font2" >Godrej ENO</h1> <br> <br> 
      <input name="qnt" type="number" placeholder="Quantity" autocomplete="off" min="1" max="5" value="1"> 
      <input name="p_name" value="Godrej ENO"  type="hidden">

        <input name="price" value="600" type="hidden">
      
        <button >Add to Cart</button>
        <p style="font-size: 24px"> Price : $600 </p>
    
    </li>
      <li style="list-style-type:none; padding: 0px;font-size: 14px;padding: 20px;"><img id="img1" src="img/godrej.jpeg" width="700">
     </li>
      
 
    </ul>
  </form>
</div>

  

<div >
  <form action="addtocart.php" method="POST">
    <ul style="display:grid;grid-template-columns: repeat(auto-fit, minmax(200px, 5fr));grid-gap: 15px;">
      <li style="list-style-type:none; padding: 0px;font-size: 14px;padding: 20px;"><img id="img1" src="img/speakers.jpg" width="700">
     </li>
      <li id="font1" style="list-style-type:none;background-color:#fff;border-radius: 3px padding: 20px; ">
        <h1 id="font2" >Klipsch Speakers</h1> <br> <br> 
      <input name="qnt" type="number" placeholder="Quantity" autocomplete="off" min="1" max="5" value="1"> 
      <input name="p_name" value="Klipsch Speakers" type="hidden">
       <input name="price" value="300" type="hidden">
      
        <button >Add to Cart</button>
        <p style="font-size: 24px"> Price : $300 </p>
    </li>
    </ul>
  </form>
</div>


<!--CABIN-->
<!--<div class="parallax2"></div>-->



<!--!44-->


<!--CATEGORY-->


<!--CATEGORY-END-->

<!--ABOUT-US-->

<!--ABOUT_US_END-->
<div class="footer" style="width: 100%">
      <div style="width: 30%;float:left;margin-left:auto;margin-right: auto;">
      <p ><h6 id="footertext1">221-B, Baker Street<br><br> Los Angeles </p>
    </div>
    <div style="width: 30%;float:right;margin-left:auto;margin-right: auto;">
     <p ><h6 id="footertext1">Copyright<br><br>2014-2018</p>
    </div>
    <div style="width: 40%;margin-left:auto;margin-right: auto;">
      <p><h1 style="color:white" id="footertext13">AMPERE</h1>
      </p>
      <p style="color:white">info@ampere.com</p>
      <p style="color:white">Customer Care: 1800-230-2300</p>
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
<!--signin_script-->



</body>
</html>
