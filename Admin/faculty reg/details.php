<?php
include("../../conn.php");
error_reporting(0);

  $_GET['fn'];
  $_GET['ln'];
  $_GET['dp'];
  $_GET['sb'];
  $_GET['ql'];
  $_GET['pr'];
  $_GET['ct'];
  $_GET['em'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LBSMDC | Faculty</title>
    <!--Style Starts-->
    <link rel="icon" type="image/png" href="../../image/Lbs logo.png">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>

<body>
<!-- Start Your Body Code From here -->
<div class="wrapper">
    <!-- header starts here -->
    <header id="header" class="">
        <!-- header -->
        <div class="header-wrapper">
            <div class="header-container">
                <div>
                    <div class="logo-name">
                        <div class="logo">
                            <a href="index.php" title=""><img src="../../image/Lbs logo.png" alt="logo"></a>
                        </div>
                        <div class="name">
                            <a href="index.php" title="">
                                <h5>LAL BAHADHUR SHASTHRI MODEL DEGREE COLLEGE</h5>
                                <h5 class="primary-color">Parappanagadi</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-links">
                    <a href="#" data-toggle="popover" title="Address"
                       data-content="C/O, BLOCK NO.9, GOVERNMENT MODEL DEGREE  COLLEGE, NEDUVA, PARAPPANAGADI (po), MALAPPURAM (dt) - 676303"
                       data-placement="bottom"><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="popover" title="Phone No." data-content="+91-0494 2410135"
                       data-placement="bottom"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></a>
                    <a href="#" data-toggle="popover" title="Email" data-content="lbsiistpgimdc@gmail.com"
                       data-placement="bottom"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></a>
                </div>
                <li><a href="login/login.html"><strong>LOGIN</strong></a>
               </li>
            </div>
        </div>
        <nav>
            <div class="navbar navbar-inverse navbar-custom" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">LBSMDC <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="about.html">LBS BOARD</a></li>
                                    <li><a href="directors_message.html">PRINCIPAL</a></li>
                                    <li><a href="bog.html">STAFF CONTROL</a></li>
                                    </li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acadmics<b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li class="dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">COURSE</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="Bsc Computer science.html">BSC</a></li>
                                            <li><a href="Computer Application.html">BCA</a></li>
                                            <li><a href="B.commerce.html">BCOM</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FACULTY</a>
                                
                                   

                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="documents/prospects.pdf">PROSPECTS</a></li>
                                    <li><a href="registration/reg.php">Register</a></li>
                                    <li><a href="fees table.html">FEES</a></li>
                                     <li><a href="Admission Procedure.html">Admission Procedure</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exam <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="faculty.html">REFERENCE</a></li>
                                    <li><a href="Notification.html">NOTIFICATION</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facilities <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="library.html">LIBRARIES</a></li>
                                    <li><a href="lab.html">LAB</a></li>
                                </ul>
                            </li>
                            <li><a href="career.html">Career</a></li>
                            <li><a href="gallery.html">Photo Gallery</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </nav>
    </header>
    <!-- /header -->
    <!-- Content wrapper -->
    <div class="contents-wrapper">
            <!-- Contents starts here -->
            <div class="row content content-faculty">
                <div class="col-sm-4 pic-meta">
                    <div class="pic"> <img src="image/not availible.png" width="80%"></div>
                    <div class="meta">
                        <b><?php echo $_GET['fn']; ?></b>
                        <p><?php echo $_GET['ln']; ?><p>
                    </div>
                </div>
                <div class="col-sm-8">
                    <p><b>Academic Qualifications</b></p>
                    <p>
                       <?php echo $_GET['ql']; ?>
                    </p>
                    <p><b>Areas of Interest</b></p>
                    <p>
                      <?php echo $_GET['sb']; ?>

                    </p>
                    <p><b>Department</b></p>
                    <p>
                      <?php echo $_GET['dp']; ?>

                    </p>
                    <p><b>Professional Career</b></p>
                    <p>
                     <?php echo $_GET['pr']; ?>
                    </p>
                    
                    <p><b>Additional information</b></p>
                    <p>Teaching Proffessor</p>
                    
                    <p><b>Contact</b>:<?php echo $_GET['ct']; ?></p>
                    <p>
                        <b>Email</b>:<a href="mailto:<?php $_GET['em']; ?>"><?php echo $_GET['em']; ?></a>
                    </p>
                     </div>
                   
                </div>
            </div>
        </div>
    <!-- Footer -->
    <footer>
        <div class="footer-wrapper">
            <span class="logo"><img src="../../image/Lbs logo.png" alt=""></span>
            <div class="row">
                <div class="col-sm-4 address">
                    <strong>Address : </strong> GOVERNMENT MODEL DEGREE  COLLEGE, NEDUVA, PARAPPANAGADI (po), MALAPPURAM
                </div>
                <div class="col-sm-4 links">
                    <div>
                        <a href="../../index.php#HOME">HOME</a>
                        <i class="seperator"></i>
                        <a href="../../contact.html#contact">CONTACT</a>
                        <i class="seperator"></i>
                        <a href="../../coursemain.html#course">COURSE</a>
                    </div>
                   
                </div>
                <div class="col-sm-4 footer-social">
                    <a href="#!"><i class="fa fa-facebook" aria-hidden="true" title="Official Facebook Page"></i></a>
                    <a href="https://github.com/falihpangat"><i class="fa fa-github" aria-hidden="true"
                                                          title="Github Group"></i></a>
                    <a href="#!"><i class="fa fa-linkedin" aria-hidden="true" title="LinkedIn Profile"></i></a>
                    <a href="#!" title=""><i class="fa fa-twitter" aria-hidden="true"
                                             title="Official Twitter Account"></i></a>
                </div>
            </div>
        </div>
    </footer>
</div>
<!--Scripts Starts-->
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/434d359724.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
        $('[data-toggle="popover"]').on('click', function (e) {
            $('[data-toggle="popover"]').not(this).popover('hide');
        });
    });
</script>
</body>

</html>