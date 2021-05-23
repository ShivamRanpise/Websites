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
$email=$b['email'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>आम्हीमराठी</title>

    <style>
    body {
    background: rgb(99, 39, 120)
    
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
    </style>
</head>
<body >

   <div class="ic">
        <!-- <a href="index.html"><i class="fa fa-home fa-2x" style="position: absolute; top: 8px; left: 16px; border: 5px solid white; border-radius: 50%; padding: 5px; opacity: 0.4;"></i></a>	 -->
        <h1 class ="text-white bg-dark text-center" style="padding:15px 0;"> User Profile Setting</h1>
        <a href="" style="color:white;"><span style="position: absolute; top: 25px; left: 16px; font-size:20px;">आम्हीमराठी.com</span></a>
        <a href="profile.php" style="color:white;"><span style="position: absolute; top: 25px; left: 190px; font-size:20px;">My Profile</span></a>
        <a href="logout.php" style="color:white;"><span style="position: absolute; top: 25px; left: 300px; font-size:20px;">logout</span></a>
   </div>
    

<div class="container rounded bg-white mt-5 mb-5" >
<form  method="post" action="basic_change.php" style="margin-top:-20px;">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img style="height:220px; width:220px;" class="rounded-circle mt-5" src="<?php	echo $b['image'];?>"><span class="font-weight-bold"><?php echo $username;?></span><span class="text-black-50"><?php echo $email;?></span><span> </span></div>
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right" style="color: black; text-shadow: 0px 1px 1px #4d4d4d; font: 45px 'ChunkFiveRegular';">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Full Name</label><input type="text" name="username" class="form-control" placeholder="Full Name" value=""></div>
                    <div class="col-md-6"><label class="labels">Username</label><input type="text" name="nname" class="form-control" value="" placeholder="Username"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" name="contact" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Religion</label><input type="text" name="religion" class="form-control" placeholder="enter your religion" value=""></div>
                    
                   
                    <div class="col-md-12"><label class="labels">About</label><textarea class="form-control" name="about" placeholder="Enter Somthing About You..." value="" cols="1" rows="3"></textarea></div>

                </div>
                <div class="b1" style="display:flex;">
                        <div class="mt-5 text-center" style="margin-left:120px;"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
                        <div class="mt-5 text-center" style="margin-left:90px;"><button class="btn btn-primary profile-button" type="reset">Reset</button></div>
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