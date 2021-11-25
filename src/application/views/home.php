<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
    $this->load->view('template/meta');
  ?>
  <title>Home</title>
  <?php
    $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/home.css">

<body>
   <?php
      $this->load->view('components/navbar');
   ?>

  <section id="jumbotron" class="d-flex align-items-center position-relative">
      <div class="container text-center">
         <h1 class="mb-5">SRE ITS BOS!!!</h1>
         <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
         </p><br><br>
         <button type="button" class="btn btn-outline-primary">Register Now</button>
      </div>   
   </section><br><br><br>

   <section id="carousel-container-1" class="d-flex align-items-center position-relative">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div id="carousel-1" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
              <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="<?php echo base_url() ?>/public/img/contact-parallax-test.jpg" class="d-block w-100" alt="Slide 1">
              </div>
              <div class="carousel-item">
                  <img src="<?php echo base_url() ?>/public/img/contact-parallax-test.jpg" class="d-block w-100" alt="Slide 2">
              </div>
              <div class="carousel-item">
                  <img src="<?php echo base_url() ?>/public/img/contact-parallax-test.jpg" class="d-block w-100" alt="Slide 3">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-1" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carousel-1" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-1">
              <p><i class="bi bi-quote d-none d-sm-block" style="font-size: 350%; color: #262626;"></i></p>
            </div>
          </div>
          <div class="row">
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
            </p>
          </div><br>
          <div class="row">
            <div class="col-6 offset-3 col-lg-6 offset-lg-6">
              <button type="button" class="btn btn-outline-primary">Know More About Futurest 2022</button>
            </div>
          </div>
        </div>
      </div>
    </div>   
   </section><br><br><br>

   <section id="carousel-container-2" class="d-flex align-items-center position-relative">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-1 offset-10">
              <p><i class="bi bi-quote d-none d-sm-block" style="font-size: 350%; color: #262626;"></i></p>
            </div>
          </div>
          <div class="row">
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
            </p>
          </div><br>
          <div class="row">
            <div class="col-6 offset-3 col-lg-6 offset-lg-0">
              <button type="button" class="btn btn-outline-primary">Know More About Futurest 2022</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div id="carousel-2" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carousel-2" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carousel-2" data-bs-slide-to="1"></li>
              <li data-bs-target="#carousel-2" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="<?php echo base_url() ?>/public/img/contact-parallax-test.jpg" class="d-block w-100" alt="Slide 1">
              </div>
              <div class="carousel-item">
                  <img src="<?php echo base_url() ?>/public/img/contact-parallax-test.jpg" class="d-block w-100" alt="Slide 2">
              </div>
              <div class="carousel-item">
                  <img src="<?php echo base_url() ?>/public/img/contact-parallax-test.jpg" class="d-block w-100" alt="Slide 3">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-2" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carousel-2" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
      </div>
    </div>   
   </section><br><br><br>

   <section id="carousel-container-3" class="d-flex align-items-center position-relative">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-lg-6">
          <div id="carousel-3" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carousel-3" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carousel-3" data-bs-slide-to="1"></li>
              <li data-bs-target="#carousel-3" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="<?php echo base_url() ?>/public/img/contact-parallax-test.jpg" class="d-block w-100" alt="Slide 1">
              </div>
              <div class="carousel-item">
                  <img src="<?php echo base_url() ?>/public/img/contact-parallax-test.jpg" class="d-block w-100" alt="Slide 2">
              </div>
              <div class="carousel-item">
                  <img src="<?php echo base_url() ?>/public/img/contact-parallax-test.jpg" class="d-block w-100" alt="Slide 3">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-3" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#carousel-3" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-1">
              <p><i class="bi bi-quote d-none d-sm-block" style="font-size: 350%; color: #262626;"></i></p>
            </div>
          </div>
          <div class="row">
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
            </p>
          </div><br>
          <div class="row">
            <div class="col-6 offset-3 col-lg-6 offset-lg-6">
              <button type="button" class="btn btn-outline-primary">Know More About Futurest 2022</button>
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
