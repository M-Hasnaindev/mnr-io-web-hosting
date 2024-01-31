
<?php
session_start();
include 'configuration/config.php';

?>



<!doctype html>
<html lang="en">
<head>
    <title>Sign In</title>
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
                    <a class="float-right" href="logouthome.php"  style="color: #153980">
                    <i class="fa fa-home" style="font-size: 25px;" aria-hidden="true"></i></a>
                </p>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 sidepic" style="background-color: #153980;">
                
              </div>
          </div>
          <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 sidepic">
                <div class="d-flex justify-content-center border border-light p-5">
                    <img src="signin/1.png" class="img-fluid" alt="">              
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 signinpage ">
            <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                        <h4>Sign In</h4>
                        <p>Don't have an account yet? <a href="signup.php">&nbsp;Sign Up </a></p>
                    </div>
                <form method="post" id="Login">

                
                    
                                    <label for="inputEmail">CNIC/B.form:</label>
                                    <input type="number" name="CNIC" class="form-control" id="inputEmail" 
                                        placeholder="Enter CNIC/B.form">
                    
                
                        <div class="form-group">
                        <label for="inputEmail">email:</label>
                            <input type="email" name="email"  class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password"  class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                        <div class="forgot">
                            <a href="forgetpassword.php">Forgot Password?</a>
                        </div>
                        <div class="form-group">
                        <button type="submit" name="Join" class="btn btn-primary"> Join</button>
                        </div>
                        <div class="form-group">

                    </div>
                </form>
                                            
                <?php
$errors = [];

if (isset($_POST['Join'])) {
    $CNIC = $_POST["CNIC"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate if required fields are not empty
    if (empty($CNIC) || empty($email) || empty($password)) {
        $errors[] = "Please fill in all required fields.";
    }

    // Your other validation logic can go here

    // If no errors, proceed with user registration
    if (empty($errors)) {
        // TODO: Hash the password for security (recommended)
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // SQL query to insert user data into the 'user_lms' table
        $sql = "INSERT INTO user_lms (lms_id,lms_cnic_num, lms_email, lms_password) 
                VALUES (NULL,'$CNIC', '$email', '$password')";

        // Perform the query
        if ($data->query($sql) === TRUE) {
            echo "<script>alert('Join successful!')</script>";
            // Redirect to a success page or perform additional actions if needed
        } else {
            $errors[] = "Error: " . $sql . "<br>" . $data->error;
        }
    }
}
?>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!--Form End-->
    <footer class="footer-bar">
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
  </body>
</html>





