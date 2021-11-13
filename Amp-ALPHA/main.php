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
<link href="css/home_page1.css" rel="stylesheet" type="text/css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">



</head>


<body >
<!--NAVBAR-->
<div class="navbar" style="overflow:hidden;position: fixed;top: 0;width: 100%;z-index:10;" >
<ul class="topnav sizehover" id="myTopnav">
   <a href="main.php"><img id="logo-img" src="img/logo.jpg"></a>
   <li>        
   <a href="sesscheck.php"><img src="img/cart.jpg"></a>
  
  </li>
   <li>  <a id="bottom-pad"href="contact_us.php">Contact Us</a> </li>

  <li><a class="sign" href="login_in.php"id="bottom-pad">
    <?php
        if(isset($_SESSION['status'])){
          
           echo "<?php <a href='#'> ".$_SESSION["result"]."</a>?>";
        }
        else{
          echo "<?php <a href='#'>Login</a>?>";
        }
        ?></a>


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

<!--NAVEND-->

<!--SLIDE-SHOW-->

<div id="slideshowid" style="margin-right:auto;margin-left:auto;">
  <img class="mySlides" src="img/ps4.png" style="width:100%">
  <img class="mySlides" src="img/hard.jpg" style="width:100%">
  <img class="mySlides" src="img/ha.jpg" style="width:100%">

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
function myFunction(){
 document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
 


</script>
<!--SLIDE-SHOW-END-->


<!--CATEGORY-->
<br>

<div>
<div id="CATEGORY" style="display: grid;grid-template-columns: 1fr 1fr 1fr;grid-template-rows: 800px;">
      <img  style="list-style-type:none;padding:10px;" id="img1" src="img/juicer.jpg" >
      <img  style="list-style-type:none;padding:10px;" id="img2" src="img/ps.jpg" >
      
</div>
</div>





<!--CATEGORY-END-->

<!--ABOUT-US-->

<h1 id="abouttext" style="text-align:center">ABOUT US</h1>
<div id="abouttext" style="; margin: 0 auto; padding-right:0px;width:80%;height:250px;">

       <p id="paratext" >The flat Earth model is an archaic conception of Earth's shape as a plane or disk. Many ancient cultures subscribed to a flat Earth cosmography, including Greece until the classical period, 
      
The idea of a spherical Earth appeared in Greek philosophy with Pythagoras (6th century BC), although most pre-Socratics (6th–5th century BC) retained the flat Earth model. Aristotle provid </p>
</div>
  
<!--contactus-->
<br>

</div>


<!--contactusend-->
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
      <p style="color:white" id="footertext1">info@ampere.com</p>
      <p style="color:white" id="footertext1">Customer Care: 1800-230-2300</p>
    </div>  
    </div>
   </div>




 
<!--contact_script-->
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

 <script>
 var modal_sign=document.getElementById('myModal_sign');
 var btn_sign = document.getElementsByClassName("sign")[0];
 var span_sign = document.getElementsByClassName("close_sign")[0];
 btn_sign.onclick = function() {
    modal_sign.style.display = "block";
}
span_sign.onclick = function() {
    modal_sign.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal_sign) {
        modal.style.display = "none";
    }
}

</script>


<!--signup_script-->

 <script>
 var modal_up=document.getElementById('myModal_up');
 var btn_up = document.getElementsByClassName("up")[0];
 var span_up = document.getElementsByClassName("close_up")[0];
 btn_up.onclick = function() {
    modal_up.style.display = "block";
}
span_up.onclick = function() {
    modal_up.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal_up) {
        modal.style.display = "none";
    }
}

</script>

</body>
</html>
