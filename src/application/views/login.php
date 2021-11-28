<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
  $this->load->view('template/meta');
  ?>
  <title>Login</title>
  <?php
  $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/login.css">
</head>

<body>
  <?php
  $this->load->view('components/navbar');
  ?>
  <br>
  <br>
  <br>
  <main id="section" style="min-height:600px;">
    <section class="Form my-4 mx-3 mx-md-5">
      <div class="container">
        <div class="row-login g-0 row">
          <div class="col-lg-5">
            <img src="<?php echo base_url() ?>public/img/400x600.png" alt="" class="img-fluid bg-img d-none d-lg-block">
          </div>
          <div class="col-lg-7 px-3 px-md-5 pt-5">
            <img src="<?php echo base_url() ?>public/img/Logo.png" alt="" class="img-fluid py-3">
            <h4 class="primary-text">Login with your Futurest account</h4>
            <form>
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="email" placeholder="Enter email" class="form-control my-3 p-2 regular-text">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-7">
                  <input type="password" placeholder="Enter password" class="form-control my-3 p-2 regular-text">
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-7">
                  <button type="button" class="btn1 mt-3 mb-5 primary-text">Login</button>
                </div>
              </div>
              <p class="regular-text">Don't have an account? <a href="#" class="italic-text"> Register Here</a></p>
            </form>
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
</body>

</html>