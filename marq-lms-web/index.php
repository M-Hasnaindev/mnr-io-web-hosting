<?php
    session_start();
    
include 'configuration/config.php';
    
?>

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
    <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
    <title>Home</title>
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
                <li class="nav-item active"><a href="index.php" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                <li class="nav-item" id="section1">
                    <a href="#section2" class="nav-link"><i class="fa fa-id-badge" aria-hidden="true"></i> Student Services</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="https://kfueit.edu.pk/new-update?1=1" class="nav-link"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Notice Board</a>
                </li> -->



                <?php

if (isset($_SESSION['u_id'])) {
    ?>
<div class="dropdown">

<img     class="rounded-circle"  btn btn-secondary dropdown-toggle" type="button"
    id="dropdownMenuButton1" data-bs-toggle="dropdown" 
    src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""
    style="width: 40px; height: 40px;">
<span class="d-none d-lg-inline-flex">    </span>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a  class="dropdown-item"  href="index.php?action=profile_clicked" >My Profile</a></li>
    <li><a class="dropdown-item" href="index.php?actionn=profile_clickedd" >Dashboard</a></li>
    <li><a  class="dropdown-item" href="logout.php" >Log Out</a></li>
</ul>
</div>
    <?php
} else {
    ?>
    <li class="nav-item">
        <a href="signin.php" class="nav-link">
            <i class="fa fa-sign-in fa-1x" aria-hidden="true"></i> Sign In
        </a>
    </li>
    <?php
}
?>









            </ul>
        </div>
    </nav>
    <!--NavBar End-->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/slide1.png" data-src="holder.js/900x400?theme=social" data-holder-rendered="true" >
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/slide2.png" data-src="holder.js/900x400?theme=social" data-holder-rendered="true">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/slide3.png" data-src="holder.js/900x400?theme=social" data-holder-rendered="true">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/slide4.png" data-src="holder.js/900x400?theme=industrial" data-holder-rendered="true">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--Slider End-->

      <div class="container mycntr">
          <div class="row">
              <div class="col-lg-12 stdhead" id="section2">
                <a href="#section1"><h4>Student Service</h4></a>
              </div>
          </div>
          <div class="row text-center">
              <div class="col-sm-6 col-md-6 col-lg-3 col-lg-3 popuptext">          
                <a href="#popup1" data-toggle="modal" data-target="#myModal"><img src="img/academics.png" class="img-thumbnail" alt="academics" width="204" height="156">
                    <p>Academics</p>
                </a>
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Academics</h4>
                          <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body">
                            <ol>
                                <li value="1">E-Library (Coming Soon)</li>
                                <li value="2">HEC Digital Library.</li>
                                <li value="3">Student Hand Book. </li>
                                <li value="4">Student ID Card. </li>
                              </ol>
                        </div>                       
                      </div>
                    </div>
                  </div>                  
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3 col-lg-3 popuptext">
                <a href="#popup2" data-toggle="modal" data-target="#myModal2"><img src="img/examination.png" class="img-thumbnail" alt="examination" width="204" height="156">
                    <p>Examination</p>
                </a>
                <div class="modal" id="myModal2">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Examination</h4>
                          <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body">
                            <ol>
                                <li value="1">Make your Date Sheet.</li>
                                <li value="2">Apply for Additional Copies of Transcript of Record.</li>
                                <li value="3">Apply for Degree.</li>
                                <li value="4">Apply for Partial Transcript.</li>
                                <li value="5">Apply for Rechecking of Papers.</li>
                                <li value="6">Apply for Rescheduling of Papers.</li>
                                <li value="7"> Overseas Examination System.</li>
                              </ol>
                        </div>                        
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 col-lg-3 popuptext">
                <a href="#popup3" data-toggle="modal" data-target="#myModal3"><img src="img/office.png" class="img-thumbnail" alt="office" width="204" height="156">
                    <p>Registrar Office</p>
                </a>
                <div class="modal" id="myModal3">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Modal Heading</h4>
                          <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body">
                            <ol>
                                <li value="1">Admission Withdrawal Request</li>
                                <li value="2">Campus Change Request</li>
                                <li value="3">Continuation from 2-year (Pass out) to 4-year BS Program.</li>
                                <li value="4">Credit Transfer.</li>
                                <li value="5">Documents Verification (Hope Certificate)</li>
                                <li value="6">Duplicate Id Card Request.</li>
                                <li value="7">Migration Certificate.</li>
                                <li value="8">Profile Picture Change.</li>
                                <li value="9">Proforma for Disable Students.</li> 
                                <li value="10">Re-Admission Request.</li>
                                <li value="11">Semester Freeze.</li>
                                <li value="12"> Semester Unfreeze.</li>
                                <li value="13">Student Profile Change.</li>
                                <li value="14">Study Program Conversion.</li>
                              </ol>
                          </div>                        
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 col-lg-3 popuptext">
                <a href="#popup4"><img src="img/accounts.png" class="img-thumbnail" alt="accounts" width="204" height="156">
                    <p>Accounts</p>
                </a>
            </div>
          </div>
          <div class="row" style="text-align: center;">
            <div class="col-sm-6 col-md-6 col-lg-4 col-lg-4 popuptext">          
              <a href="https://eportal.kfueit.edu.pk/login?main=825&parent=E-Portal&menu=side-link"><img src="img/lms.png" class="img-thumbnail" alt="lms" width="204" height="156">
                  <p>LMS</p>
              </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-lg-4 popuptext">
              <a href="https://kfueit.edu.pk/available-scholarships"><img src="img/scholar.png" class="img-thumbnail" alt="scholarship" width="204" height="156">
                  <p>Scholarship</p>
              </a>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4 col-lg-4 popuptext">
              <a href="https://kfueit.edu.pk/academic-calendar?main=747&parent=ACADEMICS"><img src="img/table.png" class="img-thumbnail" alt="table" width="204" height="156">
                  <p>Academic Calendar</p>
              </a>
          </div>
        </div>
        </div>
        <!--Modal 3rd block End-->
        <div class="container-fluid mt-2 mb-2">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-2" style="margin: 0px 0px; padding: 0px 0px;">
              <div class="piccontent"><a href="#">
                <div class="content-overlay"></div> <img class="content-image" src="img/ouruni.png">
                <div class="content-details fadeIn-bottom">
                  <a href=""><button type="button" class="btn">Take a Tour</button></a>
                </div></a>
              </div>
            </div>
          </div>
        </div>
        <!--Tour End-->
        <div class="container">
          <div class="row mt-2 mb-2">
            <div class="col-lg-12">
              <h4 style="text-transform: uppercase; text-align: center; padding: 10px 10px; color: #153980; font-weight: bold;">Popular Courses</h4>
            </div>
          </div>
          <div class="row gy-4">
            <div class="col-sm mb-4">
                <div class="card h-100 cssanimation fadeInBottom">
                    <img src="https://kfueit.edu.pk/uploads/4/hcia-course-1-fb.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #153980; font-weight: bold;">HUAWEI Short Courses</h5>
                      <p class="card-text">Recommendation. Learning mandatory ICT courses to achieve great transformation in the workplace. Popular Certification.</p>
                      <a href="#!" class="btn btn-sm morebtn">Learn More</a>
                        </div>
                </div>
            </div>
            <div class="col-sm mb-4">
              <div class="card h-100 cssanimation2 fadeInBottom2">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6c0UCi4J13gey5V5Jek0vfoOkD_56xvj1Kg&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title" style="color: #153980; font-weight: bold;">e-Rozgaar</h5>
                    <p class="card-text">e-Rozgaar Center Kfueit Rahim Yar Khan is one of 40 centers of Punjab where students are trained to monetize their skills via online platforms.</p>
                    <a href="#!" class="btn btn-sm morebtn">Learn More</a>
                  </div>
              </div>
          </div>
            <div class="col-sm mb-4">
                <div class="card h-100 cssanimation3 fadeInBottom3">
                    <img src="https://kfueit.edu.pk/uploads/4/navttc-batch-2-banner-2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #153980; font-weight: bold;">NAVTTC Courses</h5>
                      <p class="card-text">Prime Minister Hunarmand Pakistan Program. Apply for 3rd Batch of Prime Minister Hunarmand Program · National Employment Exchange Tool (NEXT) · Apply for Accreditation.</p>
                      <a href="#!" class="btn btn-sm morebtn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--Card SEction End-->
        <div class="container-fluid mb-4">
          <div class="row mt-2 mb-2">
            <div class="col-lg-12">
              <h4 style="text-transform: uppercase; text-align: center; padding: 10px 10px; color: #153980; font-weight: bold;">Campus Life</h4>
            </div>
          </div>
          <div class="row">
            <div class="accordian">
              <ul>
              <li>
                <div class="image_title">
                  <a href="#">Beauty of Campus</a>
                </div> 
                <a href="#">
                  <img src="img/pic4.jpg"/>
                </a>
              </li>
              <li>
                <div class="image_title">
                  <a href="#">Grand Cultural Fiesta – 3</a>
                </div>
                <a href="#">
                  <img src="img/pic6.jpg"/>
                </a>
              </li>
              <li>
                <div class="image_title">
                  <a  href="#">K-MUN 2020 Highlights</a>
                </div>
                <a  href="#">
                  <img src="img/pic2.jpg"/>
                </a>
              </li>
              <li>
                <div class="image_title">
                  <a href="#">Spring at KFUEIT – A Beautiful & Environment Friendly Campus</a>
                </div>
                <a href="#">
                  <img src="img/pic3.jpg"/>
                </a>
              </li>
              <li>
                <div class="image_title">
                  <a href="#">Collaboration Between KFUEIT and UUM</a>
                </div>
                <a href="#">
                  <img src="img/pic5.jpg"/>
                </a>
              </li>
            </ul>
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
              <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
      
</header>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="myscripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous" asp-append-version="true">
      </script>   
   
  </body>
</html>