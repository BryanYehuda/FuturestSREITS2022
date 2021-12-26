<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
  $this->load->view('template/meta');
  ?>
  <title>Climate Change Community</title>
  <?php
  $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/re_innovation.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
              3C (Climate Change Community)
            </h1>
            <p class="mb-5">
              <b>Social Project </b>is an event that provides a forum for prospective delegates which are chosen students from ITS to express their ideas as climate activists that are applicable to renewable energy and can have a big impact on the community. They also will receive coaching from professionals in each pathway.
            </p>
            <a href="#timeline" class="btn btn-success btn-lg">Show Timeline</a>
          </div>
          <div class="d-none d-xl-flex col-xl-4 d-flex align-items-center justify-content-center">
            <i class="bi bi-journal-bookmark"></i>
          </div>
        </div>
      </div>
    </section>

    <section id="timeline" class="py-5">
      <div class="container d-flex flex-column align-items-center py-5">
        <h2 class="mb-5">3C (Climate Change Community) Timeline</h2>
        <div class="row mb-3 px-4 py-3 w-75" v-for="item in timeline">
          <div class="col position-relative">
            <div class="position-absolute rounded-timeline rounded-pill"></div>
            <h3>{{ item.date }}</h3>
            <p>{{ item.description }}</p>
          </div>
        </div>
      </div>


      <h2 class="text-center mb-5">Don't forget to register!</h2>
      <div class="d-flex justify-content-center">
        <a class="btn btn-success btn-lg" href="">
          Register for Your Self!
        </a>
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
  <script src="<?php echo base_url() ?>public/js/pages/climate_change.js"></script>
</body>

</html>