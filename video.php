<?php
require "header.php";
?>

<body>

<?php
include("configuration.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
?>

<body>
    <center>
<div>
  <video id="localVideo" autoplay muted width="320" height="240" ></video>
  <video id="remoteVideo" autoplay width="520" height="540" ></video>
  <a href="video.php"><button type="submit" class="btn btn-destroy">Cut</button></a>
  </div>
  <script src="scripts/script.js"></script>
 NOTE: Message the url to your friend<a class="text" href="users.php">Message</a>
 <br>
 <br>
  <a class="text" href="profile.php">BACK</a>

</center>
</body>
</html>