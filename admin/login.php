<?php
        session_start();  
    include "connect.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth</title>
    <link rel="stylesheet" href="auth.css">
    <link rel="stylesheet" href="auth.js">
</head>
<body>
    <div class="wrapper">
        <!-- <div class="title-text">
          <div class="title login">login Form</div>
          <div class="title signup">Signup Form</div>
        </div> -->
        <div class="form-container">
          <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
          </div>
          <div class="form-inner">
            <form action="" method="post" class="login">
              <div class="field">
                <input type="email" name="email" placeholder="Email Address" required>
              </div>
              <div class="field">
                <input type="password" name="password" placeholder="Password" required>
              </div>
              <div class="pass-link"><a href="#">Forgot password?</a></div>
              <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" name="submit" value="Login">
              </div>
              <div class="signup-link">Not a member? <a href="">Signup now</a></div>
            </form>
            
            <?php
            // session_start();
                                            if(isset($_POST['submit'])){
        
                                                $email = $_POST['email'];
                                                $password = $_POST['password'];
                                              
                                          
                                                $query = "SELECT * FROM `admin` WHERE
                                                 `email` = '$email' AND `password` = '$password'";
                                          
                                                $result = mysqli_query($con,$query);
                                                $row = mysqli_fetch_assoc($result);
                                                if(mysqli_num_rows($result) > 0){
                                                  $_SESSION['Id'] = $row['Id'];
                                                    $_SESSION['email'] = $row['email'];
                                                    $_SESSION['name'] = $row['name'] ;
                                                    header("location:index.php");
                                                }
                                                else{
                                                    echo "<script>alert('Username or password is incorrect!')</script>";
                                                }
                                                
                                          
                                            }
                                       ?>


