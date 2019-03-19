
<!-- page title -->
<section class="page-title-section overlay" data-background="http://localhost/lib/images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="#">Blogs</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted">Recent</li>
        </ul>
        <p class="text-lighten">
        <?php //print_r($data); ?>
        </p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- blogs -->
<section class="section">
  <div class="container">
    <div class="row">
     
     
  <?php
    
    if ($data !=0) {
    foreach ($data as $row) {
    ?>
      <!-- blog post -->
      <article class="col-lg-4 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" style="height:200px" src="<?php echo $row['bg_media_link']?>" alt="Post thumb">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0"><?php echo $row['bg_date']?></li>
              <!-- author -->
              <li class="list-inline-item mr-3 ml-0">Author:  <?php echo $row['screen_name']?></li>
            </ul>
            <a href="/blog/<?php echo $row['bg_id']?>">
              <h4 class="card-title"><?php echo $this->shortword($row['bg_title'],50)?></h4>
            </a>
            <p class="card-text">
            <?php echo $this->shortword($row['bg_content'],150);?>
            </p>
            <a href="/blog/<?php echo $row['bg_id']?>" class="btn btn-primary btn-sm">read more</a>
          </div>
        </div>
      </article>
      <!-- blog post -->
    <?php
    } } ?> 
    </div>
  </div>
</section>
<!-- /blogs -->