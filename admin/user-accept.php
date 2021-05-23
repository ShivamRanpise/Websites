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