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

    <!-- Jumbotron -->
    <section id="jumbotron" class="d-flex align-items-center position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center text-xl-start col-xl-8">
            <h1 class="mb-5">CONTACT</h1>
            <p class="mb-5">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!
            </p>
            <a href="#futurest-sosmed" class="btn btn-outline-success btn-lg">Read More</a>
          </div>
          <div class="d-none d-xl-flex col-xl-4 d-flex align-items-center justify-content-center">
            <i class="bi bi-person-lines-fill"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- Futurest Sosmed -->
    <section id="futurest-sosmed" class="pt-5">
      <div class="container pt-5">
        <h2 class="text-center mb-5">Futurest Social Media</h2>
        <div class="row mt-5 px-3 d-flex justify-content-center">
          <div class="card-sosmed-futurest m-3 col-md-3 p-0" style="background-color: #e3e3e3;">
            <img src="<?php echo base_url() ?>public/img/cara-daftar.jpg" alt="" class="img-fluid" />
            <div class="p-3">
              <h3>Instagram</h3>
              <p>250+ Followers</p>
              <button class="btn btn-outline-success">View</button>
            </div>
          </div>
          <div class="card-sosmed-futurest m-3 col-md-3 p-0" style="background-color: #e3e3e3;">
            <img src="<?php echo base_url() ?>public/img/contact-parallax-test.jpg" alt="" class="img-fluid" />
            <div class="p-3">
              <h3>LinkedIn</h3>
              <p>250+ Connection</p>
              <button class="btn btn-outline-success">View</button>
            </div>
          </div>
          <div class="card-sosmed-futurest m-3 col-md-3 p-0" style="background-color: #e3e3e3;">
            <img src="<?php echo base_url() ?>public/img/event-parallax-test.jpg" alt="" class="img-fluid" />
            <div class="p-3">
              <h3>Google Mail</h3>
              <p>Powerfull Message</p>
              <button class="btn btn-outline-success">View</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Admin Social Media -->
    <section id="admin-sosmed" class="pt-5">
      <div class="container pt-5">
        <h2 class="text-center mb-5">Admin Social Media</h2>
        <div class="row mt-5 px-3 d-flex justify-content-center">
          <div class="card-admin-futurest m-3 col-md-3 p-0" style="background-color: #e3e3e3;">
            <img src="<?php echo base_url() ?>public/img/cara-daftar.jpg" alt="" class="img-fluid" />
            <div class="p-3">
              <h3>Hafizh Abid W</h3>
              <p>Valorant Admin</p>
              <button class="btn btn-outline-success">View Valorant Account</button>
            </div>
          </div>
          <div class="card-admin-futurest m-3 col-md-3 p-0" style="background-color: #e3e3e3;">
            <img src="<?php echo base_url() ?>public/img/contact-parallax-test.jpg" alt="" class="img-fluid" />
            <div class="p-3">
              <h3>Danish Putra Dandi</h3>
              <p>Valorant Admin</p>
              <button class="btn btn-outline-success">View Valorant Account</button>
            </div>
          </div>
          <div class="card-admin-futurest m-3 col-md-3 p-0" style="background-color: #e3e3e3;">
            <img src="<?php echo base_url() ?>public/img/event-parallax-test.jpg" alt="" class="img-fluid" />
            <div class="p-3">
              <h3>Achmad A Amrega</h3>
              <p>Dota Admin</p>
              <button class="btn btn-outline-success">View Dota Account</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Us -->
    <section id="contact-us" class="d-flex align-items-center">
      <div class="container h-75">
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
          <button class="btn btn-lg btn-success d-block m-auto">Submit</button>
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