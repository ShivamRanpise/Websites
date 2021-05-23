<?php
include("configuration.php");
session_start();
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}
$email=$_SESSION['email'];
$sql=mysqli_query($al,"SELECT * FROM users WHERE email!='$email'");
$receiver=$_POST['user'];
$msg=$_POST['msg'];
$date=date('d-M-Y');
if($receiver==NULL || $msg==NULL)
{

}
else
{
	mysqli_query($al,"INSERT INTO message VALUES('','$email','$receiver','$msg','$date')");
	$info="Message Sent";
}
?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conversation</title>
<style>
	body
{
	background-image:url(bg.jpg);
	background-repeat:repeat;
}
.heading
{
	font-family:"Segoe UI";
	font-size:36px;
	color:#0FF;
	text-shadow:0px 0px 2px #000000;
}

.table
{
	border:1px solid #66F;
	border-radius:7px;
	background-color:transparent;
	box-shadow:0px 0px 8px #6699FF;
	padding:5px 5px;
}

.tableHead
{
	font-family:"Segoe UI";
	color:#6CF;
	font-size:20px;
	text-shadow:0px 0px 2px #000000;
}
.labels
{
	font-family:"Segoe UI";
	color:#FFF;
	font-size:15px;
	text-shadow:0px 0px 2px #000000;
	font-style:italic;
}
.fields
{
	font-family:"Segoe UI";
	color:#FFF;
	font-size:14px;
	border:1px solid #66F;
	border-radius:7px;
	background-color:transparent;
	padding:2px 4px;
}
.commandButton
{
	border:2px solid #66F;
	font-family:"Segoe UI";
	font-size:14px;
	color:#FFF;
	background-color:transparent;
}


a:link{font-family:"Segoe UI";color:#FFF;text-decoration:none;font-size:16px;text-shadow:2px 2px 3px #333333;}
a:active{font-family:"Segoe UI";color:#FFF;text-decoration:none;font-size:16px;text-shadow:2px 2px 3px #333333;}
a:visited{font-family:"Segoe UI";color:#FFF;text-decoration:none;font-size:16px;text-shadow:2px 2px 3px #333333;}
a:hover{font-family:"Segoe UI";color:#3FF;text-decoration:none;font-size:16px;text-shadow:2px 2px 3px #333333;}

.text
{
	font-family:"Segoe UI";
	color:#6CF;
	font-size:16px;
	text-shadow:0px 0px 2px #000000;
}
.info
{
	font-family:"Segoe UI";
	color:#F30;
	font-size:14px;
	text-shadow:0px 0px 2px #000000;
}

.nick
{
	font-family:"Times New Roman";
	font-size:14px;
	font-style:italic;
	color:#F90;
}
.msg
{
	font-family:"Segoe UI";
	font-size:14px;
	color:#FFF;
}
.name1 span{
	font-size:20px;
	padding-left:0px;
	color:red;
}
.bac{
    padding-top:10px;
	margin-left: 750px;
	position:absolute;
	
}
.bac button{
	padding:5px 20px;
	background-color:gray;
}
</style>
</head>

<body>
<hr style="border:6px dotted #63C;"/>
<span class="heading">Private Conversation</span><span style="float:right"><a href="logout.php">
<img src="logout.png" height="50" width="100"/></a></span>
<hr style="border:6px dotted #63C;"/><br />
<br />



<div style="display:flex;">
		<form method="post" action="">
		<table class="table" cellpadding="4" cellspacing="4">
				<tr><td class="tableHead" colspan="2" align="center" style="text-decoration:underline;">Send Messages</td></tr>
				<tr><td class="info" colspan="2" align="center"><?php echo $info;?></td></tr>
				<tr><td class="labels">Select User : </td><td><select name="user" class="fields" style="background-color:#051b18;">
				<option disabled="disabled" selected="selected"> - - - - - - - - - </option>
				<?php while($v=mysqli_fetch_array($sql))
				{
				?>
				<option value="<?php echo $v['email'];?>"><?php echo $v['name'];?></option>
				<?php } ?>
				</select></td></tr>
				<tr><td class="labels">Message : </td><td><textarea name="msg" class="fields" rows="2" cols="30" required="required"></textarea></td></tr>
				<tr><td colspan="2" align="center"><input type="submit" value="SEND" class="commandButton" /></td></tr>
		</table>
		</form>
<br />
<br />
<div class="bac">
            <a href="profile.php"><button>back</button></a>
   </div>







	<?php 
	$r=mysqli_query($al,"SELECT * FROM message WHERE sender='$email' ORDER BY id DESC LIMIT 10");
	?>



<table cellpadding="4" cellspacing="4" class="table" style="margin-left:50px; padding:0 40px;">
<tr><td class="tableHead" align="center" colspan="2" style="text-decoration:underline;">Sent Messages</td></tr>



<?php while($t=mysqli_fetch_array($r))
{
	$ee=$t['receiver'];
	$o=mysqli_query($al,"SELECT * FROM users WHERE email='$ee'");
	$p=mysqli_fetch_array($o);
	$recv=$p['nick'];
	
?>



<tr><td class="msg" style="font-size:12px;"><?php echo $t['msg'];?><span style="color:#F39;"> ( To <?php echo $recv;?> on <?php echo $t['date'];?>)</span></td><td><a href="deleteMessage.php?del=<?php echo $t['id'];?>" style="font-size:12px;">Delete</a></td></tr>
<?php } ?>


</table>
<br />
<br />


</div>


<?php
$r=mysqli_query($al,"SELECT * FROM message WHERE receiver='$email' ORDER BY id DESC");
?>

<div class="xyz" style="display:flex;">

<?php
$sql=mysqli_query($al,"SELECT * FROM users WHERE email='$email'");
$b=mysqli_fetch_array($sql);
$nick=$b['nick'];

?>


	<div class="con" style="display:flex;">
    
			<div class="tab" style="padding-top:50px;">
				<table cellpadding="4" cellspacing="4" class="table"  style="padding:0 40px;">
				<tr><td class="tableHead" align="center" colspan="2" style="text-decoration:underline;">Inbox</td></tr>
				<?php while($t=mysqli_fetch_array($r))
				{
					$ee=$t['sender'];
					$o=mysqli_query($al,"SELECT * FROM users WHERE email='$ee'");
					$p=mysqli_fetch_array($o);
					$recv=$p['nick'];
					?>
				<tr><td class="msg" style="font-size:12px;"><?php echo $t['msg'];?>
				<span style="color:#F39;"> ( From <?php echo $recv;?> on <?php echo $t['date'];?>)</span>
				</td><td><a href="deleteMessage.php?del=<?php echo $t['id'];?>" style="font-size:12px;">Delete</a></td></tr>
				<?php } ?>


				</table>
			</div> 
           
     </div>
		
<br />



</div>





</body>
<!-- 
Property of Tech Vegan Not For Sell/Not for Selling through any Blog/Website
Designed &amp; Developed by:
								Ashish Labade - https://www.ashishvegan.com 
                                Tech Vegan YouTube Channel Link: https://bit.ly/2MFT35Q
                                Copyright 2020 - Tech Vegan
-->
</html>