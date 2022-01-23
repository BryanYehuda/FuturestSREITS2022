<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
  $this->load->view('template/meta');
  ?>
  <title>Details RE Innovation</title>
  <?php
  $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/re_innovation.css">
</head>

<body>
  <?php
  $this->load->view('components/navbar');
  ?>

  <main id="section">
    <section id="jumbotron" class="d-flex align-items-center position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center text-xl-start col-xl-8">
            <h1 class="mb-5">
              RE Innovation Brainstorm Competition
            </h1>
            <p class="mb-5">
              <b>Renewable Energy Innovation Brainstorm</b> is a national paper competition that encourages undergraduate and vocational students to conduct scientific approaches to develop existing or create new fascinating innovations in order to reduce greenhouse gases (GHG) emissions and sustainably solve energy issues. With the help of various professionals as mentors to guide top 10 (ten) teams to improve their ideas in an insightful experience.
            </p>
            <a href="#timeline" class="btn btn-primary">Show Timeline</a>
          </div>
          <div class="d-none d-xl-flex col-xl-4 d-fle7x align-items-center justify-content-center">
            <i class="bi bi-journal-bookmark"></i>
          </div>
        </div>
      </div>
    </section>

    <section id="timeline" class="py-5 position-relative">
      <img src="<?php echo base_url() ?>public/img/ornamen/ornam6.png" alt="Ornamen" id="ornamen_1" class="position-absolute" width="300" height="300">
      <img src="<?php echo base_url() ?>public/img/ornamen/ornam3.png" alt="Ornamen" id="ornamen_2" class="position-absolute" width="300" height="300">
      <img src="<?php echo base_url() ?>public/img/ornamen/ornam2.png" alt="Ornamen" id="ornamen_3" class="position-absolute" width="300" height="300">
      <div class="container d-flex flex-column align-items-center py-5">
        <h2 class="mb-5">RE Innovation Brainstorm Timeline</h2>
        <div class="row mb-3 px-4 py-3 w-75" v-for="item in timeline">
          <div class="col position-relative">
            <div class="position-absolute rounded-timeline rounded-pill"></div>
            <h3>{{ item.date }}</h3>
            <p>{{ item.description }}</p>
          </div>
        </div>
      </div>
    </section>

    <section id="prize-pool" class="py-5 position-relative">
      <img src="<?php echo base_url() ?>public/img/ornamen/ornam7.png" alt="Ornamen" id="ornamen_prize" class="d-none d-md-block position-absolute" width="300" height="300">
      <img src="<?php echo base_url() ?>public/img/ornamen/leaves.png" alt="Ornamen" id="ornamen_prize_2" class="d-none d-md-block position-absolute" width="300" height="300">
      <img src="<?php echo base_url() ?>public/img/ornamen/leaf.png" alt="Ornamen" id="ornamen_prize_3" class="d-none d-md-block position-absolute" width="300" height="300">
      <div class="container py-5">
        <h2 class="text-center mb-5">RE Innovation Prize Pool!</h2>
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center pt-5">
          <i class="fas fa-trophy mx-5"></i>
          <div class="mx-5">
            <h2>#1st</h2>
            <p>Rp. Coming Soon</p>
            <br>
            <h2>#2nd</h2>
            <p>Rp. Coming Soon</p>
            <br>
            <h2>#3rd</h2>
            <p>Rp. Coming Soon</p>
            <h2>Best Pitch</h2>
            <p>Rp. Coming Soon</p>
          </div>
        </div>
        <br><br><br><br><br><br><br>
        <h2 class="text-center mb-5">Don't forget to register!</h2>
        <div class="d-flex justify-content-center">
          <a class="btn btn-primary mx-3" href="<?php echo base_url("register-re-innovation-comp") ?>">
            Register for Your Team!
          </a>
        </div>
        <br><br><br><br><br>
      </div>
    </section>

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
  <script src="<?php echo base_url() ?>public/js/pages/re_innovation.js"></script>
</body>

</html>