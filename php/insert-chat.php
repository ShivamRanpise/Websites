<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
       include_once "configuration.php";
       $incom=$_POST['incoming_id'];
       $mess=$_POST['message'];
       $_SESSION['incoming_id']=$incom;
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($al, $incom );
        $message = mysqli_real_escape_string($al, $mess);
        if(!empty($message)){
            $sql = mysqli_query($al, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
            echo "<script>history.go(-1)</script>";
            
        }
    }else{
        header("location: ../profile.php");
    }


    
?>