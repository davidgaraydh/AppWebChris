
<?php 

$user="";
$pass="";
$check="";
if(isset($_COOKIE["username"])){ 
   $user= $_COOKIE["username"]; 
   $pass= $_COOKIE["pass"]; 
    $check= "checked"; 
} else{ 
    $user="";
$pass="";
} 
  

?>