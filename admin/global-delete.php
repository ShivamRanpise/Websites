<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>



<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Admin Profile        
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

                <form action="" method="post">
                   <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
                    <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
                    <div class="form-group">
                        <label> Password </label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Admin Password">
                    </div>
                   
                    <a href="register.php" class="btn btn-danger">Cancel</a>
                   
                    <button type="submit" name="updatebtn1" class="btn btn-primary">update</button>
                </form>

        </div>
    </div>
</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>