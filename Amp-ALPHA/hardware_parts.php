<?php
// include database configuration file
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>AMPERE</title>
<link rel="icon" 
      type="image/png" 
      href="img/fav.jpg">
<link href="css/hardware_parts.css" rel="stylesheet" type="text/css" >
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
  <source src="video/gigabyte.mp4" type="video/mp4" >
</video>


<br>
<!--RTX-->
<!--<div class="parallax1"></div>-->
<div >
  <form action="addtocart.php" method="POST">
    <ul style="display:grid;grid-template-columns: repeat(auto-fit, minmax(200px, 5fr));grid-gap: 15px;">
      <li style="list-style-type:none; padding: 0px;font-size: 14px;padding: 20px;"><img id="img1" src="img/rpi.jpg" width="700">
     </li>
      <li id="font1" style="list-style-type:none;background-color:#fff;border-radius: 3px padding: 20px; ">
        <h1 id="font2" >Raspberry Pi 3</h1> <br> <br> 
      <input name="qnt" type="number" placeholder="Quantity" autocomplete="off" min="1" max="5" value="1"> 
      <input name="p_name" value="Raspberry Pi 3" type="hidden">
       
        <input name="price" value="100" type="hidden">
      
        <button >Add to Cart</button>
        <p style="font-size: 24px"> Price : $100 </p>
    </li>
    </ul>
  </form>
</div>


<div >
  <form action="addtocart.php" method="POST">
    <ul style="display:grid;grid-template-columns: repeat(auto-fit, minmax(200px, 5fr));grid-gap: 15px;">
      <li id="font1" style="list-style-type:none;background-color:#fff;border-radius: 3px padding: 20px; "><h1 id="font2" >Gigabyte Aorus Z370:</h1> <br> <br> 
      <input name="qnt" type="number" placeholder="Quantity" autocomplete="off" min="1" max="5" value="1"> 
      <input name="p_name" value="Gigabyte Aorus Z370"  type="hidden">

       <input name="price" value="200" type="hidden">
      
        <button >Add to Cart</button>
        <p style="font-size: 24px"> Price : $200 </p>
    
    </li>
      <li style="list-style-type:none; padding: 0px;font-size: 14px;padding: 20px;"><img id="img1" src="img/gigabyte.jpg" width="700">
     </li>
      
 
    </ul>
  </form>
</div>




<div >
  <form action="addtocart.php" method="POST">
    <ul style="display:grid;grid-template-columns: repeat(auto-fit, minmax(200px, 5fr));grid-gap: 15px;">
      <li style="list-style-type:none; padding: 0px;font-size: 14px;padding: 20px;"><img id="img1" src="img/smps.jpg" width="700">
     </li>
      <li id="font1" style="list-style-type:none;background-color:#fff;border-radius: 3px padding: 20px; "><h1 id="font2" >SMPS:</h1> <br> <br> 
      <input name="qnt" type="number" placeholder="Quantity" autocomplete="off" min="1" max="5" value="1">  
      <input name="p_name" value="SMPS" type="hidden">

       <input name="price" value="400" type="hidden">
      
        <button >Add to Cart</button>
        <p style="font-size: 24px"> Price : $400 </p>
    
    </li>
 
    </ul>
  </form>
</div>


  

<!--!44-->


<!--CATEGORY-->
<script>
 var modal=document.getElementById('myModal');
  var modal1=document.getElementById('myModal1');
  var modal2=document.getElementById('myModal2');
 var btn = document.getElementById("butt");
  var btn1 = document.getElementById("butt1");
  var btn2 = document.getElementById("butt2");

 var span = document.getElementsByClassName("close")[0];
 var span1 = document.getElementsByClassName("close1")[0];
 var span2 = document.getElementsByClassName("close2")[0];

 btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


 btn1.onclick = function() {
    modal1.style.display = "block";
}
span1.onclick = function() {
    modal1.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

btn2.onclick = function() {
    modal2.style.display = "block";
}
span2.onclick = function() {
    modal2.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}


</script>



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
