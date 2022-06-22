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
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/climate_change.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php
  $this->load->view('components/navbar');
  ?>

  <main id="section">

    <section id="jumbotron" class="d-flex align-items-center position-relative img-fluid">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center text-xl-start col-xl-8">
            <h1 class="mb-5">
              3C (Climate Change Community)
            </h1>
            <p class="mb-5">
              <b>Climate Change Community </b>is a 4 Months Program (2 Months Learning + 2 Months Implementation) for High Performer Students to express their ideas as
              Climate Activists on Renewable Energy Implementation in Indonesia. They also will receive coaching from professionals that are exclusively provided. It’s designed for 15 Selected Delegates from Institut Teknologi Sepuluh Nopember Students who are passionate to learn more about Climate Change Mitigation and motivated to build awareness through campaigns while creating impacts for the society through Real Time Project-Based Implementation.
            </p>
            <a href="#timeline" class="btn btn-primary">Show Timeline</a>
          </div>
          <div class="d-none d-xl-flex col-xl-4 d-flex align-items-center justify-content-center">
            <i class="bi bi-journal-bookmark"></i>
          </div>
        </div>
      </div>
    </section>

    <section id="timeline" class="py-5 position-relative">
      <!-- ornamen -->
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
        <a class="btn btn-primary" href="<?php echo base_url("register-climate-change-event"); ?>">
          Register for Your Self!
        </a>
    </section>

    <section id="description" class="py-5 position-relative">
      <div class="container d-flex flex-column align-items-center py-5">
        <h2 class="text-center mb-5">Description</h2>
        <div class="row">
          <p class="text-center mb-3">
            The program will consist of Curriculum that have been carefully set to prepare you on Climate Change Insights and Skill Development. <br> There will be renewable energy enrichment, competencies development, mentoring session and community night, and also real time project based.
          </p>
          <img src="<?php echo base_url() ?>/public/img/3c_desc.png" class="img-fluid my-3 mx-auto desc-img">
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
  <script src="<?php echo base_url() ?>public/js/pages/climate_change.js"></script>
</body>

</html>