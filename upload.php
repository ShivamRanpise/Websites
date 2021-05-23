<?php
include("configuration.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$uploadFolder = 'uploads/';
    foreach ($_FILES['imageFile']['tmp_name'] as $key => $image) {
        $imageTmpName = $_FILES['imageFile']['tmp_name'][$key];
        $imageName = $_FILES['imageFile']['name'][$key];
        $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);



    
    // print_r($fileName);
$sql = "INSERT INTO images(image_url,email) VALUES('$imageName','$email')";

        mysqli_query($al, $sql);
        // echo "Image Uploaded Successfully";
    }
 
  if ($result) {
    echo '<script>alert("Images uploaded successfully !")</script>';
    echo '<script>window.location.href="profile.php";</script>';
}
?>




