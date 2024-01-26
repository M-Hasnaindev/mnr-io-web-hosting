<?php

session_start();
include "../users/connect.php";


?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Edit profile page - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">
<link rel="stylesheet" href="users/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="users/assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="users/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="users/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="users/assets/css/vendor/sal.css">
    <link rel="stylesheet" href="users/assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="users/assets/css/vendor/green-audio-player.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstr<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<style type="text/css">
    	
body{
    margin-top:20px;
    background:#f5f5f5;
}
/**
 * Panels
 */
/*** General styles ***/
.panel {
  box-shadow: none;
}
.panel-heading {
  border-bottom: 0;
}
.panel-title {
  font-size: 17px;
}
.panel-title > small {
  font-size: .75em;
  color: #999999;
}
.panel-body *:first-child {
  margin-top: 0;
}
.panel-footer {
  border-top: 0;
}

.panel-default > .panel-heading {
    color: #333333;
    background-color: transparent;
    border-color: rgba(0, 0, 0, 0.07);
}

form label {
    color: #999999;
    font-weight: 400;
}

.form-horizontal .form-group {
  margin-left: -15px;
  margin-right: -15px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    text-align: right;
    margin-bottom: 0;
    padding-top: 7px;
  }
}

.profile__contact-info-icon {
    float: left;
    font-size: 18px;
    color: #999999;
}
.profile__contact-info-body {
    overflow: hidden;
    padding-left: 20px;
    color: #999999;
}
.profile-avatar {
  width: 200px;
  position: relative;
  margin: 0px auto;
  margin-top: 196px;
  border: 4px solid #f3f3f3;
}
    </style>
</head>
<body>








<div class="container bootstrap snippets bootdeys">
<div class="row">
<div class="col-xs-12 col-sm-9">

<form action="myprofile.php" method="post" enctype="multipart/form-data">

<div class="panel panel-default">
<div class="panel-body text-center">
<img  id="userAvatar" src="" class="img-circle profile-avatar" alt="User avatar">
<input type="file" name="img" id="fileInput">

</div>

</div>

                            <div class="panel panel-default">
                            <div class="panel-heading">
                            <h4 class="panel-title">Contact info</h4>
                            </div>

                            <div class="panel-body">

                            <div class="form-group">
                            <label class="col-sm-2 control-label">User_name</label>
                            <div class="col-sm-10">
                            <input type="text" name="u_name" class="form-control">
                            </div>
                            </div>




                            <!-- <div class="panel-body"> -->
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Work number</label>
                            <div class="col-sm-10">
                            <input type="tel" name="work_number" class="form-control">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-sm-2 control-label">Work address</label>
                            <div class="col-sm-10">
                            <input type="text" name="work_address" class="form-control">
                            </div>
                            </div>


                            <div class="form-group">
                            <label class="col-sm-2 control-label">Mobile number</label>
                            <div class="col-sm-10">
                            <input type="tel" name="mobile_number" class="form-control">
                            </div>
                            </div>
                            

                              <div class="form-group">
                              <label class="col-sm-2 control-label">E-mail address</label>
                              <div class="col-sm-10">
                               <input type="email" class="form-control">
                            </div>
                            </div>

                            <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                            <!-- <a href="" name="submit"   class="btn btn-primary">Submit</a> -->
                            <button type="reset"  name="submit" class="btn btn-default">Submit</button>      
                            <button type="reset" class="btn btn-default">Cancel</button>
                            </div>
                            </div>
                            
                            </div>
                            </div>
                            

                            </div>
                            </div>
                            </form>
                            </div>
                            </div>
                            </div>
</form>
<?php
// Assuming you have a valid database connection in $conn
// include "../users/connect.php";

if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST["u_name"];
    $workNumber = $_POST["work_number"];
    $workAddress = $_POST["work_address"];
    $mobileNumber = $_POST["mobile_number"];

    // Validate input fields
    if (empty($name) || empty($workNumber) || empty($workAddress) || empty($mobileNumber)) {
        $response = array("success" => false, "message" => "Please fill in all required fields.");
        echo json_encode($response);
        exit();
    }

    // Check if user with the same name already exists
    $checkUserQuery = "SELECT * FROM update_info WHERE u_name = '$name'";
    $result = mysqli_query($conn, $checkUserQuery);

    if (mysqli_num_rows($result) > 0) {
        $response = array("success" => false, "message" => "User with this name already exists. Please choose a different name.");
        echo json_encode($response);
        exit();
    }

    // Check if work_number is 10 digits
    if (strlen($workNumber) !== 10 || !is_numeric($workNumber)) {
        $response = array("success" => false, "message" => "Work number must be a 10-digit numeric value.");
        echo json_encode($response);
        exit();
    }

    // Check if mobile_number is 11 digits
    if (strlen($mobileNumber) !== 11 || !is_numeric($mobileNumber)) {
        $response = array("success" => false, "message" => "Mobile number must be an 11-digit numeric value.");
        echo json_encode($response);
        exit();
    }

    // Handle file upload
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $response = array("success" => false, "message" => "File is not an image.");
        echo json_encode($response);
        exit();
    }

    // Check file size
    if ($_FILES["img"]["size"] > 5000000) {
        $response = array("success" => false, "message" => "Sorry, your file is too large.");
        echo json_encode($response);
        exit();
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $response = array("success" => false, "message" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        echo json_encode($response);
        exit();
    }

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFile)) {
        $response = array("success" => true, "message" => "The file " . basename($_FILES["img"]["name"]) . " has been uploaded.", "imgPath" => $targetFile);
    } else {
        $response = array("success" => false, "message" => "Sorry, there was an error uploading your file.");
        echo json_encode($response);
        exit();
    }

    // Continue with the database insertion
    $imgPath = $targetFile;
    $sql = "INSERT INTO update_info (img, u_name, work_number, work_addres, mobile_number)
            VALUES ('$imgPath', '$name', '$workNumber', '$workAddress', '$mobileNumber' )";

    if ($conn->query($sql) === TRUE) {
        $response = array("success" => true, "message" => "Record inserted successfully", "imgPath" => $imgPath);
    } else {
        $response = array("success" => false, "message" => "Error: " . $sql . "<br>" . $conn->error);
    }

    // Close the database connection
    $conn->close();

    // Send JSON response back to the AJAX request
    echo json_encode($response);
} else {
    // Handle non-AJAX requests as before
    echo "";
}
?>
                            <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
                            <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                            <script type="text/javascript">
$(document).ready(function () {
    // Handle form submission using AJAX
    $("form").submit(function (e) {
        e.preventDefault();

        $.ajax({
            url: "myprofile.php",
            type: "post",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (response) {
                // Parse the JSON response
                var data = JSON.parse(response);

                if (data.success) {
                    // Show success toast
                    toastr.success(data.message);

                    // Update image source and other details
                    $("#userAvatar").attr("src", data.imgPath);
                    // Update other details as needed

                } else {
                    // Show error toast
                    toastr.error(data.message);
                }
            },
            error: function (xhr, status, error) {
                // Show error toast for AJAX request failure
                toastr.error("Error: " + status + " - " + error);
            }
        });
    });
});
</script>


                            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

                            </body>
                            </html>

