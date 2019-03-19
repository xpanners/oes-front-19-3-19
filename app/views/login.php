
        <!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="%40%40page-link.html">Login</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Do you have other questions? Don't worry, there aren't any dumb questions. Just fill out the form below and we'll get back to you as soon as possible.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Login</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        
      
        
        <form method="post" name="loginform" action="<?php echo $GLOBALS['defaultpath']?>/ajax/logmein">
     
          <input type="email" class="form-control mb-3"  name="mail" placeholder="Your Email" required>
          <input type="password" class="form-control mb-3"  name="pass" placeholder="Password" required>
      
          <button name="loginme" type="submit" value="send" class="btn btn-success" >Login</button>
          <a href="register" class="btn btn-primary">Don't have account ?</a>
        </form>
        
      </div>
      <div class="col-lg-5">
        <p class="mb-5">Velit recusandae voluptates doloremque veniam temporibus porro culpa, tempore itaque architecto ducimus expedita</p>
        <div>

        
        <a href="#" class="btn btn-primary">Forgot Password ?</a>
        </div>
        
      </div>
    </div>
  </div>
</section>
<!-- /contact -->
