<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Update Profile</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg sticky-top navStyle">
        <a class="brand-navbar" href="index.php">
            <img src="img/logo.png" alt="Responsive image" height="40px">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu">
            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ml-auto navList">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li class="nav-item" id="section1">
                    <a href="index.php" class="nav-link"><i class="fa fa-id-badge" aria-hidden="true"></i> Student Services</a>
                </li>
                <li class="nav-item">
                    <a href="https://kfueit.edu.pk/new-update?1=1" class="nav-link"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Notice Board</a>
                </li><li class="nav-item dropdown" style="cursor: pointer;">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://i.pinimg.com/originals/5d/f9/62/5df962f53d00e901626f5f91872a524c.jpg" class="rounded-circle" width="40" height="40" style="border: 2px solid #0DB14B; margin-top: -10px;"  alt="">
                    </a>
                    <div class="dropdown-menu boxshow" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                      <a class="dropdown-item " href="updateprofile.php">Personal Information</a>
                      <a class="dropdown-item " href="application.php">Write Application</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="index.php">Log out</a>
                    </div>
                  </li>
            </ul>
        </div>
    </nav>
    <!--NavBar End-->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-12">
                <form id="send_application" method="post">
                    <div class="card-body profilecard">
                            <h4 style="padding-top: 10px; color: #153980; font-weight: bold; text-align: center;">Write Your Application</h4>
                        <!--Heading end-->
                        <div class="row">
                            <div class="col-md-4 mt-2 myaddbtn">
                                <p>To,
                                    <div class="form-group">
                                        <div class="input-group control-group after-add-more">
                                            <select type="text"class="form-control" name="addmore[]" id="principal" aria-hidden="true">
                                                <option value="" selected disabled >Please Select</option>
                                                <option value="1">Engr. Ali</option>
                                                <option value="2">Dr Muhammad Wasay</option>
                                                <option value="3">Engr. Kamran</option>
                                                <option value="4">Examination Department</option>
                                                <option value="5">Registrar Office</option>
                                            </select>
                                            <div class="input-group-btn">
                                                <button class="btn btn-success2 add-more" type="button">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="copy hide">
                                        <div class="control-group input-group" style="margin-top:10px">
                                            <input type="text" name="addmore[]" class="form-control">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger remove" type="button">
                                                    <i class="fa fa-remove"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                        <!--First row End-->
                        <div class="row">
                            <div class="col-md-4">
                                <select class="form-control mb-3" name="" id="" aria-hidden="true">
                                    <option value="" selected disabled >Department</option>
                                    <option value="1">BS Computer Science</option>
                                    <option value="2">BS Software Engineering</option>
                                </select>
                            </div>
                        </div>
                        <!--Second row End-->
                        <div class="row">
                            <div class="col-md-4">
                                <input type="date" class="form-control" id="date_" name="date_">
                            </div>
                        </div>
                        <!--Third section end-->
                        <div class="row">
                            <div class="col-md-4 mt-3">
                                <input type="email" class="form-control" id="Email" placeholder="abc@kfueit.edu.pk" required>
                            </div>
                        </div>
                        <!--Fourth row End-->
                        <div class="row">
                            <div class="col-md-12 mt-3 myaddbtn">
                                <label>Subject</label>
                                    <div class="form-group">
                                        <div class="input-group control-group after-add-moree">
                                            <select type="text"class="form-control" name="addmoree[]" id="sub" aria-hidden="true">
                                                <option value="" selected disabled >Select Your Subject</option>
                                                <option value="1">Sick Leave</option>
                                                <option value="2">Duplicate ID Card</option>
                                                <option value="3">Registration Issue</option>
                                                <option value="4">Other</option>
                                            </select>
                                            <div class="input-group-btn">
                                                <button class="btn btn-success2 add-moree" placeholder="Write Your Subject" type="button">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="copy hide">
                                        <div class="control-group input-group" style="margin-top:10px">
                                            <input type="text" name="addmore[]" class="form-control">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger remove" type="button">
                                                    <i class="fa fa-remove"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!--Fifth row End-->
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <textarea name="APPLICATION_TEXT" id="APPLICATION_TEXT" placeholder="Write Your Application Here" class="form-control" cols="50" rows="5"></textarea>
                            </div>
                        </div>
                        <!--Sixth row End-->
                        <div class="row mt-4">
                            <div class="col-md-12 ">
                                <p>Sincerly,</p>
                                <input type='file' class="mysignpicture" onchange="readURL(this);" />
                                <img id="blah" class="signature"/>
                            </div>
                        </div>
                        <!--Seventh row End-->
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <input type="submit" class="btn my-button" value="Submit">
                            </div>
                        </div>
                        <!--Last button End-->
                       
                    </div>
               </form>
            </div>
        </div>
    </div>
     <!--Footer Start-->
     <footer class=" upfooter">
        <div class="card mx-5">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-text pull-left">
                        <div class="d-flex">
                          <img src="img/UEIT_Logo.png" class="img-fluid" width="210" alt="">
                        </div>
                        <p class="card-text">Khwaja Fareed<br>
                         University of Engineering & Information Technology<br>
                          Abu Dhabi Road, Rahim Yar Khan</p>
                        <div class="social mt-1 mb-3">
                            <a href="https://www.facebook.com/kfueit.official"><i class="fa fa-facebook-official fa-lg"></i></a>
                            <a href="https://www.instagram.com/kfueit.official/?igshid=j0k68f3o9584&hl=en"><i class="fa fa-instagram fa-lg"></i></a>
                            <a href="https://twitter.com/kfueit_official"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="https://pk.linkedin.com/company/khawaja-fareed-university-of-engineering-&-information-technology"><i class="fa fa-linkedin-square fa-lg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <h5 class="heading lastlinks">Additional Links</h5>
                    <ul>
                        <li><a href="https://kfueit.edu.pk/registrar-department?main=620&parent=Administration">Administration</a></li>
                        <li><a href="https://kfueit.edu.pk/library?1=1&main=620&parent=Administration">Library</a></li>
                        <li><a href="https://kfueit.edu.pk/scholarships-and-financial-assistance-department-1?main=620&parent=Administration">Scholarships</a></li>
                        <li><a href="https://kfueit.edu.pk//career-at-kfueit?main=814&parent=Careers&menu=side-link">Career</a></li>
                        <li><a href="https://kfueit.edu.pk/research-1?main=958&parent=Research">Research Centers</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mt-2 mb-2">
                    <h5 class="heading lastlinks">About Us</h5>
                    <ul class="card-text">
                        <li><a href="about.php">Why KFUEIT</a></li>
                        <li><a href="signup.php">Join Us</a></li>
                        <li><a href="faqs.php">FAQ's</a></li>
                    </ul>
                </div>
        </div>
    </div>
  </footer>
  <!--First footer End-->
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
      
</header>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="myscripts.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>