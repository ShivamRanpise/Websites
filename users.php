<?php 
  session_start();
 include_once "php/configuration.php";
  $email=$_SESSION['email'];
  $sql=mysqli_query($al,"SELECT * FROM users WHERE email='$email'");
  $b=mysqli_fetch_array($sql);
?>
<?php include_once "header.php"; 
$_SESSION['unique_id']=$b['unique_id'];
$id=$_SESSION['unique_id'];
 if(!isset($_SESSION['unique_id'])){
    header("location: index.php");
  }
?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($al, "SELECT * FROM users WHERE unique_id = '$id'");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="<?php echo $row['image']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['nick'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="profile.php ?>" class="logout">Back</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        
      </div>
      <div class="users-list">
            <?php include_once "php/search.php"; ?>
      </div>
    </section>
  </div>

  <script src="script/users.js"></script>

</body>
</html>
