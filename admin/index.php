<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-center mb-4" style="margin-left:-260px;">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row ">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            require 'configuration.php';
                            $query = "SELECT id FROM admin ORDER BY id";  
                            $query_run = mysqli_query($al, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total Admin: '.$row.'</h4>';
                        ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Users</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            require 'configuration.php';
                            $query = "SELECT id FROM users ORDER BY id";  
                            $query_run = mysqli_query($al, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total Users: '.$row.'</h4>';
                        ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Messages from Users</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            require 'configuration.php';
                            $query = "SELECT msg_id FROM messages ORDER BY msg_id";  
                            $query_run = mysqli_query($al, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total Messages: '.$row.'</h4>';
                        ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-envelope fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total global Messages from Users</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            require 'configuration.php';
                            $query = "SELECT id FROM box ORDER BY id";  
                            $query_run = mysqli_query($al, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total Messages: '.$row.'</h4>';
                        ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-envelope fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="col-xl-3 col-md-6 mb-4" >
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Requested Users</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                            require 'configuration.php';
                            $query = "SELECT id FROM user ORDER BY id";  
                            $query_run = mysqli_query($al, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Requested Users: '.$row.'</h4>';
                        ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> 

    

  </div>
  <hr>
  <br><br>

<div class="row">

  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2 border border-danger">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <!-- <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div> -->
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                          <h4>Requested Profiles</h4>
                    </div>
                </div>
                <div class="col-auto">
                <a href="all-req.php"><button class="btn btn-primary" style="padding:10px 30px; font-size:15px;">Click Here</button></a> 
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2 border border-danger">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <!-- <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div> -->
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                          <h4>Manage Users</h4>
                    </div>
                </div>
                <div class="col-auto">
                <a href="all-users.php"><button class="btn btn-primary" style="padding:10px 30px; font-size:15px;">Click Here</button></a> 
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2 border border-danger">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <!-- <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div> -->
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            
                              <h4>Delete Global Messages</h4>
                        </div>
                    </div>
                    <div class="col-auto">
                    <a href="#" data-toggle="modal" data-target="#deletemodel"><button class="btn btn-danger" style="padding:10px 25px; font-size:15px;">Click Here</button></a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>


</div>


<div class="modal fade" id="deletemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Do You Really Want to Delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Delete" below if you are ready to Delete All Messages.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="code.php" method="POST"> 
            <button type="submit" name="delete_btn2" class="btn btn-primary">Delete</button>

          </form>


        </div>
      </div>
    </div>
  </div>





  

  <!-- Content Row -->

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>






  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>