<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
  $this->load->view('template/meta');
  ?>
  <title>Finish Regist</title>
  <?php
  $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/close_gts.css">
</head>

<body>
  <?php
  $this->load->view('components/navbar');
  ?>

  <main id="section" class="d-flex align-items-center position-relative">
    <img src="<?= base_url() ?>/public/img/ornamen/ornam7.png" alt="Ornamen" id="ornamen" class="d-none d-lg-block position-absolute">
    <div class="container py-5">
      <div class="row py-5 text-center">
        <img src="<?= base_url() ?>/public/img/logo_keren.png" class="mx-auto img-fluid w-25">
        <h1 class="my-3">Grand Talkshow registration is closed :(</h1>
        <p class="mb-4">
          But don't worry, we still have lots of events for you to register for
        </p>
      </div>
  </main>

  <footer>
    <?php
    $this->load->view('components/footerblue');
    ?>
  </footer>

  <?php
  $this->load->view('template/script');
  ?>

  <!-- Import js if need -->
</body>

</html>