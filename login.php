<?php
$wrong = false;
include("configuration.php");
session_start();
if(isset($_SESSION['email']))
{
	header("location:profile.php");
}
$email=$_POST['email'];
$password=$_POST['password'];
if($email==NULL || $_POST['password']==NULL)
{

}
else
{
	$sql=mysqli_query($al,"SELECT * FROM users WHERE email='".mysqli_real_escape_string($al,$email)."' AND password='".mysqli_real_escape_string($al,sha1($password))."'");	
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['email']=$_POST['email'];
		header("location:profile.php");
	}
	else
	{
		$wrong = true;
	}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #444;
            font-family: calibri;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
        }
        .login{
            text-align: center;
            position: relative;
            width: 280px;
        }
        input.text{
            font-size:17px;
        }
        input, button{
            width: 100%;
            border: 0;
            border-radius: 20px;
        }
        input{
            border-bottom: 2px solid #444;
            padding: 12px 40px 12px 20px;
        }
        input, button, .group i, p, a{
            font-size: 13.3333px;
            font-weight: 600;
        }
        .group{
            margin-bottom: 10px;
            position: relative;
            width:300px;
        }
        .group i{
            position: absolute;
            top: 15px;
            right: 20px;
        }
        button{
            padding: 12px;
            background-image: linear-gradient(to right, #ff1464, purple);
            margin-bottom: 20px;
            cursor: pointer;
            width:300px;
            transition: all 1s ease-in;
        }
        button:hover{
            background-image: linear-gradient(to right, purple, #ff1464);
        }
        button, button i{
            color: #fff;

        }
        button i{
            margin-right: 5px;
        }
        p{
            margin-bottom: 10px;
        }
        i.fa.fa-empire, a{
            color: #ff1464;
        }
        i.fa.fa-empire{
            font-size: 50px;
            margin-bottom: 20px;
        }
        h2{
            margin-bottom: 20px;
            font-size:35px;
        }
        input:focus, input:focus::placeholder, input:focus+i{
            color: #ff1464;
        }
        input:focus, button:focus{
            outline: 0;
        }
        body::before, body::after{
            content: "";
            position: absolute;
            height: 300px;
            width: 500px;
        }
        body::before{
            background-image: linear-gradient(to right, #ff1464, purple);
            bottom: 0;
            left: 0;
            clip-path: polygon(0 0, 0 100%, 100% 100%);
        }
        body::after{
            background-image: linear-gradient(to right, purple, #ff1464);
            top: 0;
            right: 0;
            clip-path: polygon(100% 0, 0 0, 100% 100%);
        }
        @media(max-width:767px){
            body::before, body::after{
                height: 150px;
                widows: 300px;
            }
        }
    </style>
</head>
<body>
<div class="ic">
			<a href="index.php" style="color:#ff1464;"><i class="fa fa-home fa-2x" style="color:#ff1464; position: absolute; top: 8px; left: 16px; border: 4px solid #ff1464; border-radius: 50%; padding: 5px;"></i></a>
			<a href="admin/admin-login.php"><span class="material-icons-outlined" style="z-index: 1; position: absolute; top: 8px; right: 16px; padding: 5px; color:#5cdb95; font-size:20px; text-decoration:underline;">Admin login</span></a>
	
</div>
    <form action="" method="POST">
    <div class="login">
        <i class="fa fa-empire"></i>
        <h2>login</h2>
        <?php
				if($wrong == true)
				{
				echo "<p class='infor'>Incorrect Email Or Password</p>";
				}
		?>
        <div class="group"><input class="text" type="email" name="email" placeholder="Enter Your Email" required><i class="fa fa-user"></i></div>
        <div class="group"><input class="text" type="password" name="password" placeholder="Enter Password" required><i class="fa fa-lock"></i></div>
        <button type="submit"><i class="fa fa-send"></i> Login</button>
        <p class="ss">Dont have an account ? <a href="sign-up.php">SignUp</a></p>
    </div>
</form>
</body>
</html>