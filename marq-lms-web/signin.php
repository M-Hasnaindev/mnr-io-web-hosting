
<?php
include 'configuration/config.php';
session_start();
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
                    <form method="post"  id="Login">
                        <div class="form-group">
                            <input type="email" name="lms_email"  class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="lms_password"  class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                        <div class="forgot">
                            <a href="forgetpassword.php">Forgot Password?</a>
                        </div>
                        <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
                        </div>
                        <div class="form-group">
                        <button type="submit" name="siwm" class="btn btn-primary login with-google">
                                                                Sign In with Marq?
                        </button>

                        </div>
                       
                       
</form>

<?php
if (isset($_POST['submit'])) {
    $email = $_POST['lms_email'];
    $password = $_POST['lms_password'];

    // TODO: Add appropriate validation for email and password

    // Using prepared statements to prevent SQL injection
    $query = "SELECT * FROM `user_lms` WHERE `lms_email` = ? AND `lms_password` = ?";
    
    $stmt = mysqli_prepare($data, $query);

    // Check for errors in preparing the statement
    if (!$stmt) {
        die('Error in preparing the statement: ' . mysqli_error($data));
    }

    // Bind the parameters
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);

    // Execute the query
    mysqli_stmt_execute($stmt);

    // Get the result set
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['lms_id'] = $row['lms_id'];
        $_SESSION['lms_cnic_num'] = $row['lms_cnic_num'];
        $_SESSION['email'] = $row['email'];
        header("location:index.php");
        exit(); // Ensure no further script execution after redirect
    }
    else{
        echo "<script>alert('Username or password is incorrect!')</script>";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}elseif (isset($_POST['siwm'])) {
    echo "siwm is set"; // Debugging statement
    // TODO: Add logic for "Sign In with Marq?" button
    // Assuming you have a session variable storing the user ID after Marq? login
    $marqUserId = $u_id; // Replace with the actual user ID obtained from Marq?
    
    // Set the user ID session variable
    $_SESSION['u_id'] = $marqUserId;
    
    // Redirect to index.php
    header("location: index.php");
    exit();  // Ensure no further script execution after redirect
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
                    <p class="footer-text mx-auto">
                        &copy; 2015-2021 Khwaja Fareed University of Engineering & Information Technology kfueit.edu.pk.</p>
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





