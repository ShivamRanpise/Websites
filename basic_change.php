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
// $name=$b['name'];
$username=$_POST['username'];
$nname=$_POST['nname'];
$contact=$_POST['contact'];
$religion=$_POST['religion'];
$about=$_POST['about'];

if($_POST['username']==NULL || $_POST['nname']==NULL || $_POST['contact']==NULL || $_POST['religion']==NULL || $_POST['about']==NULL)
{
	
}
else
	{
		mysqli_query($al,"UPDATE users SET username='$username',nick='$nname',contact='$contact',religion='$religion',about='$about' WHERE email='$email'");
	    echo "Profile Update Successfully";
        header("location:profile.php"); 
	}

?>