<?php
$wrong1 = false;
$wrong2 = false;
include("configuration.php");
$username=$_POST['username'];
$nname=$_POST['nname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$dob=$_POST['dob'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$religion=$_POST['religion'];
$about=$_POST['about'];
$date=date('d-M-Y');
$ran_id = rand(time(), 100000000);
$status = "Active now";

//code for image uploading
if($_FILES['f1']['name']){
	move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
	$img="image/".$_FILES['f1']['name'];
}


if($_FILES['f2']['name']){
	move_uploaded_file($_FILES['f2']['tmp_name'], "uploaded-doc/".$_FILES['f2']['name']);
	$img1="uploaded-doc/".$_FILES['f2']['name'];
}


$c=mysqli_query($al,"SELECT * FROM user WHERE email='$email'");
if( $ran_id ==NULL || $username==NULL || $nname==NULL || $email==NULL || $gender==NULL || $contact==NULL || $p1==NULL || $p2==NULL || $dob==NULL || $religion==NULL || $about==NULL || $status==NULL)
{
}
elseif(mysqli_num_rows($c)==1)
		{
			$wrong1 = true;
			//$info="Email ID or Nick Name Already Exists";
		}
		elseif($p1==$p2)
		{	
			$p3=sha1($p1);
			$sql=mysqli_query($al,"INSERT INTO user VALUES('','$ran_id','$username','$nname','$dob','$email','$gender','$contact','$p3','$date','$religion','$about','$img', '$img1','$status')");
			// $info="Successfully Registered User $name";
            echo " <script> alert('Your Request Has Been Submited Please Wait For Response...!');</script> ";
			
            
            
		}
		else
		{
			$wrong2 = true;
			//$info="Password Didn't Matched";
		}
?>





<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>आम्हीमराठी</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


<style>
.infor{
	font-size:19px;
	color:red;
}
</style>


    </head>


	

    <body>

		<!-- Top menu -->
	
        <!-- Top content -->
		<div class="ic">
			<a href="index.php"><i class="fa fa-home fa-2x" style="position: absolute; top: 8px; left: 16px; border: 4px solid rgb(37, 57, 148,.3); border-radius: 50%; padding: 5px; opacity: 0.7;"></i></a>
		
		
		</div>
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1 style="margin-left:-120px;"><strong>Create Account</strong></h1>
							<?php
								if($wrong1 == true)
								{
								echo "<p class='infor'>Email ID or Nick Name Already Exists</p>";
								}
							?>
							<?php
								if($wrong2 == true)
								{
								echo "<p class='infor'>Password Didn't Matched</p>";
								}
							?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 col-sm-offset-2 form-box">
                        	
                        	<form role="form" action="" method="post" class="registration-form" enctype="multipart/form-data">
                        		
                        		<fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Step 1 / 3</h3>
		                            		<p>Tell us who you are</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">Full name</label>
				                        	<input type="text" name="username" placeholder="Full name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Username</label>
				                        	<input type="text" name="nname" placeholder="Username..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Email</label>
				                        	<input type="text" name="email" placeholder="Email..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                       <div class="form-group">
				                    		<label class="sr-only" for="form-gender">Gender</label>
				                        	<input type="radio" name="gender" value="female"> Female<br>
											<input type="radio" name="gender" value="male"> Male
				                        </div>
				                        
				                        <button type="button" class="btn btn-next">Next</button>
										<span style="margin-left:20px;">Already have an Account?</span><a href="login.php">Login Here..!</a>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Step 2 / 3</h3>
		                            		<p>Set up your account</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-key"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Contact</label>
				                        	<input type="text" name="contact" placeholder="Contact..." class="form-email form-control" id="form-email">
				                        </div>
				                        <div class="form-group">
				                    		<label class="sr-only" for="form-password">Date Of Birth</label>
				                        	<input type="date" name="dob" placeholder="Date Of Birth..." class="form-password form-control" id="form-password">
				                        </div>
				                        
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-repeat-password">Password</label>
				                        	<input type="password" name="p1" placeholder="password..." 
				                        				class="form-repeat-password form-control" id="form-repeat-password">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-repeat-password">Confirm Password</label>
				                        	<input type="password" name="p2" placeholder="Repeat password..." 
				                        				class="form-repeat-password form-control" id="form-repeat-password">
				                        </div>
				                        <button type="button" class="btn btn-previous">Previous</button>
				                        <button type="button" class="btn btn-next">Next</button>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Step 3 / 3</h3>
		                            		<p>Somthing More about you</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-facebook">Religion</label>
				                        	<input type="text" name="religion" placeholder="Your Religion..." class="form-facebook form-control" id="form-facebook">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">About yourself</label>
				                        	<textarea name="about" placeholder="About yourself..." 
				                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
				                        </div>
										
										<div class="form-group">
											<div class="lav" style="display:flex;">
											    <label for="">Upload a Profile Picture<input type="file" name="f1"></label>
											    <label for="" style="font-size:12px;" >Upload a Document (Adhar, Voter Id, D Licence)<input type="file" style="font-size:16px;" name="f2"></label>

											</div>
				                       
				                        </div>
				                        <button type="button" class="btn btn-previous">Previous</button>
				                        <button type="submit" class="btn">Sign me up!</button>
				                    </div>
			                    </fieldset>
		                    </form>
		                    
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        

		</script>
    </body>

</html>