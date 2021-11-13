<?php
$name=$_POST["name"];
$from=$_POST["from"];
$request=$_POST["request"];
$to="justabyte7@gmail.com";
mail($to,$name,$from,$request);
echo 0;
?>