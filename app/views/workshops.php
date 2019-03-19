
<!-- page title -->
<section class="page-title-section overlay" data-background="">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="#">Upcoming Events</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">
        <?php //print_r($data); ?>
        </p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->


<section class="section">
  <div class="container">
    <div class="row">

    <?php
    
    if ($data !=0) {
    foreach ($data as $row) {
    ?>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" style="height:200px" src="<?php echo $row['ws_image'];?>" alt="event thumb">
            <div class="card-date"><span>SOON</span><br><?php echo $row['ws_date'];?></div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-user text-primary mr-2"></i><strong>Host: </strong><?php 
            $q = "select * from uprofile where email = '".$row['ws_host']."' ";
            $data = $this->getData($q);
            //print_r($data);
             echo $data[0]['screen_name'];
            ?></p>
            <a href="/ws/<?php echo $row['ws_id'];?>">
              <h5 class="card-title"><?php echo $this->shortword($row['ws_title'],60);?></h5>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <?php
    } } ?> 
    </div>
  </div>
</section>
