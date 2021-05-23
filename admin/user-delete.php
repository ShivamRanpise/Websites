<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 







if(isset($_POST['delete_btn1']))
 {
     $id = $_POST['delete_id1'];
 
     $query = "DELETE FROM user WHERE id='$id' ";
     $query_run = mysqli_query($al, $query);
 
     if($query_run)
     {
         $_SESSION['success'] = "Your Data is Deleted";
       //  $_SESSION['status_code'] = "success";
         header('Location: all-req.php'); 
     }
     else
     {
         $_SESSION['status'] = "Your Data is NOT DELETED";       
      //   $_SESSION['status_code'] = "error";
         header('Location: all-req.php'); 
     }    
 }



 ?>