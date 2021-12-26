<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
    $this->load->view('template/meta');
  ?>
  <title>Details Essay Competition</title>
  <?php
    $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/essay.css">
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
              National Essay Competition
            </h1>
            <p class="mb-5">
              <b>The National Essay Competition</b> is intended for undergraduate and vocational students from universities all over Indonesia to apply their innovative ideas and solutions to the renewable energy sector that contribute to a more sustainable future. This competition is held with the hope that all the essays from participants could contribute to the energy transition efforts and achieve Indonesia's energy security. Participants are challenged to provide their ideas through logical and targeted solutions related to renewable energy in Indonesia. These solutions are expected to be elaborated in the form of an essay with clear, concise, objective, and easily understood by the readers.
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
            <h2 class="mb-5">National Essay Timeline</h2>
            <div class="row mb-3 px-4 py-3 w-75" v-for="item in timeline">
               <div class="col position-relative">
                  <div class="position-absolute rounded-timeline rounded-pill"></div>
                  <h3>{{ item.date }}</h3>
                  <p>{{ item.description }}</p>
               </div>
            </div>
         </div>
    </section>
    
    <section id="prize-pool" class="py-5">
      <div class="container py-5">
        <h2 class="text-center mb-5">National Essay Prize Pool!</h2>
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center pt-5">
          <i class="fas fa-trophy mx-5"></i>
          <div class="mx-5">
            <h2>#1st</h2>
            <p>Rp. 5.000.000</p>
            <br>
            <h2>#2nd</h2>
            <p>Rp. 3.000.000</p>
            <br>
            <h2>#3rd</h2>
            <p>Rp. 2.000.000</p>
          </div>
        </div>
        <br><br><br><br><br><br><br>
        <h2 class="text-center mb-5">Don't forget to register!</h2>
        <div class="d-flex justify-content-center">
          <a class="btn btn-lg btn-outline-success mx-3" href="">
            As yourself
          </a>
          <a class="btn btn-lg btn-outline-success mx-3" href="">
            As team
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
  <script src="<?php echo base_url() ?>public/js/pages/essay.js"></script>
</body>

</html>
