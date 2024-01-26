<?php
        session_start();  
    include "connectlogin.php";
    
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
                                              
                                          
                                                $query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
                                          
                                                $result = mysqli_query($data,$query);
                                                $row = mysqli_fetch_assoc($result);
                                                if(mysqli_num_rows($result) > 0){
                                                    $_SESSION['u_id'] = $row['u_id'];
                                                    $_SESSION['email'] = $row['email'] ;
                                                    header("location:index.php");
                                                }
                                                else{
                                                    echo "<script>alert('Username or password is incorrect!')</script>";
                                                }
                                                
                                          
                                            }
                                       ?>







<form action="" method="post" class="signup">
    <div class="field">
        <input type="text" name="name" placeholder="User Name" required>
    </div>
    <div class="field">
        <input type="text" name="email" placeholder="Email Address" required>
    </div>
    <div class="field">
        <input type="number" name="phonenumber" placeholder="Phone Number" required>
    </div>
    <div class="field">
        <input type="password" name="password" placeholder="Password" required>
    </div>
    <!-- <div class="field">
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    </div> -->
    <div class="field btn">
        <div class="btn-layer"></div>
        <?php
                    // Check if the user is already registered
                    if (isset($_SESSION['Id'])) {
                        echo '<input type="submit" name="signup" value="Signup" disabled>';
                    } else {
                        echo '<input type="submit" name="signup" value="Signup">';
                    }
                    ?>
        <input type="submit" name="signup" value="Signup">
    </div>
    




</form>
<?php

$errors = array(); // Initialize an array to store errors

if (isset($_POST['signup'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];
    // $confirm_password = $_POST["confirm_password"];

    // Validate input fields
    if (empty($name) || empty($email) || empty($phonenumber) || empty($password)) {
        $errors[] = "Please fill in all required fields.";
    }

    // Validate email format
    // Validate email or phone number format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^[0-9]{11}$/', $email)) {
            $errors[] = "Invalid email or phone number format.";
        }


    // Check if user with the same email already exists
    $checkUserQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($data, $checkUserQuery);

    if (mysqli_num_rows($result) > 0) {
        $errors[] = "User with this email already exists. Please choose a different email.";
    }

    // Validate password complexity (you can adjust the regex pattern based on your requirements)
    if (!preg_match('/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password)) {
        $errors[] = "Password must contain at least 8 characters, one letter, one number, and one special character.";
    }

    // Validate phone number length
    if (strlen($phonenumber) !== 11) {
        $errors[] = "Phone number must be 11 digits long.";
    }

    // Check if passwords match

    // If no errors, proceed with user registration
    if (empty($errors)) {
        // Hash the password for security
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // SQL query to insert user data into the 'users' table
        $sql = "INSERT INTO users (name, email, phonenumber, password) 
                VALUES ('$name', '$email', '$phonenumber', '$password')";

        // Execute the query
        if ($data->query($sql) === TRUE) {
            echo "<script>alert('Signup successful!')</script>";
            // You might want to redirect to a success page or perform additional actions
        } else {
            $errors[] = "Error: " . $sql . "<br>" . $data->error;
        }
    }
}

// Display errors
foreach ($errors as $error) {
    echo "<script>alert('$error')</script>";
}
?>








          </div>
        </div>
      </div>

      <script>
      const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");

signupBtn.onclick = (()=>{
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{
  signupBtn.click();
  return false;
});
</script>

  
</body>
<script src="auth.js"></script>
</html>