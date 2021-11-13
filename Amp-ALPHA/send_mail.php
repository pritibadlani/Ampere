<?php

$name=$_POST["name"];
$from=$_POST["email"];
$to="justabyte7@gmail.com";
$request=$_POST["request"];
if (filter_var($from, FILTER_VALIDATE_EMAIL) and $name!="" and $from!="" and $request!=""){
    mail($to,$name,$from,$request);
	echo 0;
}
else{
	echo 1;
}

?>