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
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/contact.css">
</head>

<body>
   <?php
      $this->load->view('components/navbar');
   ?>

  <main id="section">

   <section id="jumbotron" class="d-flex align-items-center position-relative">
      <div class="container text-center">
         <h1 class="mb-5">LOREM IPSUM</h1>
         <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
         </p>
      </div>   
   </section>

   <section id="sosmed" class="d-flex align-items-center">
      <div class="container h-100 d-flex flex-column justify-content-center">
         <h2 class="text-center mb-2 mb-md-5">Search us on social media!</h2>
         <div class="row" style="height: 40%;">
            <a href="" class="card-sosmed col m-2 mx-md-3 mx-lg-5 d-flex flex-column align-items-center justify-content-center">
               <i class="bi bi-linkedin"></i>
               <h3>350+</h3>
               <h4 class="text-center">LinkedIn Connection</h4>
            </a>
            <a href="" class="card-sosmed col m-2 mx-md-3 mx-lg-5 d-flex flex-column align-items-center justify-content-center">
               <i class="bi bi-instagram"></i>
               <h3>2500+</h3>
               <h4 class="text-center">Instagram Followers</h4>
            </a>
            <a href="" class="card-sosmed col m-2 mx-md-3 mx-lg-5 d-flex flex-column align-items-center justify-content-center">
               <i class="bi bi-envelope"></i>
               <h4 class="text-center">Email</h4>
            </a>
         </div>
      </div>
   </section>

   <section id="contact-us" class="d-flex align-items-center">
      <div class="container h-75 text-white">
         <h2 class="text-center mb-5">Message Us!</h2>
         <form action="">
            <div class="mb-5">
               <label for="exampleFormControlInput1" class="form-label">Email address</label>
               <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email here...">
            </div>
            <div class="mb-5">
               <label for="exampleFormControlTextarea1" class="form-label">Message Text</label>
               <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Enter a message here..."></textarea>
            </div>
            <button class="btn btn-lg d-block m-auto">Submit</button>
         </form>
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