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
$pass=$b['password'];
$old=sha1($_POST['old']);
$p1=sha1($_POST['p1']);
$p2=sha1($_POST['p2']);
if($_POST['p1']==NULL || $_POST['p1']==NULL || $_POST['p2']==NULL)
{
	
}
else
{
if($old!=$pass)
{
	$info="Incorrect Old Password";
}
elseif($p1!=$p2)
	{
		$info="New Password Didn't Matched";
	}
	else
	{
		mysqli_query($al,"UPDATE users SET password ='$p2' WHERE email='$email'");
		$info="Successfully Changed your Password";
        header("location:profile.php"); 
	}

}

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

        <h1 class ="text-white bg-dark text-center" style="padding:15px 0;"> User Profile Setting</h1>
        <a href="" style="color:white;"><span style="position: absolute; top: 25px; left: 16px; font-size:20px;">आम्हीमराठी.com</span></a>
        <a href="profile.php" style="color:white;"><span style="position: absolute; top: 25px; left: 190px; font-size:20px;">My Profile</span></a>
        <a href="logout.php" style="color:white;"><span style="position: absolute; top: 25px; left: 300px; font-size:20px;">logout</span></a>

	</div>
    

<div class="container rounded bg-white mt-5 mb-5">
<form  method="post" action="" style="margin-top:-20px;">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img style="height:220px; width:220px;" class="rounded-circle mt-5" src="<?php	echo $b['image'];?>"><span class="font-weight-bold"><?php echo $username;?></span><span class="text-black-50"><?php echo $email;?></span><span> </span></div>
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right" style="color: black; text-shadow: 0px 1px 1px #4d4d4d; font: 45px 'ChunkFiveRegular';">Change Password</h4>
                    <span><?php echo $info;?></span>
                </div>
                
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Current Password</label><input type="password" name="old" class="form-control" placeholder="Enter your old password" value=""></div>
                    <div class="col-md-12"><label class="labels">New Paasword</label><input type="password" name="p1" class="form-control" placeholder="New password" value=""></div>
                    <div class="col-md-12"><label class="labels">Repeat Password</label><input type="password" name="p2" class="form-control" placeholder="Confirm new password" value=""></div>
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