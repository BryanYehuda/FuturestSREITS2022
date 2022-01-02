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

  <main id="setion">

    <!-- jumbotron -->
    <section id="jumbotron" class="py-5">
      <div class="container py-5 position-relative">
        <img src="<?= base_url() ?>/public/img/lighting.png" class="position-absolute" id="lighting">
        <img src="<?= base_url() ?>/public/img/Logo.png" alt="Futurest Logo" class="animate__animated animate__backInUp img-fluid d-block mx-auto" width="200">
        <h1 class="animate__animated animate__backInUp text-center">Futurest 2022</h1>
        <p class="animate__animated animate__backInUp text-center w-75 mx-auto mb-4">
          <q>
            Generating Young Indonesian Leaders with Concrete and Feasible Actions for Climate Catastrophe Prevention Through Energy Transformation
          </q>
        </p>
        <a href="#introduction" class="animate__animated animate__backInUp btn btn-lg btn-success d-block mx-auto d-flex justify-content-evenly align-items-center" style="width: 200px;">
          Learn more
          <i class="fas fa-chevron-down"></i>
        </a>
      </div>
    </section>
    <!-- end of jumbotron -->

    <!-- introduction -->
    <section id="introduction" class="py-5">
      <div class="container py-5">
        <div class="row">
          <h2 class="mb-lg-5">Introduction</h2>
          <div class="row">
            <div class="d-none d-lg-block col-lg-6">
              <img src="<?= base_url() ?>/public/img/awarding-night.jpg" alt="Photos of Introduction " class="img-fluid" style="border-radius: 10px;">
            </div>
            <div class="col pt-lg-5">
              <p>
                There are 7 events in futurest 2022. 2 of them have competitions, namely Renewable Energy Innovation Brainstorm and National Essay Competition. The other 2 are pre-event Grand Talkshow and Climate Changers Community. The remaining 3 are our main events, namely Renewable Energy 101, Final Talkshow, and Awarding Night.
              </p>
              <a href="<?= base_url('events'); ?>" class="btn btn-lg btn-success">
                Learn More
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of introduction -->

    <!-- sponsors -->
    <section id="sponsors">
      <div class="container">
        <div class="row">
          <h2 class="text-center mb-5">Futurest 2022 Sponsors</h2>
          <div class="row d-flex flex-wrap justify-content-center">
            <div class="col-4 d-flex align-items-center justify-content-center">
              <img src="<?= base_url() ?>/public/img/its.png" alt="Logo Sponsor" class="img-fluid" width="150">
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center">
              <img src="<?= base_url() ?>/public/img/esdm.png" alt="Logo Sponsor" class="img-fluid" width="200">
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center">
              <img src="<?= base_url() ?>/public/img/sre.png" alt="Logo Sponsor" class="img-fluid" width="200">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of sponsort -->

  </main>

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