<?php
session_start();
include 'connection.php';
include 'form.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 300px;
    box-shadow:0px 0px 10px #4caf50;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

select, button {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button {
    background-color: #45a049;
}

select:hover, button:hover {
    background-color: #45a049;
}

.login-fields {
    display: none;
}

#action {
    margin-top: 10px; /* Add margin to the action dropdown */
}

.message {
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 4px;
    color: #fff;
}

.success {
    background-color: #4caf50;
}

.danger {
    background-color: #f44336;
}
    </style>
</head>
<body>
<div class="form">
    <label for="action">Select Authentication Action:</label>

    <select id="action" onchange="toggleFields()">
        <option value="register">Register</option>
        <option value="login">Login</option>
    </select>
<br><br>
<form method="POST">
    <div class="register-fields">

        <label for="u_name">Username:</label>
        <input type="text" id="u_name" name="u_name">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <button type="submit" name="register">Submit</button>
    </div>
</form>
<form>
    <div class="login-fields">
        <label for="login_email">Email:</label>
        <input type="email" id="login_email" name="login_email">
        <br>
        <label for="login_password">Password:</label>
        <input type="password" id="login_password" name="login_password">
        <br>
        <button type="submit">Submit</button>
    </div>
</form>
</div>
<script>
    function toggleFields() {
        var action = document.getElementById("action").value;
        var registerFields = document.querySelector(".register-fields");
        var loginFields = document.querySelector(".login-fields");

        if (action === "register") {
            registerFields.style.display = "block";
            loginFields.style.display = "none";
        } else if (action === "login") {
            registerFields.style.display = "none";
            loginFields.style.display = "block";
        }
    }

    $(document).ready(function() {
        $('#msg').fadeIn().delay(3000).fadeOut();
    });
</script>
</body>
</html>