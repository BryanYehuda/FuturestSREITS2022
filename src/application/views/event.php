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
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/events.css">
</head>

<body>
  <header>
    <?php
      $this->load->view('components/navbar');
    ?>
  </header>

  <main id="section">

  <section id="jumbotron" class="d-flex align-items-center position-relative">
      <div class="container">
         <div class="row">
            <div class="col-8 border border-5">
               <h1 class="mb-5">FUTUREST 2022</h1>
               <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
               </p>
            </div>
            <div class="col-4 border border-5 d-flex align-items-center justify-content-center">
               <i class="bi bi-bug"></i>
            </div>
         </div>
      </div>   
   </section>

   <section id="apa-saja">
      <div class="container">
         <h2 class="text-center">Ada apa saja di Futurest 2022?</h2>
         <div class="row text-center">
            <div class="col">Hello World</div>
            <div class="col">Hello World</div>
            <div class="col">Hello World</div>
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
</body>

</html>
