<?php 
session_start();
include "api/db-config.php";

include "api/auth-signin.php";
$cuser=new signin();
if(!isset($_SESSION['email'])){
    header("Location: logout.php");

}else{
    $result=$cuser->sessionUser($_SESSION['email']);
    $_SESSION['userId']=$result['user_id'];
    $_SESSION['firstName']=$result['firstName'];
    $_SESSION['lastName']=$result['lastName'];
    $_SESSION['phone']=$result['phone'];
    $_SESSION['userName']=$result['userName'];
    $_SESSION['gender']=$result['gender'];
    

}



?>