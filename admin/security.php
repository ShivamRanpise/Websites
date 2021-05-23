<?php
session_start();
include('configuration.php');
 if($al)
 {

 }
 else{
     header("location :configuration.php");
 }
 if(!$_SESSION['username']){
     header('location: admin-login.php');
 }



?>