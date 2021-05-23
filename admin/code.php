<?php
session_start();

include('security.php');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    // $email_query = "SELECT * FROM admin WHERE email='$email' ";
    // $email_query_run = mysqli_query($al, $email_query);
    // if(mysqli_num_rows($email_query_run) > 0)
    // {
    //     $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
    //     $_SESSION['status_code'] = "error";
    //     header('Location: register.php');  
    // }
    // else
    // {
        if($password === $cpassword)
        {
            $query = "INSERT INTO admin (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($al, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
              //  $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
              //  $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
           // $_SESSION['status_code'] = "warning";
         //  echo " <script> alert('Password and Confirm Password Does Not Match');</script> ";
           header('Location: register.php');  
        }
    
}




  if(isset($_POST['updatebtn']))
   {
       $id = $_POST['edit_id'];
       $username = $_POST['edit_username'];
       $email = $_POST['edit_email'];
       $password = $_POST['edit_password'];

       $query = "UPDATE admin SET username='$username', email='$email', password='$password' WHERE id='$id' ";
       $query_run = mysqli_query($al, $query);

       if($query_run)
        {
          $_SESSION['success'] = "Your Data is Updated";
//         $_SESSION['status_code'] = "success";
           header('Location: register.php'); 
        }
       else
        {
           $_SESSION['status'] = "Your Data is NOT Updated";
//         $_SESSION['status_code'] = "error";
           header('Location: register.php'); 
        }
    }







    if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM admin WHERE id='$id' ";
    $query_run = mysqli_query($al, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
      //  $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
     //   $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}




if(isset($_POST['login_btn']))
{
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM admin WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($al, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: admin-login.php');
   }
    
}


if(isset($_POST['updatebtn1']))
{
    $id = $_POST['edit_id'];
    $fullname = $_POST['edit_name'];
    $user = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $contact = $_POST['edit_contact'];
    $religion = $_POST['edit_religion'];

    $query = "UPDATE users SET username='$fullname', nick='$user', email='$email', contact='$contact', religion='$religion' WHERE id='$id' ";
    $query_run = mysqli_query($al, $query);

    if($query_run)
     {
       $_SESSION['success'] = "Your Data is Updated";
//         $_SESSION['status_code'] = "success";
        header('Location: all-users.php'); 
     }
    else
     {
        $_SESSION['status'] = "Your Data is NOT Updated";
//         $_SESSION['status_code'] = "error";
        header('Location: all-users.php'); 
     }
 }


 

 if(isset($_POST['delete_btn1']))
 {
     $id = $_POST['delete_id1'];
 
     $query = "DELETE FROM users WHERE id='$id' ";
     $query_run = mysqli_query($al, $query);
 
     if($query_run)
     {
         $_SESSION['success'] = "Your Data is Deleted";
       //  $_SESSION['status_code'] = "success";
         header('Location: all-users.php'); 
     }
     else
     {
         $_SESSION['status'] = "Your Data is NOT DELETED";       
      //   $_SESSION['status_code'] = "error";
         header('Location: all-users.php'); 
     }    
 }


 

 if(isset($_POST['delete_btn2']))
 {
 
     $query = "TRUNCATE TABLE box";
     $query_run = mysqli_query($al, $query);
 
     if($query_run)
     {
        //  $_SESSION['success'] = "Your Data is Deleted";
       //  $_SESSION['status_code'] = "success";
         header('Location: index.php'); 
     }
     else
     {
        //  $_SESSION['status'] = "Your Data is NOT DELETED";       
      //   $_SESSION['status_code'] = "error";
         header('Location: index.php'); 
     }    
 }


?>
