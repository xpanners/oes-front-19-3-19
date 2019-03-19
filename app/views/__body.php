<!DOCTYPE html>
<html lang="zxx">
  <head>
  <meta charset="utf-8">
  <title><?php
  echo $GLOBALS['appname'];
  ?></title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="<?php echo $GLOBALS['defaultpath']?>/lib/images/logo.png" type="image/x-icon">
  <link rel="manifest" href="<?php echo $GLOBALS['defaultpath']?>/manifest.json">
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/venobox/venobox.css">

  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/css/alertify.core.css">
  <link rel="stylesheet" href="<?php echo $GLOBALS['defaultpath']?>/lib/css/alertify.default.css">

  <!-- Main Stylesheet -->
  <link href="<?php echo $GLOBALS['defaultpath']?>/lib/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo $GLOBALS['defaultpath']?>/lib/images/favicon.html" type="image/x-icon">
  <link rel="icon" href="<?php echo $GLOBALS['defaultpath']?>/lib/images/favicon.html" type="image/x-icon">

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
          <li  class="list-inline-item"><a style="background-color:red;" class="text-uppercase  text-color p-sm-2 py-2 px-0 d-inline-block" href="#">LIVE</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/notice">NOTICE</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/contact">CONTACT</a></li>

            <?php
            
            if ($this->mysession == "public") {
              ?>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="/register">register</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>  
              
              <?php
            } else {
              ?>
              <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#">Dashboard</a></li>
            <li class="list-inline-item"><a onclick="logmeout()" class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" rol="button" href="#">Logout</a></li>
              
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
        <a class="navbar-brand" href="<?php echo $GLOBALS['defaultpath']?>"><img style="height:50px; width:90px" src="<?php echo $GLOBALS['defaultpath']?>/lib/images/logo.png" alt="logo"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item ">
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="/courses">COURSES</a>
            </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="/workshops">WORKSHOPS</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="/blogs">BLOGS</a>
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
            <form method="post" class="row" name="loginform" action="<?php echo $GLOBALS['defaultpath']?>/ajax/logmein">
                
                    <div class="col-12">
                        <input type="email" class="form-control mb-3" name="mail" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" name="pass" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div id="ajaxcontainer" style="min-height:100px"></div>







<!-- footer -->
<footer>
  <!-- newsletter 
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>---->
  
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="#"><img style="height:50px; width:90px" class="img-fluid mb-4" src="<?php echo $GLOBALS['defaultpath']?>/lib/images/logo.png" alt="logo"></a>
          <ul class="list-unstyled">
            <li class="mb-2">North Karachi, Karachi, Pakistan</li>
            <li class="mb-2">+92 (315) 256 0565</li>
            <li class="mb-2">+92 (315) 256 0565</li>
            <li class="mb-2">info@xpanners.com</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">COMPANY</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="about">About Us</a></li>
            <li class="mb-3"><a class="text-color" href="#">Our Teacher</a></li>
            <li class="mb-3"><a class="text-color" href="contact">Contact</a></li>
            <li class="mb-3"><a class="text-color" href="#">Blog</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">LINKS</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="courses">Courses</a></li>
            <li class="mb-3"><a class="text-color" href="#">Events</a></li>
            <li class="mb-3"><a class="text-color" href="#">Gallary</a></li>
            <li class="mb-3"><a class="text-color" href="#">FAQs</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">SUPPORT</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">Forums</a></li>
            <li class="mb-3"><a class="text-color" href="#">Blogs</a></li>
            <li class="mb-3"><a class="text-color" href="#">Language</a></li>
            <li class="mb-3"><a class="text-color" href="#">Blogs</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">RECOMMEND</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">WordPress</a></li>
            <li class="mb-3"><a class="text-color" href="#">Blogs</a></li>
            <li class="mb-3"><a class="text-color" href="#">Blogs</a></li>
            <li class="mb-3"><a class="text-color" href="#">Blogs</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            © Developed By <a  href="https://xpanners.com/">www.xpanners.com</a></p> . All Rights Reserved.
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.facebook.com/themefisher"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.twitter.com/themefisher"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://dribbble.com/themefisher"><i class="ti-dribbble text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/venobox/venobox.min.js"></script>
<!-- mixitup filter -->
<script src="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/mixitup/mixitup.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&amp;libraries=places"></script>
<script src="<?php echo $GLOBALS['defaultpath']?>/lib/plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="<?php echo $GLOBALS['defaultpath']?>/lib/js/app.js"></script>
<script src="<?php echo $GLOBALS['defaultpath']?>/lib/js/script.js"></script>
<script src="<?php echo $GLOBALS['defaultpath']?>/lib/js/alertify.min.js"></script>
</body>


</html>