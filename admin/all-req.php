
<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 







if(isset($_POST['edit_btn_1']))
       {
                $id = $_POST['edit_id_1'];
                 $query = "SELECT * FROM user WHERE id='$id' ";
                 $query_run = mysqli_query($al, $query);
               foreach($query_run as $row)
                           {
                               $username=$row['username'];
                               $nname=$row['nick'];
                               $email=$row['email'];
                               $gender=$row['gender'];
                               $contact=$row['contact'];
                               $dob=$row['dob'];
                               $pass=$row['password'];
                               $religion=$row['religion'];
                               $about=$row['about'];
                               $image=$row['image'];
                               $uploaded_doc=$row['uploaded-doc'];
                               $date=date('d-M-Y');
                               $ran_id = rand(time(), 100000000);
                               $status = "Active now";

                              
                                $query = "INSERT INTO users VALUES('','$ran_id','$username','$nname','$dob','$email','$gender','$contact','$pass','$date','$religion','$about','$image', '$uploaded_doc','$status')";
                                  $query_run = mysqli_query($al, $query);


                                  $fields = array(
                                    "sender_id" => "FSTSMS",
                                    "message" => "Your Account Has been Registered Please Login Your Account",
                                    "language" => "english",
                                    "route" => "p",
                                    "numbers" => "$contact",
                                    "flash" => "0"
                                );
                                
                                $curl = curl_init();
                                
                                curl_setopt_array($curl, array(
                                  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
                                  CURLOPT_RETURNTRANSFER => true,
                                  CURLOPT_ENCODING => "",
                                  CURLOPT_MAXREDIRS => 10,
                                  CURLOPT_TIMEOUT => 30,
                                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                  CURLOPT_CUSTOMREQUEST => "POST",
                                  CURLOPT_POSTFIELDS => json_encode($fields),
                                  CURLOPT_HTTPHEADER => array(
                                    "authorization: 53qZBWNhMdyQGYUnXp2RoO7zJA0elm48KrLV19aDtfFvTxkjcg985IDLlpsVuw0TgxhEHQFZS1j7bv2q",
                                    "accept: */*",
                                    "cache-control: no-cache",
                                    "content-type: application/json"
                                  ),
                                ));


                                 if($query_run)
                                     {

                                        $query =  "DELETE FROM `user` WHERE `user`.`id` = '$id' ";
                                        $query_run = mysqli_query($al, $query);
                                        echo " <script> alert('Request Accepted Successfully');</script> ";
                                        $_SESSION['success'] = "Your Data is Updated";
                                        header('Location: all-users.php');
                                     }
                                else
                                  {
                                          header('Location: all-req.php'); 
                                          $_SESSION['status'] = "Your Data is NOT Updated";
                                  }

                            }

         }


?>







<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Requested Profiles 
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
                $query = "SELECT * FROM user";
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
            <th>Gender</th>
            <th>Accept</th>
            <th>Reject </th>
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
          <td><?php  echo $row['gender']; ?></td>
          
            
            <td>
              <form action="" method="post"> 
                    <input type="hidden" name="edit_id_1" value="<?php  echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn_1" class="btn btn-success"> Accept</button>
                </form>
            </td>
            <td>
                <form action="user-delete.php" method="post">
                  <input type="hidden" name="delete_id1" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn1" class="btn btn-danger">Reject</button>
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