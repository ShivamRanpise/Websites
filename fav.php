<?php

include 'configuration.php';

?>


<head>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>




<div class="card-body">
  <h1 class="text-center text-white bg-dark">Here is Your Maching Profile</h1>


  <div class="table-responsive">
  <?php
              $query = "SELECT * FROM users";
              $query_run = mysqli_query($al, $query);
  ?>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="margin:50px 0;">
      <thead>
        <tr>
          <th> Id </th>
          <th> Full Name </th>
          <th>Username </th>
          <th>Email</th>
          <th>Contact</th>
          <th>Religion</th>
          <th>Operation</th>
          
        </tr>
      </thead>
      <tbody>
      <?php
                      if(mysqli_num_rows($query_run) > 0)        
                      {
                          while($row = mysqli_fetch_assoc($query_run))
                 
                       {
      ?>


        <tr>
        <td><?php  echo $row['id']; ?></td>
        <td><?php  echo $row['username']; ?></td>
        <td><?php  echo $row['nick']; ?></td>
        <td><?php  echo $row['email']; ?></td>
        <td><?php  echo $row['contact']; ?></td>
        <td><?php  echo $row['religion']; ?></td>
        
          
          <td>
              <form action="profile.php" method="post">
                  <input type="hidden" name="edit_id" value="<?php  echo $row['id']; ?>">
                  <button  type="submit" name="edit_btn1" class="btn btn-success"> View Profile</button>
              </form>
          </td>
          

        </tr>
        <?php
            } 
        }
           else {
                echo "No Record Found";
                }
       ?>
      
      </tbody>
    </table>

  </div>
</div>
</div>

</div>
<!-- /.container-fluid -->
