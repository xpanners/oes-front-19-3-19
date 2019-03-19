
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="#">Notice</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.


        </p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->



<!-- notice -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="list-unstyled">
         
        <?php
    
    if ($data !=0) {
    foreach ($data as $row) {
        
            $nd = explode('-',$row['nt_date']);
            
        
    ?>
        
        <!-- notice item -->
          <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h2 d-block"><?php echo $nd[0];?></span><small> <?php echo $nd[1].','.$nd[2];?></small></div>
            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
              <a href="/note/<?php echo $row['nt_id']; ?>" class="h4 mb-3 d-block"><?php echo $this->shortword($row['nt_title'],70); ?></a>
              <strong>
              <?php 
            $q = "select * from uprofile where email = '".$row['nt_user']."' ";
            $data = $this->getData($q);
             echo $data[0]['screen_name'];
            ?>
              </strong>
              <p class="mb-0">
              <?php echo $this->shortword($row['nt_about'],200); ?>
              </p>
            </div>
            <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="/note/<?php echo $row['nt_id']; ?>" class="btn btn-primary">read more</a></div>
          </li>
          <!-- notice item -->
    <?php
    } }
    ?>     
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /notice -->
