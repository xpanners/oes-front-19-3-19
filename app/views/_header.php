<!DOCTYPE html>
<html lang="zxx">
  <head>
  <meta charset="utf-8">
  <title><?php
  echo $this->mysession;
  ?></title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/public/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/public/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/public/plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/public/plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/public/plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/public/plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="<?php echo $GLOBALS['defaultpath']?>/lib/public/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo $GLOBALS['defaultpath']?>/lib/public/images/favicon.html" type="image/x-icon">
  <link rel="icon" href="<?php echo $GLOBALS['defaultpath']?>/lib/public/images/favicon.html" type="image/x-icon">

</head>

<body id="body">
  

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href="callto:+443003030266"><strong>CALL</strong> +92 315 256 0565</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#">notice</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#">research</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#">SCHOLARSHIP</a></li>
            

            <?php
            if ($this->mysession == "public") {
              ?>
              <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="register">register</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>  
              <?php
            } else {
              ?>
              <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#">Dashboard</a></li>
              <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="<?php echo $GLOBALS['defaultpath']?>/public/logout">logout</a></li>
              <?php
            }
            
            ?>
            
            
            
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="<?php echo $GLOBALS['defaultpath']?>"><img src="<?php echo $GLOBALS['defaultpath']?>/lib/public/images/logo.png" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="courses">COURSES</a>
            </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="#">EVENTS</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="#">BLOG</a>
            </li>
           <!--- <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Pages
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="teacher.html">Teacher</a>
                <a class="dropdown-item" href="teacher-single.html">Teacher Single</a>
                <a class="dropdown-item" href="notice.html">Notice</a>
                <a class="dropdown-item" href="notice-single.html">Notice Details</a>
                <a class="dropdown-item" href="research.html">Research</a>
                <a class="dropdown-item" href="scholarship.html">Scholarship</a>
                <a class="dropdown-item" href="course-single.html">Course Details</a>
                <a class="dropdown-item" href="event-single.html">Event Details</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a>
              </div>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.html">CONTACT</a>
            </li>
		  ---->
		</ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $GLOBALS['defaultpath']?>/public/login" method="post" class="row">
                    
                    <div class="col-12">
                        <input type="email" class="form-control mb-3"  name="mail" placeholder="Your email">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" name="pass" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button name="loginme" type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->


<div id="ajaxcontainer">