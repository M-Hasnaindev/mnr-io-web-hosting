<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
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
                </li>
                <li class="nav-item dropdown" style="cursor: pointer;">
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
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h5 class="text-center mt-2" style="color: #153980; font-weight: 500;">Welcome Back !</h5>
                            <img src="https://i.pinimg.com/originals/5d/f9/62/5df962f53d00e901626f5f91872a524c.jpg" class="rounded-circle" height="120" width="120" style="border: 3px solid #0DB14B; padding: 3px;" alt="User profile">
                        </div>
                        <h4 class="text-center mt-2" style="color: #153980; font-weight: 500;">Maheen Qaisar</h4>
                        <p class="text-center" style="color: #0DB14B; margin-bottom: 0px;">Software Engineering</p>
                        <a href="application.php"><p class="text-center" style="color: #153980; margin-bottom: 0px;">Write your Application</p></a>
                        <div class="text-center">
                            <img src="img/UEIT_Logo.png" class="img-fluid" width="210" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card p-3">
                  <div id="accordion">
                    <div class="card text-center">
                      <div class="card-header lowerline" id="headingOne headingTwo">
                          <button class="btn myfocus" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 style="color: #153980; font-weight: bold; margin-bottom: 0px;">Send Application</h5>
                          </button>
                          <button class="btn myfocus collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h5 style="color: #0DB14B; font-weight: bold; margin-bottom: 0px;">Received Application</h5>
                          </button>
                          <hr>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table id="tableData" class="table text-center">
                              <thead>
                                <tr class="headingsection">
                                  <th scope="col">Name</th>
                                  <th scope="col">Date</th>
                                  <th scope="col">Subject</th>
                                  <th scope="col">Application</th>
                                  <th scope="col">Progress</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>18-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">                      
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Progress of Your Application</h5>
                                                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                </div>                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  <div class="box">
                                                    <div class="percent">
                                                      <svg>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                      </svg>
                                                      <div class="num">
                                                        <h2>87<span>%</span></h2>
                                                      </div>
                                                    </div>
                                                    <h5 class="text">Progress</h5>
                                                  </div>
                                                </div>                       
                                              </div>
                                            </div>
                                       </div>
                                  </td>
                                </tr>
                                <!--first table first row End-->
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>18-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">                      
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Progress of Your Application</h5>
                                                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                </div>                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  <div class="box">
                                                    <div class="percent">
                                                      <svg>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                      </svg>
                                                      <div class="num">
                                                        <h2>87<span>%</span></h2>
                                                      </div>
                                                    </div>
                                                    <h5 class="text">Progress</h5>
                                                  </div>
                                                </div>                       
                                              </div>
                                            </div>
                                       </div>
                                  </td>
                                </tr>
                                <!--first table second row End-->
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>18-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">                      
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Progress of Your Application</h5>
                                                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                </div>                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  <div class="box">
                                                    <div class="percent">
                                                      <svg>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                      </svg>
                                                      <div class="num">
                                                        <h2>87<span>%</span></h2>
                                                      </div>
                                                    </div>
                                                    <h5 class="text">Progress</h5>
                                                  </div>
                                                </div>                       
                                              </div>
                                            </div>
                                       </div>
                                  </td>
                                </tr>
                                <!--first table third row End-->
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>18-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">                      
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Progress of Your Application</h5>
                                                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                </div>                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  <div class="box">
                                                    <div class="percent">
                                                      <svg>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                      </svg>
                                                      <div class="num">
                                                        <h2>87<span>%</span></h2>
                                                      </div>
                                                    </div>
                                                    <h5 class="text">Progress</h5>
                                                  </div>
                                                </div>                       
                                              </div>
                                            </div>
                                       </div>
                                  </td>
                                </tr>
                                <!--first table fourth row End-->
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>18-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">                      
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Progress of Your Application</h5>
                                                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                </div>                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  <div class="box">
                                                    <div class="percent">
                                                      <svg>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                      </svg>
                                                      <div class="num">
                                                        <h2>87<span>%</span></h2>
                                                      </div>
                                                    </div>
                                                    <h5 class="text">Progress</h5>
                                                  </div>
                                                </div>                       
                                              </div>
                                            </div>
                                       </div>
                                  </td>
                                </tr>
                                <!--first table fifth row End-->
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>18-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">                      
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Progress of Your Application</h5>
                                                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                </div>                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  <div class="box">
                                                    <div class="percent">
                                                      <svg>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                      </svg>
                                                      <div class="num">
                                                        <h2>87<span>%</span></h2>
                                                      </div>
                                                    </div>
                                                    <h5 class="text">Progress</h5>
                                                  </div>
                                                </div>                       
                                              </div>
                                            </div>
                                       </div>
                                  </td>
                                </tr>
                                <!--first table sixth row End-->
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>18-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">                      
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Progress of Your Application</h5>
                                                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                </div>                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  <div class="box">
                                                    <div class="percent">
                                                      <svg>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                      </svg>
                                                      <div class="num">
                                                        <h2>87<span>%</span></h2>
                                                      </div>
                                                    </div>
                                                    <h5 class="text">Progress</h5>
                                                  </div>
                                                </div>                       
                                              </div>
                                            </div>
                                       </div>
                                  </td>
                                </tr>
                                <!--first table seventh row End-->
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>18-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">                      
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Progress of Your Application</h5>
                                                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                </div>                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  <div class="box">
                                                    <div class="percent">
                                                      <svg>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                      </svg>
                                                      <div class="num">
                                                        <h2>87<span>%</span></h2>
                                                      </div>
                                                    </div>
                                                    <h5 class="text">Progress</h5>
                                                  </div>
                                                </div>                       
                                              </div>
                                            </div>
                                       </div>
                                  </td>
                                </tr>
                                <!--first table Eight row End-->
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>18-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">                      
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Progress of Your Application</h5>
                                                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                </div>                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  <div class="box">
                                                    <div class="percent">
                                                      <svg>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                      </svg>
                                                      <div class="num">
                                                        <h2>87<span>%</span></h2>
                                                      </div>
                                                    </div>
                                                    <h5 class="text">Progress</h5>
                                                  </div>
                                                </div>                       
                                              </div>
                                            </div>
                                       </div>
                                  </td>
                                </tr>
                                <!--first table Ninth row End-->
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>18-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">                      
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h5 class="modal-title">Progress of Your Application</h5>
                                                  <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                                </div>                        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                  <div class="box">
                                                    <div class="percent">
                                                      <svg>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                        <circle cx="70" cy="70" r="70"></circle>
                                                      </svg>
                                                      <div class="num">
                                                        <h2>87<span>%</span></h2>
                                                      </div>
                                                    </div>
                                                    <h5 class="text">Progress</h5>
                                                  </div>
                                                </div>                       
                                              </div>
                                            </div>
                                       </div>
                                  </td>
                                </tr>
                                <!--first table Tenth row End-->
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>20-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                          <div class="modal-content">                      
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                              <h5 class="modal-title">Progress of Your Application</h5>
                                              <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                            </div>                        
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                              <div class="box">
                                                <div class="percent">
                                                  <svg>
                                                    <circle cx="70" cy="70" r="70"></circle>
                                                    <circle cx="70" cy="70" r="70"></circle>
                                                  </svg>
                                                  <div class="num">
                                                    <h2>87<span>%</span></h2>
                                                  </div>
                                                </div>
                                                <h5 class="text">Progress</h5>
                                              </div>
                                            </div>                      
                                          </div>
                                        </div>
                                   </div>
                              </td>
                                </tr>
                                <!--first table Eleven row End-->
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>22-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                          <div class="modal-content">                      
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                              <h5 class="modal-title">Progress of Your Application</h5>
                                              <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                            </div>                        
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                              <div class="box">
                                                <div class="percent">
                                                  <svg>
                                                    <circle cx="70" cy="70" r="70"></circle>
                                                    <circle cx="70" cy="70" r="70"></circle>
                                                  </svg>
                                                  <div class="num">
                                                    <h2>87<span>%</span></h2>
                                                  </div>
                                                </div>
                                                <h5 class="text">Progress</h5>
                                              </div>
                                            </div>                       
                                          </div>
                                        </div>
                                   </div>
                              </td>
                                </tr>
                                <!--first table twelve row End-->
                                <tr class="rowsection">
                                  <th scope="row">Maheen</th>
                                  <td>24-1-2022</td>
                                  <td>Leave</td>
                                  <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                  <td class="eyesection"><a href="#popup1" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                          <div class="modal-content">                      
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                              <h5 class="modal-title">Progress of Your Application</h5>
                                              <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                            </div>                        
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                              <div class="box">
                                                <div class="percent">
                                                  <svg>
                                                    <circle cx="70" cy="70" r="70"></circle>
                                                    <circle cx="70" cy="70" r="70"></circle>
                                                  </svg>
                                                  <div class="num">
                                                    <h2>87<span>%</span></h2>
                                                  </div>
                                                </div>
                                                <h5 class="text">Progress</h5>
                                              </div>
                                            </div>                       
                                          </div>
                                        </div>
                                   </div>
                              </td>
                                </tr>
                                <!--first table Thirteen row End-->
                              </tbody>
                            </table>
                            <!--first table full row End-->
                          </div>
                        </div>
                      </div>
                    </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                          <div class="article-loop">
                            <div class="table-responsive">
                                <table  id="tableData2" class="table text-center">
                                  <thead>
                                    <tr class="headingsection">
                                      <th scope="col">Name</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Destination</th>
                                      <th scope="col">Subject</th>
                                      <th scope="col">Application</th>
                                      <th scope="col">Message</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="rowsection">
                                      <th scope="row">Maheen</th>
                                      <td>18-1-2022</td>
                                      <td>HOD</td>
                                      <td>Leave</td>
                                      <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                      <td>
                                        <button type="button" class="btn msgbtn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-commenting" aria-hidden="true" style="color: #0DB14B;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Message of Your Application</h5>
                                                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Hey !" aria-label="comment" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-success" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--second table first row End-->
                                    <tr class="rowsection">
                                      <th scope="row">Maheen</th>
                                      <td>18-1-2022</td>
                                      <td>HOD</td>
                                      <td>Leave</td>
                                      <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                      <td>
                                        <button type="button" class="btn msgbtn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-commenting" aria-hidden="true" style="color: #0DB14B;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Message of Your Application</h5>
                                                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Hey !" aria-label="comment" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-success" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--second table second row End-->
                                    <tr class="rowsection">
                                      <th scope="row">Maheen</th>
                                      <td>18-1-2022</td>
                                      <td>HOD</td>
                                      <td>Leave</td>
                                      <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                      <td>
                                        <button type="button" class="btn msgbtn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-commenting" aria-hidden="true" style="color: #0DB14B;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Message of Your Application</h5>
                                                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Hey !" aria-label="comment" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-success" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--second table third row End-->
                                    <tr class="rowsection">
                                      <th scope="row">Maheen</th>
                                      <td>18-1-2022</td>
                                      <td>HOD</td>
                                      <td>Leave</td>
                                      <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                      <td>
                                        <button type="button" class="btn msgbtn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-commenting" aria-hidden="true" style="color: #0DB14B;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Message of Your Application</h5>
                                                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Hey !" aria-label="comment" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-success" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--second table fourth row End-->
                                    <tr class="rowsection">
                                      <th scope="row">Maheen</th>
                                      <td>18-1-2022</td>
                                      <td>HOD</td>
                                      <td>Leave</td>
                                      <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                      <td>
                                        <button type="button" class="btn msgbtn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-commenting" aria-hidden="true" style="color: #0DB14B;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Message of Your Application</h5>
                                                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Hey !" aria-label="comment" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-success" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--second table fifth row End-->
                                    <tr class="rowsection">
                                      <th scope="row">Maheen</th>
                                      <td>18-1-2022</td>
                                      <td>HOD</td>
                                      <td>Leave</td>
                                      <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                      <td>
                                        <button type="button" class="btn msgbtn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-commenting" aria-hidden="true" style="color: #0DB14B;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Message of Your Application</h5>
                                                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Hey !" aria-label="comment" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-success" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--second table sixth row End-->
                                    <tr class="rowsection">
                                      <th scope="row">Maheen</th>
                                      <td>18-1-2022</td>
                                      <td>HOD</td>
                                      <td>Leave</td>
                                      <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                      <td>
                                        <button type="button" class="btn msgbtn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-commenting" aria-hidden="true" style="color: #0DB14B;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Message of Your Application</h5>
                                                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Hey !" aria-label="comment" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-success" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--second table seventh row End-->
                                    <tr class="rowsection">
                                      <th scope="row">Maheen</th>
                                      <td>18-1-2022</td>
                                      <td>HOD</td>
                                      <td>Leave</td>
                                      <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                      <td>
                                        <button type="button" class="btn msgbtn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-commenting" aria-hidden="true" style="color: #0DB14B;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Message of Your Application</h5>
                                                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Hey !" aria-label="comment" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-success" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--second table eight row End-->
                                    <tr class="rowsection">
                                      <th scope="row">Maheen</th>
                                      <td>18-1-2022</td>
                                      <td>HOD</td>
                                      <td>Leave</td>
                                      <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                      <td>
                                        <button type="button" class="btn msgbtn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-commenting" aria-hidden="true" style="color: #0DB14B;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Message of Your Application</h5>
                                                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Hey !" aria-label="comment" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-success" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--second table ninth row End-->
                                    <tr class="rowsection">
                                      <th scope="row">Maheen</th>
                                      <td>20-1-2022</td>
                                      <td>HOD</td>
                                      <td>Leave</td>
                                      <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                      <td>
                                        <button type="button" class="btn msgbtn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-commenting" aria-hidden="true" style="color: #0DB14B;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Message of Your Application</h5>
                                                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Hey !" aria-label="comment" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-success" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--second table tenth row End-->
                                    <tr class="rowsection">
                                      <th scope="row">Maheen</th>
                                      <td>22-1-2022</td>
                                      <td>HOD</td>
                                      <td>Leave</td>
                                      <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                      <td>
                                        <button type="button" class="btn msgbtn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-commenting" aria-hidden="true" style="color: #0DB14B;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Message of Your Application</h5>
                                                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Hey !" aria-label="comment" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-success" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--second table eleven row End-->
                                    <tr class="rowsection">
                                      <th scope="row">Maheen</th>
                                      <td>24-1-2022</td>
                                      <td>HOD</td>
                                      <td>Leave</td>
                                      <td><a href="assets/design-eapplication.pdf" class="downloadlink">Open</a></td>
                                      <td>
                                        <button type="button" class="btn msgbtn" data-toggle="modal" data-target="#exampleModal">
                                          <i class="fa fa-commenting" aria-hidden="true" style="color: #0DB14B;"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title">Message of Your Application</h5>
                                                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-window-close" aria-hidden="true"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Hey !" aria-label="comment" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                      <button class="btn btn-success" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </td>
                                    </tr>
                                    <!--second table twelve row End-->
                                  </tbody>
                                </table>
                                <!--second table full row End-->
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Start-->
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="paging.js"></script>
    <script type="text/javascript">
            $(document).ready(function() {
                $('#tableData').paging({limit:4});
            });
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
              $('#tableData2').paging({limit:4});
          });
      </script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  </body>
</html>