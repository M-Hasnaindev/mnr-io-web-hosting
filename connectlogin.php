<?php
// session_start();  
    $data = mysqli_connect('localhost','root','','marq');

?>

<?php

                                            if(isset($_POST['submit'])){
        
                                                $email = $_POST['email'];
                                                $password = $_POST['password'];
                                              
                                          
                                                $query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
                                          
                                                $result = mysqli_query($data,$query);
                                                $row = mysqli_fetch_assoc($result);
                                                if(mysqli_num_rows($result) > 0){
                                                    $_SESSION['id'] = $row['id'];
                                                    $_SESSION['username'] = $row['username'] ;
                                                    header("location:index.php");
                                                }
                                                else{
                                                    echo "<script>alert('Username or password is incorrect!')</script>";
                                                }
                                                
                                          
                                            }
                                       ?>
