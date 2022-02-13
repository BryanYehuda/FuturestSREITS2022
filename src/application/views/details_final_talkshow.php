<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
  $this->load->view('template/meta');
  ?>
  <title>Final Talkshow </title>
  <?php
  $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/final_talkshow.css">
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
              Final Talkshow
            </h1>
            <p class="mb-5">
              <b>Final Talkshow</b> is one of the last series of talk shows that presents interesting themes and speakers as the closing of the FUTUREST 2022 event.
            </p>
            <a href="#timeline" class="btn btn-primary">Show Timeline</a>
            <a href="<?php echo base_url("register-final-talkshow-event"); ?>" class="btn btn-primary">Register Here</a>
          </div>
          <div class="d-none d-xl-flex col-xl-4 d-flex align-items-center justify-content-center">
            <i class="bi bi-journal-bookmark"></i>
          </div>
        </div>
      </div>
    </section>

    <section id="timeline" class="py-5 position-relative">
      <div class="container d-flex flex-column align-items-center py-5">
        <h2 class="mb-5">Final Talkshow Timeline</h2>
        <div class="row mb-3 px-4 py-3 w-75" v-for="item in timeline">
          <div class="col position-relative">
            <div class="position-absolute rounded-timeline rounded-pill"></div>
            <h3>{{ item.date }}</h3>
            <p>{{ item.description }}</p>
          </div>
        </div>
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
  <script src="<?php echo base_url() ?>public/js/pages/final_talkshow.js"></script>
</body>

</html>