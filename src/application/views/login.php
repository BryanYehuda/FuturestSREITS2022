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
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/login.css">
  <!-- Import css if need -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>


<body>

  <header>
    <?php
    $this->load->view('components/navbar');
    ?>
  </header>

  <br><br><br><br><br>
  <main id="section">
    <div class="container">

      <div class="container register center">

        <!-- Main Data -->
        <div class="row">
          <div class=".col-6 .col-md-10 register-right ">
            <br>
            <h1 class="register text-center">LOGIN HERE</h1>
            <div class="register-form mt-3 mb-3">
              <div class="">
                <div class="row">
                  <div class="col-md-13  container">
                    <div class="col-md-7  container">
                      <?php if ($this->session->flashdata('message')) : ?>
                        <?= $this->session->flashdata('message'); ?>
                      <?php endif; ?>
                      <!-- Form -->
                      <form action="<?= base_url('Auth/logging_in'); ?>" method="POST">
                        <div class="form-group text-dark ">
                          <label for="username" class="text-dark"><i class="text-dark"> </i> Username</label>
                          <input name="username" id="username" type="text" class="form-control text-dark" placeholder="Enter username" value="<?php echo set_value('username'); ?>">
                          <?php if ($this->session->flashdata('usernameError')) : ?>
                            <?= $this->session->flashdata('usernameError'); ?>
                          <?php endif; ?>
                        </div><br>
                        <div class="form-group text-dark">
                          <label for="password"><i class="float"></i> Password</label>
                          <input type="password" name="password" id="password" class="form-control text-dark" placeholder="Enter password">
                          <?php if ($this->session->flashdata('passwordError')) : ?>
                            <?= $this->session->flashdata('passwordError'); ?>
                          <?php endif; ?>
                        </div><br>
                        <button type="submit" class="btn btn1 mb-4 mt-1 float-center ">Login</button>
                        <p>Don't have an account? <a href="<?php echo base_url('choose-event') ?>">Register Here</a></p>
                      </form>
                      <!-- End Form -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Main Data -->
        </form>
      </div>
    </div>
    <!-- End Event Data -->
  </main>

  <br><br><br><br><br>

  <footer>
    <?php
    $this->load->view('components/footerblue');
    ?>
  </footer>

  <?php
  $this->load->view('template/script');
  ?>

  <!-- Import js if need -->
</body>

</html>