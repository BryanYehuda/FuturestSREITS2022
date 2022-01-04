<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
  $this->load->view('template/meta');
  ?>
  <title>Contact</title>
  <?php
  $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/choose-event.css">
</head>

<body>
  <?php
  $this->load->view('components/navbar');
  ?>

  <main id="section">
    <div class="container" class="py-5">
      <div class="row py-5">
        <h1 class="py-5">
          What event do you want to regist?
        </h1>
        <ul class="list-group">
          <li class="list-group-item"><a href="<?php echo base_url("register-essay-comp-individual"); ?>">National Essay Competitions individual</a></li>
          <li class="list-group-item"><a href="<?php echo base_url("register-essay-comp-team"); ?>">National Essay Competitions Team</a></li>
          <li class="list-group-item"><a href="<?php echo base_url("register-re-innovation-comp"); ?>">RE Innovation Competitions</a></li>
          <li class="list-group-item"><a href="<?php echo base_url("register-grand-talkshow-event"); ?>">Grand Talkshow Event</a></li>
          <li class="list-group-item"><a href="<?php echo base_url("register-re-101-event"); ?>">RE 101 Event</a></li>
          <li class="list-group-item"><a href="<?php echo base_url("register-final-talkshow-event"); ?>">Final Talkshow Event</a></li>
          <li class="list-group-item"><a href="<?php echo base_url("register-climate-change-event"); ?>">Climate Change Community Event</a></li>
        </ul>
      </div>
    </div>
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