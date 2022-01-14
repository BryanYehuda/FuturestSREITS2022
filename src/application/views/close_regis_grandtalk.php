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

  <main id="section">
    <div class="container py-5">
      <div class="row py-5">
        <img src="<?= base_url() ?>/public/img/logo_keren.png"  width="50%" 
     height="100">
        <h1 class="my-3">Grand Talkshow registration is closed</h1>
        <p class="mb-4">Thankyou for your participation</p>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
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
