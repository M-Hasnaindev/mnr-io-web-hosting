<?php
// session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MARQ | Hire developers & digital Marketers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/sal.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/green-audio-player.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional styles for the backdrop */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .backdrop {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
            backdrop-filter: blur(5px); /* Apply blur effect */
            z-index: 1000;
        }

        .confirmation-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            z-index: 1001;
        }
    </style>

</head>

<body class="sticky-header">
    
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <div class="my_switcher d-none d-lg-block">
        <ul>
            <li title="Light Mode">
                <a href="javascript:void(0)" class="setColor light" data-theme="light">
                    <i class="fal fa-lightbulb-on"></i>
                </a>
            </li>
            <li title="Dark Mode">
                <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                    <i class="fas fa-moon"></i>
                </a>
            </li>
        </ul>
    </div>

    <div id="main-wrapper" class="main-wrapper">
    <header class="header axil-header header-style-1">
            <div id="axil-sticky-placeholder"></div>
            <div class="axil-mainmenu">
                <div class="container">
                    <div class="header-navbar">
                        <div class="header-logo">
                            <a href="index-1.html"><img src="./assets/media/main-web-logo.png" alt="logo" class="web-logo"></a>
                        </div>
                        <div class="header-main-nav">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav" id="mobilemenu-popup">
                                <div class="d-block d-lg-none">
                                    <div class="mobile-nav-header">
                                        <div class="mobile-nav-logo">
                                            <a href="index-1.html">
                                                <img src="./assets/media/main-web-logo.png" alt="logo" class="web-logo">
                                            </a>
                                        </div>
                                        <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <ul class="mainmenu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="service.php">Services</a></li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                    <li><a href="about-us.php">About</a></li>                                    
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <!-- <li><a href="authentication.php"><i class="fa-solid fa-user"></i></a></li> -->
                                    <?php
                                    // session_start();
                             
                                            if(isset($_SESSION['u_id'])){
                                        ?>                                    


<div class="dropdown">
    <img class="rounded-circle btn btn-secondary dropdown-toggle" type="button"
        id="dropdownMenuButton1" data-bs-toggle="dropdown" 
        src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""
        style="width: 40px; height: 40px;">
    <span class="d-none d-lg-inline-flex">    </span>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="index.php?action=profile_clicked">My Profile</a></li>
        <li><a class="dropdown-item" href="index.php?actionn=profile_clickedd">Dashboard</a></li>
        <li><a class="dropdown-item" href="#" onclick="showConfirmation()">Log Out</a></li>
    </ul>
</div>


<div class="backdrop" id="backdrop"></div>
<div class="confirmation-box" id="confirmationBox">
    <p>Are you sure you want to logout this session?</p>
    <button class="btn btn-primary" onclick="logout()">Yes, Logout</button>
    <button class="btn btn-secondary" onclick="cancelLogout()">Cancel</button>
</div>
<script>
    // JavaScript functions
    function showConfirmation() {
        // Show the backdrop and confirmation box
        document.getElementById('backdrop').style.display = 'block';
        document.getElementById('confirmationBox').style.display = 'block';
    }

    function logout() {
        // Redirect to logout page or perform logout action
        window.location.href = 'logout.php';
    }

    function cancelLogout() {
        // Hide the backdrop and confirmation box
        document.getElementById('backdrop').style.display = 'none';
        document.getElementById('confirmationBox').style.display = 'none';
    }
</script>

                                    

                                        <?php
                                                    }
                                                    else{
                                                ?>
                                           <li><a href="authentication.php"><i class="fa-solid fa-user"></i></a></li>
                                    

                                                                            <?php
                                                    }
                                                ?>

                                    </ul>
                            </nav>
                            <!-- End Mainmanu Nav -->
                        </div>
                        <div class="header-action">
                            <ul class="list-unstyled">
                                <li class="sidemenu-btn d-lg-block d-none">
                                    <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                                    <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="my_switcher d-block d-lg-none">
                                    <ul>
                                        <li title="Light Mode">
                                            <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                                <i class="fal fa-lightbulb-on"></i>
                                            </a>
                                        </li>
                                        <li title="Dark Mode">
                                            <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                                <i class="fas fa-moon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- section -->


        <section class="banner banner-style-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                            <h1 class="title">Digital product design agency</h1>
                            <span class="subtitle">We are professional web designers and website developers hooking up amazing websites.</span>
                            <?php
                                    // session_start();
                             
                                            if(isset($_SESSION['u_id'])){
                                        ?>                                    


<a href="marq-lms-web/signin.php" class="axil-btn btn-fill-primary btn-large">Get Started</a>

                                    

                                        <?php
                                                    }
                                                    else{
                                                ?>
                            <a href="authentication.php" class="axil-btn btn-fill-primary btn-large">Get Started</a>
                                    

                                                                            <?php
                                                    }
                                                ?>






                            <!-- <a href="authentication.html" class="axil-btn btn-fill-primary btn-large">Get Started</a> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumbnail">
                            <div class="large-thumb" data-sal="zoom-in" data-sal-duration="500" data-sal-delay="300">
                                <img src="assets/media/banner/laptop.png" alt="Laptop">
                            </div>
                            <ul class="list-unstyled shape-group">
                                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="400">
                                    <img src="assets/media/banner/marker.png" alt="Marker">
                                </li>
                                <li class="shape shape-2" data-sal="slide-right" data-sal-duration="500" data-sal-delay="500">
                                    <img src="assets/media/banner/chat-icon.png" alt="Chat">
                                </li>
                                <li class="shape shape-3" data-sal="slide-left" data-sal-duration="500" data-sal-delay="600">
                                    <img src="assets/media/banner/sticker.png" alt="sticker">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-13">
                <li class="shape shape-1" data-sal="slide-down" data-sal-duration="500" data-sal-delay="100">
                    <img src="assets/media/others/bubble-18.png" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="assets/media/others/bubble-19.png" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/hand-2.png" alt="Hand">
                </li>
                <li class="shape shape-4" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-5" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/bubble-14.png" alt="Bubble">
                </li>
            </ul>
        </section>

       
