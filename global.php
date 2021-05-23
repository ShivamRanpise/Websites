<?php
include("configuration.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$msg=$_POST['msg'];
$email=$_SESSION['email'];
$sql=mysqli_query($al,"SELECT * FROM users WHERE email='$email'");
$b=mysqli_fetch_array($sql);
$name=$b['nick'];
$date=date('d-M-Y');
if($msg==NULL)
{

}
else
{
	mysqli_query($al,"INSERT INTO box VALUES('','$name','$msg','$date')");
}
$fetch=mysqli_query($al,"SELECT * FROM box ORDER BY id DESC");
?>
<?php
require "header.php";
?>
<body>

<div align="center">
<form method="post" action="">
<table class="tableHead" cellpadding="20" cellspacing="50">
<tr><td align="center" class="tableHead" colspan="2"><h1 style="color: black">Global Chat</h1></td></tr>
<tr><td colspan="2"><div class="fields" style="overflow:scroll;height:350px;word-wrap:normal;width:1500px;">
<?php while($f=mysqli_fetch_array($fetch))
{
	?>
<span  class="nick"><?php echo $f['sender'];?></span> : <span style="color: black;width: 100px"><?php echo $f['msg'];?></span><br /><?php } ?>
</div>
</td></tr>
<tr><td><textarea name="msg" class="form-control type_msg" rows="3" cols="200" placeholder="Enter Your Message" required="required" >
</textarea></td>
<td><button type="submit" class="btn btn-info">Send</button><br />
<br />
<a href="box.php"><button type="submit" class="btn btn-info">Refresh</button></a></td></tr>

</table>
</form><br />
<br />
<a class="text" href="profile.php">BACK</a>
</div>

</body>

</html>