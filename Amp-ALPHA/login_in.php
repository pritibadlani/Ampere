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
<link href="css/login.css" rel="stylesheet" type="text/css" >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
   

  <li><a class="sign" id="bottom-pad"><?php
       if(isset($_SESSION['status'])){
        session_destroy();
        }
        if(isset($_SESSION['status'])){
          
           echo "<?php <a href='#'>".$_SESSION["result"]."</a> ?>";
        }
        else{
          echo "<?php <a href=''>Login</a> ?>";
        }
        ?></a>


</li>

<li><a  href="signup.php"class="up" id="bottom-pad">Sign Up</a>
</li>
  
  <li><a id="bottom-pad"href=hardware_parts.php" class="font-a">Hardware Parts</a></li>
  <li>  <a id="bottom-pad"href="home_app.php">Home Appliances</a> </li>
  <li>  <a id="bottom-pad"href="gaming.php">Gaming Parts</a></li>
  

   <li class="icon">
    <a id="bottom-pad-1" href="javascript:void(0);"  onclick="myFunction()">MENU</a>
  </li>
</ul>
</div>

<script type="text/javascript">
$(document).ready(function() {

    $('#myform').submit(function() {

        $.ajax({
            type: "POST",
            url: 'login.php',
            data: {
                username: $("#username").val(),
                
                password: $("#password").val()
            },
            success: function(data)
            {
                if (data==0) {
                  
                  window.location= 'main.php';
                   
                }
                else {
                     $("#ajax").html("Incorrect Credentails");
                }
            }
        });
        
    
        return false; 
    });

});
</script>

<!--NAVEND-->
<div id="div1_sign">
  <p id="signinpara_sign">Login</p>
    <div id="div2_sign">
      <form style="text-align:center" action="/login.php"  method="POST" id="myform" >

      <div id="div3_sign">
        <input id="username" name="e_mail" placeholder="Email" type="text" >
        <br>
        <br>
        <input id="password" name="pass_word" placeholder="Password" type="text" >
          <div class="text-right" style="float: right;padding-top: 10px;">
          </div>
          <br>
        <button class="buttonsign" type="submit" id="submit" >Submit</button>
        <div id="ajax"></div>
        </div>
</form>
    </div>
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
   <script type="text/javascript">
function myFunction(){
 document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
</script>




 
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



<!--signup_script-->

</body>
</html>
