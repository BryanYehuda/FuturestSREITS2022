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
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/registerGTS.css">
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
            <!-- image -->
            <img src="<?php echo base_url() ?>/public/img/logo-utama.png" width="200" height="200" alt="FUTUREST" class="d-block mx-auto img-fluid" /><br>
            <h2 class="logo-regist">Futurest 2022</h2><br><br>
            <h1 class="register text-center">Individual Essay Competition</h1>
            <div class="register-form mt-3 mb-3">
              <div class="">
                <div class="row">
                  <div class="col-md-13  container">
                    <div class="col-md-7  container">
                      <!-- Form -->
                      <form action="#" class="" id="form" method="post">

                      <div class="form-group text-dark ">
                          <label for="name" class="text-dark"><i class="text-dark"> </i> Full Name </label>
                          <input type="text" class="form-control text-dark <?php $ok = " "; (form_error('name_1') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" name="name_1" id="name_1" placeholder="Your Name ll Ex: Devitweb development" required>
                          <div class="invalid-feedback" id="name_1-false">
                              <?php echo form_error('name_1');?>
                          </div>
                      </div><br>
                      <div class="form-group text-dark">
                          <label for="age"><i class="text-dark float"></i> Age <b>(17-24)</b> </label>
                          <input type="number" class="form-control text-dark <?php $ok = " "; (form_error('age_1') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" name="age_1" id="age_1" placeholder="age ll Ex: 24" required>
                          <div class="invalid-feedback" id="age_1-false">
                              <?php echo form_error('age_1');?>
                          </div>
                      </div><br>
                      <div class="form-group text-dark">
                          <label for="name"><i class="float"></i> Institution </label>
                          <input type="text" class="form-control text-dark <?php $ok = " "; (form_error('university_1') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" id="university_1" name="university_1" placeholder="University ll Ex: Institut Teknologi Sepuluh Nopember" required>
                          <div class="invalid-feedback" id="university_1-false">
                              <?php echo form_error('university_1');?>
                          </div>
                      </div><br>
                      <div class="form-group text-dark">
                          <label for="name"><i class="float"></i> Major (Optional)</label>
                          <input type="text" class="form-control text-dark <?php $ok = " "; (form_error('major_1') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" id="major_1" name="major_1" placeholder="Major ll Ex: Information Technology">
                          <div class="invalid-feedback" id="major_1-false">
                              <?php echo form_error('major_1');?>
                          </div>
                      </div><br>
                      <div class="mb-3">
                          <label for="name"><i class="float"></i> Student ID Card or Statement Letter of Active Student Scan <b>(pdf)</b></label>
                          <input class="form-control text-dark <?php $ok = " "; (!empty($error['card_1'])) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" type="file" id="card_1" name="card_1" multiple required>
                          <div class="invalid-feedback" id="card_1-false">
                              <?php echo $error['card_1'];?>
                          </div>
                      </div><br>
                      <!--<div class="mb-3">
                          <label for="name"><i class="float"></i> Statement Letter of Active Student Scan<b>(pdf)</b></label>
                          <input class="form-control text-dark <?php $ok = " "; (!empty($error['activestudent_1'])) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" type="file" id="activestudent_1" name="activestudent_1" multiple required>
                          <div class="invalid-feedback" id="activestudent_1-false">
                              <?php echo $error['activestudent_1'];?>
                          </div>
                      </div>
                      <br>
                      <div class="mb-3">
                          <label for="name"><i class="float"></i> Half-body picture 4 x 6</label>
                          <label for="name"><i class="float"></i> <b>formal, plain background </b>(JPG, JPEG, PNG)</label>
                          <input class="form-control text-dark <?php $ok = " "; (!empty($error['photo_1'])) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" type="file" id="photo_1" name="photo_1" multiple required>
                          <div class="invalid-feedback" id="photo_1-false">
                              <?php echo $error['photo_1'];?>
                          </div>
                      </div>
                      <br>-->
                      <div class="form-group text-dark">
                          <label for="phone"><i class="text-dark float"></i> Phone Number </label>
                          <input type="phone" class="form-control text-dark <?php $ok = " "; (form_error('phone_1') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" name="phone_1" id="phone_1" placeholder="phone ll Ex: 08XX XXXX XXXX" required>
                          <div class="invalid-feedback" id="phone_1-false" >
                              <?php echo form_error('phone_1');?>
                          </div>
                      </div><br>

                      <div class="form-group text-dark">
                          <label for="email"><i class="text-dark float"></i> Email Address</label>
                          <input type="email" class="form-control text-dark <?php $ok = " "; (form_error('email_1') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" id="email_1" name="email_1" placeholder="Email ll Ex: Devitweb@gmail.com" required>
                          <div class="invalid-feedback" id="email_1-false">
                              <?php echo form_error('email_1');?>
                          </div>
                      </div><br>

                      <div class="mb-3">
                          <label for="name"><i class="float"></i> Proof of posting our twibbon </label>
                          <a href="https://bit.ly/TwibbonNECFuturest2022" class="link-primary">https://bit.ly/TwibbonNECFuturest2022/</a>
                          <input class="form-control text-dark <?php $ok = " "; (!empty($error['twibbon_1'])) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" type="file" id="twibbon_1" name="twibbon_1" multiple required>
                          <div class="invalid-feedback" id="twibbon_1-false">
                              <?php echo $error['twibbon_1'];?>
                          </div>
                      </div><br>
                      
                      <div class="mb-3">
                          <label for="name"><i class="float"></i> Proof of following our official Instagram account @futurest2022 or our linkedin at </label>
                          <a href="https://www.linkedin.com/company/futureenergysummit/" class="link-primary">https://www.linkedin.com/company/futureenergysummit/</a>
                          <input class="form-control text-dark <?php $ok = " "; (!empty($error['follow_1'])) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" type="file" id="follow_1" name="follow_1" multiple required>
                          <div class="invalid-feedback" id="follow_1-false">
                              <?php echo $error['follow_1'];?>
                          </div>
                      </div><br>
                      <!--
                      <div class="mb-3">
                          <label for="name"><i class="float"></i> Payment</label>
                          <input class="form-control text-dark <?php $ok = " "; (!empty($error['payment'])) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" type="file" id="payment" name="payment" multiple required>
                          <div class="invalid-feedback" id="payment-false">
                              <?php echo $error['payment'];?>
                          </div>
                          </div>
                      <br>
                      -->
                      <button type="submit" class="btn btn-danger" id="submit">
                          <i class="hide loading-icon fa fa-spinner fa-spin d-none" id="loading"></i>Submit
                      </button>
                        <!-- Example single danger button -->
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



        <!-- Event Data -->

        <!-- End Event Data -->

      </div>
    </div>
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
  <script>var base_url = '<?php echo base_url()?>';</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>public/js/backend/registeressaycompindividu.js"></script>
</body>

</html>