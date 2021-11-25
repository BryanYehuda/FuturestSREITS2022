<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
    $this->load->view('template/meta');
  ?>
  <title>Details</title>
  <?php
    $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/details.css">
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
      <button type="button" class="btn btn-outline-primary">Register Now</button>
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
              <button type="button" class="btn btn-outline-primary">Know More About Futurest 2022</button>
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