
<!DOCTYPE html>
<html>
<head>
<title>AMPERE</title>
<link rel="icon" 
      type="image/png" 
      href="img/fav.jpg"> 
<link href="css/contact_us.css" rel="stylesheet" type="text/css" >
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
$(document).ready(function() {

    $('#contact_us').submit(function() {

        $.ajax({
            type: "POST",
            url: 'send_mail.php',
            data: {
                name: $("#name").val(),
                
                email: $("#email").val(),

                request: $('#request').val()
            },
            success: function(data)
            {
                if (data==0) {
                  
                  $("#ajax").html("Thank you, we will be shortly in touch with you.");
                   
                }
                else {
                     $("#ajax").html("Enter correct Details.");
                }
            }
        });
        
    
        return false; 
    });

});
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




<!--SLIDE-SHOW-END-->


<!--CATEGORY-->

    <div id="conus">
      <p id="signinpara">Contact Us</p>
      <form id="contact_us" style="text-align:center" action="/send_mail.php" method="POST">
      <div id="div3">
      <input id="name" name="name" placeholder="Name" type="text" autocomplete="off" >
      <br>
      <br>
      <input id="email" name="email" placeholder="Email" type="text"autocomplete="off" >
      <br>
      <br>
      <textarea autocomplete="off" id="request" name="request" placeholder="Your queries...." style="width: 100%;height:100px;border-radius: 10px;"></textarea>
      <br>
      <br>
      <input type="submit" value="Submit" class="buttonsignin buttonsign">
      <div id="ajax"></div>
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
      <p style="color:white" id="footertext1">info@ampere.com</p>
      <p style="color:white" id="footertext1">Customer Care: 1800-230-2300</p>
    </div>  
    </div>
   </div>

</body>
</html>
