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
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/finish-regist.css">
</head>

<body>
   <?php
      $this->load->view('components/navbar');
   ?>

  <main id="section">
    <div class="container py-5">
      <div class="row py-5">
        <h1 class="my-3">Thank you for register to Futurest!</h1>
        <p class="mb-4">Please check your email for next confirmation...</p>
        <a href="<?php echo base_url('home')?>" class="btn btn-lg btn-success" style="width: 200px;">Back to home</a>
      </div>
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
