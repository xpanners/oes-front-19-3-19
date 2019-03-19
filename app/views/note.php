
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="/notice">Notice</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted"><strong>Note ID:</strong> <?php echo $data['nt_id']?></li>
        </ul>
        <p class="text-lighten">
        <?php echo $data['nt_title']?>
        </p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- notice details -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex">
          <div class="text-center mr-4">
            <div class="p-4 bg-primary text-white">
            <?php
            $nd = explode('-',$data['nt_date']); 
            ?>    
            <span class="h2 d-block"><?php echo $nd[0]; ?></span> <?php echo $nd[1].",".$nd[2]; ?>
            </div>
          </div>
          <!-- notice content -->
          <div>
            <h3 class="mb-4"><?php echo $data['nt_title']?></h3>
            <strong>
            <?php 
            $q = "select * from uprofile where email = '".$data['nt_user']."' ";
            $ndata = $this->getData($q);
             echo $ndata[0]['screen_name'];
            ?>
            </strong>
            <br><br><br>
            <?php echo $data['nt_about']?>

            <br><br><br>
            <a href="#" class="btn btn-primary">Download</a>
            <br><br><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /notice details -->