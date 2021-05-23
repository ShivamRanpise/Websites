<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>








<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">User Profiles 
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add Admin Profile 
            </button> -->
    </h6>
  </div>

  <div class="card-body">

  <?php
                if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                    echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].' </h2>';
                    unset($_SESSION['success']);
                }

                if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                    echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].' </h2>';
                    unset($_SESSION['status']);
                }
    ?>

    <div class="table-responsive">
    <?php
                $query = "SELECT * FROM users";
                $query_run = mysqli_query($al, $query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> Id </th>
            <th> Full Name </th>
            <th>Username </th>
            <th>Email</th>
            <th>Contact</th>
            <th>Religion</th>
            <th>Edit</th>
            <th>Delete </th>
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
                <form action="user-edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php  echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn1" class="btn btn-success"> EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id1" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn1" class="btn btn-danger"> DELETE</button>
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











<?php
include('includes/scripts.php');
include('includes/footer.php');
?>