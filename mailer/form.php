<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['phone'];
    $condition="SELECT * FROM `subscribtion` WHERE `email`='$email' or `name`='$name'";
    $query=mysqli_query($con,$condition);
    $rows=mysqli_num_rows($query);
    if($rows>0){
        $_SESSION['danger-msg']="Account Already registered";
    }
    else{
        $insert="INSERT INTO `subscribtion`(`id`, `name`, `email`, `phone`) 
        VALUES (null,'$name','$email','$password')";
        mysqli_query($con,$insert);
        include 'mailer.php';
        $_SESSION['success-msg']="Account registered Successfully";
    }
}
?>