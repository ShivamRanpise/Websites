<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit User Profile        
            </h6>
        </div>

        <div class="card-body">
<?php
     if(isset($_POST['edit_btn1'])){
        $id = $_POST['edit_id'];
        $query = "SELECT * FROM users WHERE id='$id' ";
        $query_run = mysqli_query($al, $query);
        foreach($query_run as $row)
        {
            ?>
                <form action="code.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
                    <div class="form-group">
                        <label> Full Name </label>
                        <input type="text" name="edit_name" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group">
                        <label> Username </label>
                        <input type="text" name="edit_username" value="<?php echo $row['nick'] ?>" class="form-control" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="edit_contact" value="<?php echo $row['contact'] ?>" class="form-control" placeholder="Enter Contact No.">
                    </div>
                    <div class="form-group">
                        <label>Religion</label>
                        <input type="text" name="edit_religion" value="<?php echo $row['religion'] ?>" class="form-control" placeholder="Enter Your Religion">
                    </div>
                    <a href="all-users.php" class="btn btn-danger">Cancel</a>
                   
                    <button type="submit" name="updatebtn1" class="btn btn-primary">update</button>
                </form>

         <?php
        }
    }
?>




        </div>
    </div>
</div>









<?php
include('includes/scripts.php');
include('includes/footer.php');
?>