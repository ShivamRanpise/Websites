<?php

include("configuration.php");
session_start();
if(!isset($_SESSION['email']))
{
  header("location:index.php");
}
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
  <style>
    div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 500px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}


  </style>
</head>

<body>
   
        <h1>Image Gallery</h1>
        <hr style=" color: gray" >
        <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($al,  $sql);
          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
             <?php 
               if($images['email']==$email)
            {
               ?>
              <div class="gallery">
                 
                  
              <img src="uploads/<?=$images['image_url']?>" alt="Cinque Terre" width="600" height="400">
                 
                 <div class="gallery">
                  <a href="deleteImage.php?del=<?php echo $images['id'];?>">Delete</a>
                  </div>

                     </div>

              <?php } ?>
    <?php } }?>

     

</body>
</html>