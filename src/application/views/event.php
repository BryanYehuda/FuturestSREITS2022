<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
    $this->load->view('template/meta');
  ?>
  <title>Futurest Event</title>
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
               <div class="col-12 col-xl-8">
                  <h1 class="mb-5">{{ jumbotron.title }}</h1>
                  <p>
                     {{ jumbotron.description }}
                  </p>
               </div>
               <div class="d-none d-xl-flex col-xl-4 d-flex align-items-center justify-content-center">
                  <i class="bi bi-bug"></i>
               </div>
            </div>
         </div>   
      </section>

      <section id="apa-saja" class="py-5">
         <div class="container py-5">
            <h2 class="text-center d-none d-sm-block">
               <span class="px-sm-4 py-2 border border-3 border-dark text-white">
                  Ada apa saja di FUTUREST 2022?
               </span>
            </h2>
            <h2 class="span text-center border border-3 border-dark text-white d-block d-sm-none py-2">
               Ada apa saja di FUTUREST 2022?
            </h2>
            <div class="row text-center">
               <div class="col d-flex flex-column align-items-center justify-content-center text-white mx-2 mx-md-3 p-3 mb-3" v-for="item in apaSaja">
                  <i :class="item.icon"></i>
                  <h4 class="text-bold">{{ item.title }}</h4>
                  <p>
                     {{ item.description }}
                  </p>
               </div>
            </div>
         </div>
      </section>

      <section id="fakta-unik">
         <div class="container">
            <div class="row px-3">
               <div class="d-none d-lg-block col-lg-6">
                  <img src="<?php echo base_url() ?>/public/img/fakta-unik.jpg" alt="Fakta Unik Futurest 2022" class="img-fluid">
               </div>
               <div class="container-desc-fakta-unik col bg-success d-flex align-items-center justify-content-center text-center px-5 position-relative text-white">
                  <span class="title-fakta-unik position-absolute px-3 py-2 h2 border border-dark border-3">Fakta Unik</span>
                  <p class="pt-4">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis neque culpa magni sequi? Accusamus repudiandae ea enim distinctio nisi laboriosam facilis beatae voluptatum voluptatem, ratione atque, assumenda fugit quisquam maxime?
                  </p>
               </div>
            </div>
         </div>
      </section>

      <section id="timeline" class="py-5">
         <div class="container d-flex flex-column align-items-center text-white">
            <h2 class="mb-5 text-dark">Timeline Event</h2>
            <div class="row mb-3 p-3 w-75" v-for="item in timeline">
               <div class="col position-relative">
                  <div class="position-absolute rounded-timeline rounded-pill"></div>
                  <h3>{{ item.date }}</h3>
                  <p>{{ item.description }}</p>
               </div>
            </div>
         </div>
      </section>

      <section id="cara-daftar" class="py-5 position-relative d-flex align-items-center">
         <div class="container text-white">
            <h2 class="mb-5 text-center text-dark">How to regist?</h2>
            <div class="row">
               <div class="col m-2 p-4" v-for="item in caraDaftar1">
                  <p><span class="angka-cara-daftar">{{ item.number }}</span>{{ item.description }}</p>
               </div>
            </div>
            <div class="row">
               <div class="col m-2 p-4" v-for="item in caraDaftar2">
                  <p><span class="angka-cara-daftar">{{ item.number }}</span>{{ item.description }}</p>
               </div>
            </div>
         </div>
      </section>

      <section id="pertanyaan" class="py-5">
         <div class="container py-5">
            <h2 class="mb-5 text-center">Question and Answer</h2>
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