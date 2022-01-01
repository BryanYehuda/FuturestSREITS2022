<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
    $this->load->view('template/meta');
  ?>
  <title>Details Webinar</title>
  <?php
    $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/details.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php
    $this->load->view('components/navbar');
  ?>

  <section id="jumbotron" class="d-flex align-items-center position-relative">
    <div class="container text-center">
    <h1 class="mb-5">Detail Event</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
      </p><br><br>
      <a href="<?php echo base_url() . 'register'?>"type="button" class="btn btn-outline-primary">Register Now</a>
    </div>   
  </section>

  <section id="container-1" class="d-flex align-items-center position-relative">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-lg-4">
          <div class="row font-weight-bold bold-text">
            <h2>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </h2>
          </div><br>
          <div class="row">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
            </p>
          </div><br>
          <div class="row">
            <div class="col-6 offset-3 col-lg-6 offset-lg-3">
              <button type="button" class="btn btn-outline-primary" style="margin-bottom: 40px;">Know More About Futurest 2022</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-8">
          <div class="card bg-dark text-white">
            <img class="card-img" src="<?php echo base_url() ?>/public/img/event-parallax-test.jpg" alt="Card image">
          </div>
        </div>
      </div>
    </div>   
  </section><br><br><br><br><br>

  <section id="container-2" class="d-flex align-items-center position-relative">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-lg-8">
          <div class="card bg-dark text-white">
            <img class="card-img" src="<?php echo base_url() ?>/public/img/event-parallax-test.jpg" alt="Card image">
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <div class="row font-weight-bold bold-text">
            <h2>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </h2>
          </div><br>
          <div class="row">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
            </p>
          </div><br>
          <div class="row">
            <div class="col-6 offset-3 col-lg-6 offset-lg-3">
              <button type="button" class="btn btn-outline-primary" style="margin-bottom: 40px;">Know More About Futurest 2022</button>
            </div>
          </div>
        </div>
      </div>
    </div>   
  </section><br><br><br>

  <section id="timeline" class="d-flex align-items-center position-relative">
    <div class="container">                      
      <div class="row text-center justify-content-center mb-5">
        <div class="col-xl-6 col-lg-8">
          <h2 class="font-weight-bold">Our Evolution</h2>
          <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
            <div class="timeline-step">
              <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">2003</p>
                  <p class="h6 text-muted mb-0 mb-lg-0">Lorem ipsum dolor</p>
                </div>
              </div>
              <div class="timeline-step">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">2004</p>
                  <p class="h6 text-muted mb-0 mb-lg-0">Lorem ipsum dolor</p>
                </div>
              </div>
              <div class="timeline-step">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">2005</p>
                  <p class="h6 text-muted mb-0 mb-lg-0">Lorem ipsum dolor</p>
                </div>
              </div>
              <div class="timeline-step">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">2010</p>
                  <p class="h6 text-muted mb-0 mb-lg-0">Lorem ipsum dolor</p>
                </div>
              </div>
              <div class="timeline-step mb-0">
                <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                  <div class="inner-circle"></div>
                  <p class="h6 mt-3 mb-1">2020</p>
                  <p class="h6 text-muted mb-0 mb-lg-0">Lorem ipsum dolor</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section><br><br><br>

  <footer>
    <?php
      $this->load->view('components/footer');
    ?>
  </footer>

  <?php
    $this->load->view('template/script');
  ?>

  <!-- Import js if need -->
</body>

</html>