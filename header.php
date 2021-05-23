
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title> Chatting</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
   <link rel="stylesheet" href="chatting_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

<style type="text/css">
body
{
	
	background-repeat:repeat;
}
.heading
{
	font-family:"Segoe UI";
	font-size:36px;
	color:#0FF;
	text-shadow:0px 0px 2px #000000;
}
.card-header{
			border-radius: 15px 15px 0 0 !important;
			border-bottom: 0 !important;
		}

.tableHead
{
	font-family:"Segoe UI";
	color:#6CF;
    overflow-x:auto;
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
	color:black;
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


.text
{
	font-family:"Segoe UI";
	color:#fff8dc;
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
	color:white;
}
.h {
  border: 10px solid gold;
  border-radius: 5px;
}
.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}

td{vertical-align:top;}

#gridview {
   text-align:center; 
}

div.image {
    margin: 10px;
    display: inline-block;
}

div.image img {
    width: 100%;
    height: auto;
    border: 1px solid #ccc;
}

div.image img:hover {
    box-shadow: 0 5px 5px 0 rgba(0,0,0,0.32), 0 0 0 0px rgba(0,0,0,0.16);
}

.heading{    
    padding: 10px 10px;
    border-radius: 2px;
    color: #FFF;
    background: #6aadf1;
    margin-bottom:10px;
    font-size: 1.5em;
}
#grid{
    margin-bottom:30px;
}

/* Responsive Styles */

@media screen and (min-width: 1224px) {
    div.image {
        width: 300px;
    }
}

@media screen and (min-width: 1044px) and (max-width: 1224px) {
    div.image {
        width: 250px;
    }
}

@media screen and (min-width: 845px) and (max-width: 1044px) {
    div.image {
        width: 200px;
    }
}
#results { padding:20px; border:1px solid; background:#ccc; }

   /* video {
      max-width: calc(50% - 1000px);
      height: 100;
      margin: 0 10px;
      box-sizing: border-box;
      border-radius: 2px;
      padding: 0;
      background: white;
    }
    .copy {
      position: fixed;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 16px;
      color: white;
    }*/
</style>

</head>