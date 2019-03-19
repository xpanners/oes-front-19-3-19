<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="blog.html">Our Blog</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted"><?php echo $data['screen_name']; ?></li>
        </ul>
        <p class="text-lighten">

        
        <?php echo $data['bg_title']; ?>
        </p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- blog details -->
<section class="section-sm bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-4">
        <img src="<?php echo $data['bg_media_link']; ?>" alt="blog-thumb" class="img-fluid w-100">
      </div>
      <div class="col-12">
        <ul class="list-inline">
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span class="font-weight-bold mr-2">Author:</span><a href="/teacher/<?php echo $data['bg_user']; ?>"><?php echo $data['screen_name']; ?></a></li>
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-calendar"></i>   <?php echo $data['bg_date']; ?></li>
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-book mr-2"></i>Read 289</li>
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-comments mr-2"></i>265</li>
        </ul>
      </div>
      <!-- border -->
      <div class="col-12 mt-4">
        <div class="border-bottom border-primary"></div>
      </div>
      <!-- blog contect -->
      <div class="col-12 mb-5">
        <h2> <?php echo $data['bg_title']; ?> </h2>
        <?php echo $data['bg_content']; ?>
      </div>
      <!-- comment box -->
      <div class="col-12">
        <form action="#" class="row">
          <div class="col-sm-6">
            <input type="text" class="form-control mb-4" id="name" name="name" placeholder="Full Name">
          </div>
          <div class="col-sm-6">
            <input type="email" class="form-control mb-4" id="mail" name="mail" placeholder="Email Address">
          </div>
          <div class="col-12">
            <textarea name="comment" id="comment" class="form-control mb-4" placeholder="Comment Here..."></textarea>
          </div>
          <div class="col-12">
            <button type="submit" value="send" class="btn btn-primary">post comment</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- /blog details -->

<!-- recommended post -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Recommended</h2>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- blog post -->
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/blog/post-1.jpg" alt="Post thumb">
      <div class="card-body">
        <!-- post meta -->
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">August 28, 2019</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">By Jonathon</li>
        </ul>
        <a href="blog-single.html">
          <h4 class="card-title">The Expenses You Are Thinking.</h4>
        </a>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
      </div>
    </div>
  </article>
  <!-- blog post -->
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/blog/post-2.jpg" alt="Post thumb">
      <div class="card-body">
        <!-- post meta -->
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">August 13, 2019</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">By Jonathon Drew</li>
        </ul>
        <a href="blog-single.html">
          <h4 class="card-title">Tips to Succeed in an Online Course</h4>
        </a>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
      </div>
    </div>
  </article>
  <!-- blog post -->
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images/blog/post-3.jpg" alt="Post thumb">
      <div class="card-body">
        <!-- post meta -->
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">August 24, 2018</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">By Alex Pitt</li>
        </ul>
        <a href="blog-single.html">
          <h4 class="card-title">Orientation Program for the new students</h4>
        </a>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicin</p>
        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
      </div>
    </div>
  </article>
</div>
  </div>
</section>
<!-- /recommended post -->