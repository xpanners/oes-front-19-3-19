
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="/workshops">WORKSHOPS</a></li>
          
        </ul>
        <h5 class="text-lighten"><?php echo $data['ws_title']; ?></h5>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- event single -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title"><?php echo $data['ws_title']; ?></h2>
      </div>
      <!-- event image -->
      <div class="col-12 mb-4">
        <img style="max-height:500px" src="<?php echo $data['ws_image']; ?>" alt="event thumb" class="img-fluid w-100">
      </div>
    </div>
    <!-- event info -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-9">
        <ul class="list-inline">
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-user text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">HOST</h6>
                <p class="mb-0">
                <?php 
            $q = "select * from uprofile where email = '".$data['ws_host']."' ";
            $ndata = $this->getData($q);
            //print_r($data);
             echo $ndata[0]['screen_name'];
            ?>
                </p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-calendar text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">DATE</h6>
                <p class="mb-0"><?php echo $data['ws_date']; ?></p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-time text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">TIME</h6>
                <p class="mb-0"><?php echo $data['ws_time']; ?></p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-wallet text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">ENTRY FEE</h6>
                <p class="mb-0">PKR: <?php echo $data['ws_fee']; ?></p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 text-lg-right text-left">
        <a href="#" class="btn btn-primary">Subscribe Now</a>
      </div>
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- event details -->
    <div class="row">
      <div class="col-12 mb-50">
        <h3>About Event</h3>
        <p>
        <?php echo $data['ws_about']; ?>
        </p>
      </div>
    </div>
    





    <?php
      if ($data['ws_speakers_list'] != "") {
    ?>
    <!-- event speakers -->

    <div class="row">
      <div class="col-12">
        <h3 class="mb-4">Event Speakers</h3>
      </div>
      <!-- speakers -->
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="media">
          <img class="mr-3 img-fluid" src="images/event-speakers/speaker-1.jpg" alt="speaker">
          <div class="media-body">
            <h4 class="mt-0">Jack Mastio</h4>
            Speaker
          </div>
        </div>
      </div>
      <!-- speakers -->
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="media">
          <img class="mr-3 img-fluid" src="images/event-speakers/speaker-2.jpg" alt="speaker">
          <div class="media-body">
            <h4 class="mt-0">John Doe</h4>
            Speaker
          </div>
        </div>
      </div>
      <!-- speakers -->
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="media">
          <img class="mr-3 img-fluid" src="images/event-speakers/speaker-3.jpg" alt="speaker">
          <div class="media-body">
            <h4 class="mt-0">Randy Luis</h4>
            Speaker
          </div>
        </div>
      </div>
      <!-- speakers -->
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="media">
          <img class="mr-3 img-fluid" src="images/event-speakers/speaker-4.jpg" alt="speaker">
          <div class="media-body">
            <h4 class="mt-0">Alfred Jin</h4>
            Speaker
          </div>
        </div>
      </div>
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>

    <!-- event speakers -->
<?php }?>

  </div>
</section>
<!-- /event single -->

<!-- more event -->
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">More Events</h2>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
        <div class="card-date"><span>18</span><br>December</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Harvard, Usa</p>
        <a href="event-single.html"><h4 class="card-title">Toward a public philosophy of justice</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-2.jpg" alt="event thumb">
        <div class="card-date"><span>21</span><br>December</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Cambridge, USA</p>
        <a href="event-single.html"><h4 class="card-title">Research seminar in clinical science.</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-3.jpg" alt="event thumb">
        <div class="card-date"><span>23</span><br>December</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
        <a href="event-single.html"><h4 class="card-title">Firefly training in trauma-informed yoga</h4></a>
      </div>
    </div>
  </div>
</div>
  </div>
</section>
<!-- /more event -->