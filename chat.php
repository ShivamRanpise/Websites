<?php 
  session_start();
 include_once "php/configuration.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: index.php");
  }
?>
<?php include_once "header.php";
$id=$_GET['user_id'];
 ?>

<body>
  <div class="wrapper">
    <div class="body">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($al, $id);
          $sql = mysqli_query($al, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="<?php echo $row['image']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['username'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">
        <?php
        if(isset($_SESSION['incoming_id'])){
          include_once "php/get-chat.php";
          }
          ?>
      </div>
      <form action="php/insert-chat.php" method="POST" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <input style="width: 30%" type="submit" value="send">
      </form>
    </section>
  </div>
</div>
  <script src="script/chat.js"></script>

</body>
</html>
