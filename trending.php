<HTML>

<head>
    <style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        background:lightgray;
        text-align: center;
        flex-basis:30%;
        margin-top:90px;
    }

    .title {
        color: grey;
        font-size: 18px;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    a {
        text-decoration: none;
        font-size: 22px;
        color: black;
    }

    button:hover,
    a:hover {
        opacity: 0.7;
    }

    img {
        border-radius: 50%;
        width: 150px;
        height: 150px;
    }

    div.scrollmenu {

        background-color: white;
        max-width: 1300px;
        margin: 20px auto;
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .container{
        max-width: 1250px;
    margin: auto;
    padding: 0 25px 0 25px;
    }

    * {
        box-sizing: border-box;
    }

    /* Style the search field */
    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
    }

    /* Style the submit button */
    form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        /* Prevent double borders */
        cursor: pointer;
    }

    form.example button:hover {
        background: #0b7dda;
    }

    /* Clear floats */
    form.example::after {
        content: "";
        clear: both;
        display: table;
    }
    </style>



</head>
<?php
include("configuration.php");
session_start();
if(!isset($_SESSION['email']))
{
  header("location:index.php");
}
$email=$_SESSION['email'];
$sql=mysqli_query($al,"SELECT gender FROM users WHERE email='$email'");
$b=mysqli_fetch_array($sql);
?>



<body>

    <form class="example" action="" method="post">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"> Search</i></button>
    </form>
   <div class="container">


  
    <div class="scrollmenu">
        <?php

$search = $_POST['search'];


if ($al->connect_error){
  die("Connection failed: ". $al->connect_error);
}

$result1 = mysqli_query($al,"SELECT * FROM users WHERE username LIKE '%$search%'");

if ($result1->num_rows > 0){
while($row = $result1->fetch_assoc() ){
  $DOB=$row["dob"];
  $today=date("y-m-d");
  $diff=date_diff(date_create($DOB),date_create($today));
  if(strcmp($b['gender'],$row["gender"] )!=0)
  {
  ?>


        <div class="card">
            <img src="<?php echo $row["image"];?>" alt="Avatar">
            <h1><?php echo $row["nick"]; ?></h1>
            <p class="title"><?php echo $row["about"];?></p>
            <li> Name: <?php echo $row["username"];;?></li><br>
            <li> Age:<?php echo $diff->format('%y');?></li><br>
            <li> Religion: <?php echo $row["religion"];?></li><br>
            <li> Gender: <?php echo $row["gender"];?></li><br>
            <p><a href="users.php" class="card-link"><button>Message</button></p></a>
        </div>



        <?php
}}
?>
        </td>
        <?php
} else {
  echo "<b>No Record Found</b>";
}
?>
    </div>
    <br />
    <br />
    <center>
        <a class="text" href="profile.php">BACK</a>
    </center>
    </div> 
</body>

</html>