<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
    $this->load->view('template/meta');
  ?>
  <title>Register</title>
  <?php
    $this->load->view('template/css');
  ?>
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/register.css">
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
        <div class="row">
          <div class=".col-6 .col-md-10 register-right ">
            <br>
            <h1 class=" register text-center  ">REGISTER HERE<br> </h1>
            <div class="register-form mt-3 mb-3">
              <div class="container" style="padding-right: 0.4rem; padding-left: 0.25rem;">
                <div class="row" style="padding-right: 0 !important; padding-left: 0 !important;">
                  <div class="col">
                  </div>



                  <div class="col-md-13  container">
                    <div class="col-md-7  container">
                      <form action="#" class=" ">
                        <div class="form-group text-dark ">

                          <label for="name" class="text-dark "><i class="text-dark float"> </i> Name</label>
                          <input type="text" class="form-control text-dark">
                        </div><br>

                        <div class="form-group text-dark">
                          <label for="email"><i class="text-dark float"></i> Email</label>
                          <input type="email" class="form-control text-dark">
                        </div><br>
                        <div class="form-group text-dark">
                          <label for="pwd"><i class="float"></i> New Password</label>
                          <input type="password" class="form-control text-dark" id="pwd">
                        </div><br>
                        <div class="form-group text-dark">
                          <label for="pwd"><i class="float"></i> Confirm Password</label>
                          <input type="password" class="form-control text-dark" id="pwd">
                        </div><br>
                        <!-- Example single danger button -->





                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




        <div class="register center">
          <div class="row">

            <div class=".col-6 .col-md-10 register-right ">

              <h2 class="text-center ">INSERT YOUR DATA <br> </h2>

              <div class="register-form mt-5 mb-5">

                <div class="container">

                  <div class="row">

                    <div class="col">
                    </div>



                    <div class="col-md-13  container">
                      <div class="col-md-7  container">
                        <form action="#" class="">
                          <div class="form-group text-dark ">

                            <label for="name" class="text-dark "><i class="text-dark float"> </i> Institution</label>
                            <input type="text" class="form-control text-dark">
                          </div><br>

                          <div class="form-group">
                            <label for="exampleFormControlFile1">Image</label><br>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                          <hr><br>

                          <div class="form-group">
                            <label for="exampleFormControlFile1">Identity Card</label><br>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                          <hr><br>


                          <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Choose Competition
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">RE Innovations Brainstorming - Rp. Lorem Ipsum</a></li>
                              <li><a class="dropdown-item" href="#">Essay Competition - Rp. Lorem Ipsum</a></li>
                            </ul>
                          </div>
                          <hr>
                          <div class="form-group">
                            <br>
                            <label for="exampleFormControlFile1">Payment</label><br>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                          <hr><br>
                          <!-- Example single danger button -->

                          <button type="submit" class="btn btn-danger mb-1 mt-1 float-center">Register</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <br><br><br><br><br><br>
  
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