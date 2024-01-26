<?php
include 'configuration/config.php';

function isUnique($data, $column, $value) {
    $query = "SELECT * FROM `users` WHERE $column = '$value'";
    $result = mysqli_query($data, $query);
    return mysqli_num_rows($result) == 0;
}

function isPasswordComplex($password) {
    // Password should contain at least one alphabet, one number, and one symbol
    return preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]+$/', $password);
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];

    // Client-side validation
    if(strlen($phone) !== 11) {
        echo "<script>alert('Phone number should be exactly 11 digits.')</script>";
        exit();
    }

    if(strlen($nic) !== 13) {
        echo "<script>alert('NIC should be exactly 13 characters.')</script>";
        exit();
    }

    if(strlen($pass) < 8 || !isPasswordComplex($pass)) {
        echo "<script>alert('Password should be at least 8 characters and contain at least one alphabet, one number, and one symbol.')</script>";
        exit();
    }

    // Check for uniqueness
    if (!isUnique($data, 'username', $uname) || !isUnique($data, 'nic', $nic) ||
        !isUnique($data, 'email', $email) || !isUnique($data, 'phone', $phone)) {
        echo "<script>alert('Username, NIC, email, or phone number already exists.')</script>";
        exit();
    }

    // Continue with the rest of the code if validations pass

    // You should hash the password before storing it in the database for security
    if(empty($error)){

    
    // $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // $query = "INSERT INTO `user`(`name`, `username`, `nic`, `email`, `phone`, `password`) VALUES
    //  ('$name','$uname','$nic','$email','$phone','$hashed_password')";


    $query = "INSERT INTO `users`(`name`, `username`, `nic`, `email`, `phone`, `password`) VALUES
    ('$name','$uname','$nic','$email','$phone','$pass')";
    $result = mysqli_query($data, $query);

    if($data->query($query)=== TRUE){
        echo "<script>alert('Record Inserted!')</script>";
    } else {
        // Handle the case when the query fails
        echo "<script>alert('Error: ".mysqli_error($data)."')</script>";
    }
}
}

// Redirect the user to signup.php in case the form was not submitted
// else{
//     header("Location: signup.php");
// }
?>






<!doctype html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
  </head>
  <body>
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-2 pb-2">
                <a href="index.php">
                    <img src="img/logo.png" alt="Responsive image" height="40px">
                </a>
                <p class="float-right">
                    <a class="float-right" href="index.php"  style="color: #0DB14B">
                    <i class="fa fa-home" style="font-size: 25px;" aria-hidden="true"></i></a>
                </p>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 sidepic" style="background-color: #0DB14B;">
              </div>
          </div>
          <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 sidepic">
                <div class="d-flex justify-content-center border border-light p-5 mt-5">
                    <img src="signin/2.png" class="img-fluid" alt="">              
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 signinpage2 ">
                    <div class="login-form">
                    <div class="main-div2">
                        <div class="panel2 pt-2">
                            <p><a href="signin.php" style="float: right; text-decoration: none; font-weight: bold; font-size: 16px;">
                                <i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i></a></p>
                       <h4>Sign Up</h4>
                       <p>Have an account ? 
                           <a href="signin.php">&nbsp;Log In</a>
                        </p>
                       </div>






                       <form method="post" action="signup.php" class="row g-3 needs-validation" onsubmit="return validatePassword()">

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                             </div>
                            <input name="name" class="form-control" placeholder="Name" type="text" required>
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                             </div>
                            <input name="uname" class="form-control" placeholder="Username" type="text" required>
                        </div>
                        <div class="form-group input-group">
                            <!-- <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-registered" aria-hidden="true"></i></span>
                             </div>
                             <input type="text" id="reg" name="reg"  class="form-control" placeholder="Registration No" required>
                        </div> -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                             </div>
                                <input class="form-control" placeholder= "NIC XXXXX-XXXXXXX-X" type="text" name="nic" required>
                            </div>
                            <span id="message1"></span>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                             </div>
                            <input name="email" class="form-control" placeholder="EMAIL" type="email" required>
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                            </div>
                            <!-- <select class="custom-select" style="max-width: 120px;">
                                <option value="" disabled selected>+92</option>
                                <option value="1">+83</option>
                                <option value="2">+198</option>
                                <option value="3">+201</option>
                                <option value="3">+391</option>
                                <option value="3">+344</option>
                                <option value="3">+701</option>
                            </select> -->
                            <input type="tel" id="phone" name="phone"  class="form-control" placeholder="Phone number" required>
                        </div> 
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" placeholder="password" type="password" name="password" id="pass" required>
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" placeholder="Confirm password" type="password" name="cpass" id="cpass" required>
                        </div> <!-- form-group// -->
                            <button type="submit" class="btn btn-primary2" name="submit"> Sign Up</button>                                                              
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    







    <!--Form End-->
    <footer class="footer-bar ">
        <div class="container">
            <div class="row text-center pt-3">
                <div class="col-sm-12 footer-bar">
                    <p class="footer-text mx-auto">&copy; 2015-2021 Khwaja Fareed University of Engineering & Information Technology kfueit.edu.pk.</p>
                </div>
            </div>
        </div>
        <!--end container-->
    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="myscripts.js"></script>
    <script>
    function validatePassword() {
        var password = document.getElementById("pass").value;
        var confirmPassword = document.getElementById("cpass").value;

        if (password != confirmPassword) {
            alert("Password and Confirm Password do not match.");
            return false;
        }
        return true;
    }
</script>

  </body>
</html>