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
</head>

<body>
  <?php
  $this->load->view('components/navbar');
  ?>

  <main id="setion">

    <!-- jumbotron -->
    <section id="jumbotron" class="py-5">
      <div class="container py-5 position-relative">
        <img src="<?= base_url() ?>/public/img/ornamen/ornam3.png" class="d-none d-lg-block img-fluid position-absolute" id="ornamen_jumbo">
        <img src="<?= base_url() ?>/public/img/logo_keren.png" alt="Futurest Logo" class=" img-fluid d-block mx-auto mt-5" width="180">
        <h1 class="text-center">FUTUREST 2022</h1>
        <p class="text-center w-75 mx-auto mb-4">
        <h3 class="text-center">Generating Young Indonesian Leaders with Concrete and Feasible Actions for Climate Catastrophe Prevention Through Energy Transformation</h3>
        </p>
        <a href="#introduction" class="btn btn-primary d-block mx-auto d-flex justify-content-evenly align-items-center" style="width: 200px;">
          Learn more
          <i class="fas fa-chevron-down"></i>
        </a>
      </div>
    </section>
    <!-- end of jumbotron -->

    <!-- introduction -->
    <section id="introduction" class="py-5">
      <div class="container py-5 position-relative">

        <div class="row">
          <h2 class="mb-lg-5 text-center">
            Introduction
            <img src="<?= base_url() ?>/public/img/panah_intro.png" alt="Panah Bawah" class="img-fluid" width="30">
          </h2>
          <div class="row">
            <div class="d-none d-lg-block col-lg-5">
              <img src="<?= base_url() ?>/public/img/circle_star.png" alt="Photos of Introduction " class="img-fluid" width="300">
            </div>
            <div class="col pt-lg-5">
              <p>
                There are 7 events in futurest 2022. 2 of them have competitions, namely Renewable Energy Innovation Brainstorm and National Essay Competition. The other 2 are pre-event Grand Talkshow and Climate Changers Community. The remaining 3 are our main events, namely Renewable Energy 101, Final Talkshow, and Awarding Night.
              </p>
              <a href="<?= base_url('events'); ?>" class="btn btn-primary">
                Learn More
                <i class="fas fa-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of introduction -->

    <!-- partners -->
    <section id="partners" class="mb-5">
      <div class="container position-relative">
        <div class="row">
          <h2 class="text-center mb-5">Futurest 2022 Supporters</h2>
          <div class="d-flex flex-wrap justify-content-center mb-5">
            <img src="<?= base_url() ?>/public/img/esdm.png" alt="Logo Sponsor" class="img-fluid m-4" width="150" height="150">
            <img src="<?= base_url() ?>/public/img/its.png" alt="Logo Sponsor" class="img-fluid m-4" width="150" height="150">
            <img src="<?= base_url() ?>/public/img/sre_nasional.png" alt="Logo Sponsor" class="img-fluid m-4" width="150" height="150">
          </div>
          <h2 class="text-center my-5">Futurest 2022 Sponsors</h2>
          <div class="d-flex flex-wrap justify-content-center">
            <img src="<?= base_url() ?>/public/img/pt_quarto.jpg" alt="Logo Sponsor" class="img-fluid m-4" width="200" height="150">
            <img src="<?= base_url() ?>/public/img/pt_pp.jpg" alt="Logo Sponsor" class="img-fluid m-4" width="200" height="150">
            <img src="<?= base_url() ?>/public/img/pdam_surabaya.png" alt="Logo Sponsor" class="img-fluid m-4" width="150" height="150">
            <img src="<?= base_url() ?>/public/img/hutama_karya.png" alt="Logo Sponsor" class="img-fluid m-4" width="150" height="150">
            <img src="<?= base_url() ?>/public/img/coca_cola.png" alt="Logo Sponsor" class="img-fluid m-4" width="180" height="150">
            <img src="<?= base_url() ?>/public/img/sun.jpg" alt="Logo Sponsor" class="img-fluid m-4" width="150" height="150">
            <img src="<?= base_url() ?>/public/img/sun_energy.png" alt="Logo Sponsor" class="img-fluid m-4" width="150" height="150">
            <img src="<?= base_url() ?>/public/img/pgn_saka.png" alt="Logo Sponsor" class="img-fluid m-4" width="500" height="100">
            <img src="<?= base_url() ?>/public/img/yokogawa.png" alt="Logo Sponsor" class="img-fluid m-4" width="150" height="150">
            <img src="<?= base_url() ?>/public/img/smelting.jpg" alt="Logo Sponsor" class="img-fluid m-4" width="150" height="150">
            <img src="<?= base_url() ?>/public/img/supreme_energy_logo.jpg" alt="Logo Sponsor" class="img-fluid m-4" width="250" height="250">
            <img src="<?= base_url() ?>/public/img/PLN.png" alt="Logo Sponsor" class="img-fluid m-4" width="250" height="250">
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