
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="courses">Our Courses</a></li>
          <li class="list-inline-item text-white h3 font-secondary "></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->








<!-- courses -->
<section class="section">
  <div class="container">
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->


  <?php
  



  if ($data !=0) {
 
    
    foreach ($data as $row) {
      
    ?>

  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="<?php echo $row['cimage']; ?>" alt="course thumb">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i><?php echo $row['start_date']; ?></li>
          <li class="list-inline-item"><a class="text-color" href="#"><?php echo $row['ccname']; ?></a></li>
        </ul>
        
        <a href="/course/<?php echo $row['cid']; ?>">
          <h4 class="card-title"><?php echo $row['ctitle']; ?></h4>
        </a>
        <p class="card-text mb-4" style="height:120px; "> <?php echo $this->shortword($row['subject_name'],150); ?></p>
        <a href="/course/<?php echo $row['cid']; ?>" class="btn btn-primary btn-sm">See Details</a>
      </div>
    </div>
  </div>
  <?php
  }} else {
    echo "no courses found";
}
  ?>


</div>
<!-- /course list -->
  </div>
</section>
<!-- /courses -->