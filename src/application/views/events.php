<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
  $this->load->view('template/meta');
  ?>
  <title>Events</title>
  <?php
  $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/event.css">
</head>

<body>
  <?php
  $this->load->view('components/navbar');
  ?>

  <main id="section">

    <section id="jumbotron" class="d-flex align-items-center position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center text-xl-start col-xl-8 ">
            <h1 class="mb-5">{{ jumbotron.title }}</h1>
            <p class="mb-5">
              {{ jumbotron.description }}
            </p>
            <a href="#our-events" class="btn btn-primary">
              Read more
            </a>
          </div>
          <div class="d-none d-xl-flex col-xl-4 d-flex align-items-center justify-content-center">
            <i class="bi bi-calendar4-event"></i>
          </div>
        </div>
      </div>
    </section>

    <section id="our-events" class="py-5 position-relative">
      <img src="<?php echo base_url() ?>public/img/ornamen/ornam6.png" alt="Ornamen" id="ornamen_events" class="position-absolute">
      <img src="<?php echo base_url() ?>public/img/ornamen/ornam2.png" alt="Ornamen" id="ornamen_events_2" class="position-absolute" width="300" height="300">
      <div class="container py-5">
        <h2 class="text-center mb-5">Our Events</h2>
        <div class="row text-center d-flex justify-content-center">
          <div class="card-apa-saja col-11 col-lg-5 d-flex flex-column align-items-center justify-content-center mx-3 p-3 mb-5" v-for="item in events">
            <i :class="item.icon"></i>
            <h3 class="text-bold">{{ item.title }}</h3>
            <p>
              {{ item.description }}
            </p>
            <a :href="item.link" class="btn btn-primary">Know More</a>
          </div>
        </div>
      </div>
    </section>

    <section id="our-competitions" class="py-5 position-relative">

      <div class="container py-5">
        <h2 class="text-center mb-5">Our Competitions</h2>
        <div class="row text-center d-flex justify-content-center">
          <div class="card-apa-saja col-11 col-lg-5 d-flex flex-column align-items-center justify-content-center mx-3 p-3 mb-5" v-for="item in competitions">
            <i :class="item.icon"></i>
            <h3 class="text-bold">{{ item.title }}</h3>
            <p>
              {{ item.description }}
            </p>
            <a :href="item.link" class="btn btn-primary">Know More</a>
          </div>
        </div>
      </div>
    </section>

    <section id="fakta-unik" class="pt-5 position-relative">

      <div class="container pt-5">
        <h2 class="text-center">Unique Fact</h2>
        <div class="row">
          <img src="<?php echo base_url() ?>/public/img/logo-utama.png" alt="Fakta Unik Futurest 2022" class="img-fluid w-25 mx-auto mb-3 fact">
          <p class="text-center">
            <q>
              Futurest 2022 is the first competitions held by one of the biggest organization at ITS, SRE.
            </q>
          </p>
        </div>
      </div>
    </section>

    <section id="timeline" class="py-5 position-relative">
      <div class="container d-flex flex-column align-items-center py-5">
        <h2 class="mb-5">General Timeline</h2>
        <div class="row mb-3 px-4 py-3 w-75" v-for="item in timeline">
          <div class="col position-relative">
            <div class="position-absolute "></div>
            <h3>{{ item.date }}</h3>
            <p>{{ item.description }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- <section id="cara-daftar" class="py-5">
         <div class="container py-5">
            <h2 class="mb-5 text-center">How to regist?</h2>
            <div class="row">
               <div class="col m-3 p-4" v-for="item in caraDaftar">
                  <p><span class="angka-cara-daftar">{{ item.number }}</span>{{ item.description }}</p>
               </div>
            </div>
         </div>
      </section> -->

    <section id="pertanyaan" class="py-5 position-relative">
      <img src="<?php echo base_url() ?>public/img/ornamen/ornam7.png" alt="Ornamen" id="ornamen_tanya" class="position-absolute" width="300" height="300">
      <div class="container py-5">
        <h2 class="mb-5 text-center">General Question and Answer</h2>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item" v-for="item in pertanyaan">
            <h3 class="accordion-header" :id="item.id">
              <button class="accordion-button shadow-none" :class="item.collapsed" type="button" data-bs-toggle="collapse" :data-bs-target="item.dataBsTarget" :aria-expanded="item.ariaExpanded" :aria-controls="item.ariaControls">
                {{ item.question }}
              </button>
            </h3>
            <div :id="item.ariaControls" class="accordion-collapse collapse" :class="item.show" :aria-labelledby="item.id" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                {{ item.answer }}
              </div>
            </div>
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
  <script src="<?php echo base_url() ?>public/js/pages/event.js"></script>
</body>

</html>