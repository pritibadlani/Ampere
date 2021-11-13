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
<link href="css/signup.css" rel="stylesheet" type="text/css" >
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
</head>


<body >
<!--NAVBAR-->
<div class="navbar" style="overflow:hidden;position: fixed;top: 0;width: 100%;z-index:10;" >
<ul class="topnav sizehover" id="myTopnav">
   <a href="main.php"><img id="logo-img" src="img/logo.jpg"></a>
   <li>        
   <a href="sesscheck.php"><img src="img/cart.jpg"></a>
  
  </li>
  

  <li><a href="login_in.php"class="sign" id="bottom-pad">Login</a></li>

<li><a  href="signup.php"class="up" id="bottom-pad">Sign Up</a>
</li>
  <li><a id="bottom-pad"href="hardware_parts.php" class="font-a">Hardware Parts</a></li>
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

<!--SLIDE-SHOW-->
<div id="div1_sign">
      <p id="signinpara"> Sign Up</p>
      <form name="sign_up_form" style="text-align:center" action="/signup_process.php" method="POST">
      <div id="div3_up">
      <input id="name" name="name" placeholder="Name" type="text" autocomplete="off" >
      <br>
      <br>
      <input id="address" name="address" placeholder="Address" type="text"autocomplete="off" >
      <br>
      
      <br>
      <input id="phone" name="phone" placeholder="Phone number" type="text" autocomplete="off">
      <br>
      <br>
      <input id="email" name="e_mail" placeholder="Email" type="text"autocomplete="off" >
      <br>
      <br>
      <input id="password"name="pass_word" placeholder="Password" type="text" >
      <div class="text-right" style="float: right;padding-top: 10px;">
            
      <br>
     </div>
      <button class="buttonsignin buttonsign">SIGN UP</button>
      </div>
      </form>
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
      <p style="color:white">info@ampere.com</p>
      <p style="color:white">Customer Care: 1800-230-2300</p>
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

<script type="text/javascript">
function myFunction(){
 document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
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
