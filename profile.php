

<?php
include("configuration.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$sql=mysqli_query($al,"SELECT * FROM users WHERE email='$email'");
$b=mysqli_fetch_array($sql);
$username=$b['username'];
$nick=$b['nick'];
$dob=$b['dob'];
$contact=$b['contact'];
$email=$b['email'];
$gender=$b['gender'];
$about=$b['about'];
$religion=$b['religion'];
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>आम्हीमराठी</title>

<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    background-image:url("assetss/images/wed1.jpg");
    background-repeat:no-repeat;
    background-size: cover;
    
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
/* Style all font awesome icons */
.fa {
  padding: 10px;
  font-size: 15px;
  width: 40px;
  text-align: center;
  text-decoration: none;
}

/* Add a hover effect if you want */
    

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
}

/* Twitter */
.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
.content {
  height: 70vh; }

</style>

</head>
<body>

<h1 class ="text-white bg-dark text-center" style="padding:15px 0;"> User Profile</h1>
<a href="index.php" style="color:white;"><span style="position: absolute; top: 25px; left: 16px; font-size:20px;">आम्हीमराठी</span></a>
<a href="index.php" style="color:white;"><span style="position: absolute; top: 25px; left: 190px; font-size:20px;">Home</span></a>
<a href="logout.php" style="color:white;"><span style="position: absolute; top: 25px; left: 260px; font-size:20px;">logout</span></a>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile" style="border:2px solid blue; box-shadow:3px 5px 3px blue; border-radius:50px; margin-top:10px;">
            <form method="post" >
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img style="border:2px solid black; border-radius:10px; height:230px; width:230px;" src="<?php	echo $b['image'];?>" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h3>
                                    <?php echo $username;?>
                                    </h3><br>
                                    <h6 style="padding-bottom:10px;" >
                                    Follow Me On...!
                                    </h6>
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                    <a href="#" class="fa fa-youtube"></a>
                                    <a href="#" class="fa fa-instagram"></a>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Basic Info.</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                       <a href="edit.php"><input type="button" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/></a> 
                       <a href="change_pass.php"><input type="button" style="font-size:15px; margin-top:20px; padding-left:-10px; padding-right:20px;" class="profile-edit-btn" name="btnAddMore" value="Password"/></a> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <h5 style="margin-top:20px;">About Me...!</h5>
                            <p style="color:black; font-size:15px; margin-top:-5px;"><?php echo $about;?></p>

                            <p style="color:black; font-size:15px;">Usefull Links</p>
                            <a href="view.php"><i class="fa fa-picture-o" style="color:red;"></i>Gallery</a><br>
                            <a href="capture.php"><i class="fa fa-picture-o" style="color:red;"></i>Upload Images</a><br>
                            <a href="users.php"><i class="fa fa-commenting" style="color:red;"></i>Messages</a><br>
                            <a href="global.php"><i class="fa fa-commenting" style="color:red;"></i>Global Messages</a><br>
                            <a href="trending.php"><i class="fa fa-heart" style="color:red;"></i>My Matches</a><br>
                            <a href="video.php"><i class="fa fa-video" style="color:red;"></i>Video Chat</a><br>
                            <a href="logout.php"><i class="fa fa-sign-out" style="color:red;"></i>Sign Out</a><br>
                           
                           
                           
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $nick;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $username;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $email;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $gender;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $contact;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Religion</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $religion;?></p>
                                            </div>
                                        </div>
                                      
                            </div>

                           
                            
                        </div>
                    </div>
                </div>
            </form> 
                      
        </div>


        


       

    </body>



</html>



