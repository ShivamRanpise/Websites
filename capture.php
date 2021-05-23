<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Multiple Images with PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="icon" href="https://codingbirdsonline.com/wp-content/uploads/2019/12/cropped-coding-birds-favicon-2-1-192x192.png" type="image/x-icon">
<style>

    body{
        background-image:url("assetss/images/wed1.jpg");
    background-repeat:no-repeat;
    background-size: cover;
    }
</style>

</head>
<body style="height:80%;">

<div class="cl" style="margin-top:-18px;" >
    
    <a href="" style="color:white;"><span style="position: absolute; top: 25px; left: 16px; font-size:20px;">आम्हीमराठी.com</span></a>
    <a href="profile.php" style="color:white;"><span style="position: absolute; top: 25px; left: 190px; font-size:20px;">My Profile</span></a>
    <a href="gallery.php" style="color:white;"><span style="position: absolute; top: 25px; left: 320px; font-size:20px;">My Gallery</span></a>

</div>
<h1 class ="text-white bg-dark text-center" style="padding:15px 0;"> User Profile</h1>
<!-- <a href="index.php" style="color:white;"><i class="fas fa-house-user fa-3x" style="position: absolute; top: 10px; left: 16px;"></i></a> -->

<div class="container" style="margin-top:50px;">
    <form action="upload.php" method="post" enctype="multipart/form-data" style="margin-left:-150px;">
        <div class="form-group">
            <div class="row">
               <div class="col-md-6">
                   <div class="form-group" >
                       <input type="file" name="imageFile[]" required multiple class="form-control">
                   </div>
               </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="submit"  name="uploadImageBtn" id="uploadImageBtn" value="Upload Images" class="btn btn-success">
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>

</body>
</html>
