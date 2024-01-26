<?php
    session_start();
// Logout logic
        if (isset($_POST['logout'])) {
            // Unset the user_id session variable
            unset($_SESSION['Id']);
            // Other logout-related logic...
        }



    header("location:../Auth/authentication.php");
?>