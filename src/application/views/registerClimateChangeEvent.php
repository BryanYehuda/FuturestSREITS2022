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
             <h1 class="register text-center">Register Climate Change Event</h1>

             <div class="register-form mt-3 mb-3">
               <div class="">

                 <div class="row">
                   <div class="col-md-13  container">
                     <div class="col-md-7  container">
                       <!-- Form -->
                       <form action="#" class="" id="form" method="post">
                         <p class="shadow-none p-3 mb-5 bg-light rounded fs-6">
                           Only for ITS students batch 2019-2021 and will be selected for 15 students.
                           <br>
                           <b>Guide book link:</b>
                           <a href="https://bit.ly/Guidebook3C" target="_blank">Guide Book Climate Change Community</a>
                         </p>
                         <div class="form-group text-dark ">
                           <label for="name" class="text-dark"><i class="text-dark"> </i> Name </label>
                           <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                            (form_error('name') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                            echo $ok; ?>" id="name" name="name" placeholder="Your Name ll Ex: Devitweb development" required>
                           <div class="invalid-feedback" id="name-false">
                             <?php echo form_error('name'); ?>
                           </div>
                         </div><br>
                         <div class="form-group text-dark">
                           <label for="email"><i class="text-dark float"></i> Email </label>
                           <input type="email" class="form-control text-dark <?php $ok = " ";
                                                                              (form_error('email') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                              echo $ok; ?>" id="email" name="email" placeholder="Email ll Ex: Devitweb@gmail.com" required>
                           <div class="invalid-feedback" id="email-false">
                             <?php echo form_error('email'); ?>
                           </div>
                         </div><br>
                         <div class=" form-group text-dark">
                           <label for="name"><i class="float"></i>Current Domicile </label>
                           <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                            (form_error('domicile') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                            echo $ok; ?>" id="domicile" name="domicile" placeholder="Domicile ll Ex: Surabaya, Jawa Timur" required>
                           <div class="invalid-feedback" id="domicile-false">
                             <?php echo form_error('domicile'); ?>
                           </div>
                         </div><br>
                         <div class="form-group text-dark">
                           <label for="name"><i class="float"></i> University </label>
                           <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                            (form_error('university') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                            echo $ok; ?>" id="university" name="university" placeholder="University ll Ex: Institut Teknologi Sepuluh Nopember" required>
                           <div class="invalid-feedback" id="university-false">
                             <?php echo form_error('university'); ?>
                           </div>
                         </div><br>
                         <div class="form-group text-dark">
                           <label for="name"><i class="float"></i> Major </label>
                           <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                            (form_error('major') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                            echo $ok; ?>" id="major" name="major" placeholder="Major ll Ex: Information Technology" required>
                           <div class="invalid-feedback" id="major-false">
                             <?php echo form_error('major'); ?>
                           </div>
                         </div><br>

                         <label for="pwd"><i class="float"></i> Batch </label>
                         <select class="form-select <?php $ok = " ";
                                                    (form_error('batch') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                    echo $ok; ?>" aria-label="Default select example" id="batch" name="batch" required>
                           <option selected disabled>-</option>
                           <option value="2019">2019</option>
                           <option value="2020">2020</option>
                           <option value="2021">2021</option>
                         </select>
                         <div class="invalid-feedback" id="batch-false">
                           <?php echo form_error('batch'); ?>
                         </div><br>

                         <label for="basic-url" class="form-label">Linkedin URL</label>
                         <div class="input-group mb-3">
                           <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                            (form_error('linkedin') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                            echo $ok; ?>" id="linkedin" aria-describedby="basic-addon3" placeholder="Linkedin URL ll Ex: https://www.linkedin.com/company/futureenergysummit/" name="linkedin">
                           <div class="invalid-feedback" id="linkedin-false">
                             <?php echo form_error('linkedin'); ?>
                           </div><br>
                         </div>

                         <div class="mb-3">
                           <label for="name"><i class="float"></i> Curriculum Vitae </label>
                           <input class="form-control text-dark " type="file" id="CV" name="CV" multiple>
                           <div class="invalid-feedback" id="CV-false">

                           </div><br>
                         </div><br>

                         <p class="shadow-none p-3 mb-5 bg-light rounded fs-5">Please elaborate your knowledge about renewable energy and its condition in Indonesia! </p>

                         <div class="form-group text-dark ">
                           <label for="name" class="text-dark"><i class="text-dark"> </i> What is your motivation to join this social project?<br> Min 100 words</label>
                           <textarea class="form-control text-dark <?php $ok = " ";
                                                                    (form_error('motivation') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                    echo $ok; ?>" class="form-control text-dark" id="motivation" name="motivation" placeholder="Your Motivation..." rows="3"></textarea>
                           <div class="invalid-feedback" id="motivation-false">
                             <?php echo form_error('motivation'); ?>
                           </div><br>
                         </div><br>

                         <div class="form-group text-dark ">
                           <label for="name" class="text-dark"><i class="text-dark"> </i> What is your contribution to this project? </label>
                           <textarea class="form-control text-dark <?php $ok = " ";
                                                                    (form_error('contibution') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                    echo $ok; ?>" class="form-control text-dark" id="contribution" name="contribution" placeholder="Your Contribution..." rows="3"></textarea>
                           <div class="invalid-feedback" id="contribution-false">
                             <?php echo form_error('contibution'); ?>
                           </div><br>
                         </div><br>

                         <label for="name"><i class="float"></i> Scale of Prioritization towards the Program </label><br>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="prioritze" id="inlineRadio1" value="1" required>
                           <label class="form-check-label" for="inlineRadio1">1</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="prioritze" id="inlineRadio2" value="2" required>
                           <label class="form-check-label" for="inlineRadio2">2</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="prioritze" id="inlineRadio3" value="3" required>
                           <label class="form-check-label" for="inlineRadio3">3</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="prioritze" id="inlineRadio4" value="4" required>
                           <label class="form-check-label" for="inlineRadio4">4</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="prioritze" id="inlineRadio5" value="5" required>
                           <label class="form-check-label" for="inlineRadio5">5</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="prioritze" id="inlineRadio6" value="6" required>
                           <label class="form-check-label" for="inlineRadio6">6</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="prioritze" id="inlineRadio7" value="7" required>
                           <label class="form-check-label" for="inlineRadio7">7</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="prioritze" id="inlineRadio8" value="8" required>
                           <label class="form-check-label" for="inlineRadio8">8</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="prioritze" id="inlineRadio9" value="9" required>
                           <label class="form-check-label" for="inlineRadio9">9</label>
                         </div>
                         <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="prioritze" id="inlineRadio10" value="10" required>
                           <label class="form-check-label" for="inlineRadio10">10</label>
                         </div><br><br>

                         <label for="name"><i class="float"></i> Are you willing to go to Surabaya and stay from March to June 2022? </label>
                         <div class="form-check">
                           <input class="form-check-input" type="radio" name="willingness" id="flexCheckChecked" value="yes" required>
                           <label class="form-check-label" for="flexCheckChecked">
                             Yes
                           </label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" type="radio" name="willingness" id="flexCheckChecked" value="no" required>
                           <label class="form-check-label" for="flexCheckChecked">
                             No
                           </label>
                         </div>

                         <br>
                         <label for="name"><i class="float"></i> Are you committed to following the event from start to finish? (note: if you leave the event, there will be a penalty) </label>
                         <div class="form-check">
                           <input class="form-check-input" type="radio" name="committed" id="flexCheckChecked" value="yes" required>
                           <label class="form-check-label" for="flexCheckChecked">
                             Yes
                           </label>
                         </div>
                         <div class="form-check">
                           <input class="form-check-input" type="radio" name="committed" id="flexCheckChecked" value="no" required>
                           <label class="form-check-label" for="flexCheckChecked">
                             No
                           </label>
                         </div>
                         <br>
                         <div class="mb-3">
                           <label for="name"><i class="float"></i> Proof of following Futurest ITS instagram </label>
                           <input class="form-control text-dark  <?php $ok = " ";
                                                                  (!empty($error['followfuturestig'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                  echo $ok; ?>" type="file" id="followfuturestig" multiple name="followfuturestig" required>
                           <div class="invalid-feedback" id="followfuturestig-false">
                             <?php echo $error['followfuturestig']; ?>
                           </div>
                         </div><br>

                         <div class="mb-3">
                           <label for="name"><i class="float"></i> Proof of following SRE ITS instagram </label>
                           <input class="form-control text-dark <?php $ok = " ";
                                                                (!empty($error['followsreig'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                echo $ok; ?>" type="file" id="followsreig" multiple name="followsreig" required>
                           <div class="invalid-feedback" id="followsreig-false">
                             <?php echo $error['followsreig']; ?>
                           </div>
                         </div><br>

                         <div class="mb-3">
                           <label for="name"><i class="float"></i> Proof of share story and tag 3 friends
                           </label>
                           <input class="form-control text-dark <?php $ok = " ";
                                                                (!empty($error['sharestory'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                echo $ok; ?>" type="file" id="sharestory" multiple name="sharestory" required>
                           <div class="invalid-feedback" id="sharestory-false">
                             <?php echo $error['sharestory']; ?>
                           </div>
                         </div><br>
                         <div class="mb-3">
                           <label for="name"><i class="float"></i> Proof of post a twibbon </label><br>
                           <label for="name"><i class="float"></i> Link : </label>
                           <a href="https://twb.nz/batch1openrecruitment" class="link-primary">Twibbon</a>
                           <input class="form-control text-dark <?php $ok = " ";
                                                                (!empty($error['twibbon'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                echo $ok; ?>" type="file" id="twibbon" multiple name="twibbon">
                           <div class="invalid-feedback" id="twibbon-false">
                             <?php echo $error['twibbon']; ?>
                           </div>
                         </div>
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
   <script>
     var base_url = '<?php echo base_url() ?>';
   </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script type="text/javascript" src="<?php echo base_url() ?>public/js/backend/register3c.js"></script>
 </body>

 </html>

