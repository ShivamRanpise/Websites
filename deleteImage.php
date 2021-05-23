<?php
include("configuration.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$del=$_GET['del'];
$query = "DELETE FROM images WHERE id = '$del'";
$result = $al->query($query) or $err = mysqli_error($al);

if(!isset($err))
{
    //echo $del;
header("location:view.php");
}
/*
}
if(mysqli_query($al,"DELETE FROM images WHERE id='$del'"))
{
    echo("image deleted");
}
else {
  echo("image is not deleted");
}*/


//header("location:view.php");
?>