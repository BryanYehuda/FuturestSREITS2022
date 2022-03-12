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
                         <h1 class="register text-center">Register Renewable Energy Brainstorm Competition</h1>
                         <div class="register-form mt-3 mb-3">
                             <div class="">
                                 <div class="row">
                                     <div class="col-md-13  container">
                                         <div class="col-md-7  container">
                                             <!-- Form -->
                                             <form action="#" class="" id="form" method="post">

                                                 <div class="form-group text-dark ">
                                                     <label for="name" class="text-dark"><i class="text-dark"> </i> Team Name </label>
                                                     <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('teamname') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="teamname" name="teamname" placeholder="Team Name ll Ex: FuturesTeam" required>
                                                     <div class="invalid-feedback" id="teamname-false">
                                                         <?php echo form_error('teamname'); ?>
                                                     </div>
                                                 </div><br>
                                                 <div class="form-group text-dark ">
                                                     <label for="name" class="text-dark"><i class="text-dark"> </i> College Name </label>
                                                     <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('college') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="college" name="college" placeholder="College Name ll Ex: Institut Teknologi Sepuluh Nopember" required>
                                                     <div class="invalid-feedback" id="college-false">
                                                         <?php echo form_error('college'); ?>
                                                     </div>
                                                 </div><br>
                                                 <div class="d-inline p-2 bg-dark text-white">Member 1 (Team Leader)</div>

                                                 <div class="form-group text-dark ">
                                                     <br><label for="name" class="text-dark"><i class="text-dark"> </i> Full Name </label>
                                                     <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('name_1') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="name_1" name="name_1" placeholder="Your Name ll Ex: Devitweb development" required>
                                                     <div class="invalid-feedback" id="name_1-false">
                                                         <?php echo form_error('name_1'); ?>
                                                     </div>
                                                 </div><br>


                                                 <div class="form-group text-dark">
                                                     <label for="name"><i class="float"></i> Major </label>
                                                     <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('major_1') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="major_1" name="major_1" placeholder="Major ll Ex: Information Technology" required>
                                                     <div class="invalid-feedback" id="major_1-false">
                                                         <?php echo form_error('name_1'); ?>
                                                     </div>
                                                 </div><br>

                                                 <label for="pwd"><i class="float"></i> Batch </label>
                                                 <select class="form-select <?php $ok = " ";
                                                                            (form_error('batch_1') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                            echo $ok; ?>" aria-label="Default select example" id="batch_1" name="batch_1" required>
                                                     <option selected>-</option>
                                                     <option value="2017+">2017+</option>
                                                     <option value="2018">2018</option>
                                                     <option value="2019">2019</option>
                                                     <option value="2020">2020</option>
                                                     <option value="2021">2021</option>
                                                     <option value="2022">2022</option>
                                                 </select><br>
                                                 <div class="invalid-feedback" id="batch_1-false">
                                                     <?php echo form_error('batch_1'); ?>
                                                 </div>

                                                 <div class="mb-3">
                                                     <label for="name"><i class="float"></i> Student ID Card Scan<b>(pdf)</b></label>
                                                     <input class="form-control text-dark <?php $ok = " ";
                                                                                            (!empty($error['card_1'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                                            echo $ok; ?>" type="file" id="card_1" name="card_1" multiple required>
                                                     <div class="invalid-feedback" id="card_1-false">
                                                         <?php echo $error['card_1']; ?>
                                                     </div>
                                                 </div>
                                                 <br>

                                                 <div class="mb-3">
                                                     <label for="name"><i class="float"></i> Statement Letter of Active Student Scan<b>(pdf)</b></label>
                                                     <input class="form-control text-dark <?php $ok = " ";
                                                                                            (!empty($error['activestudent_1'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                                            echo $ok; ?>" type="file" id="activestudent_1" name="activestudent_1" multiple required>
                                                     <div class="invalid-feedback" id="activestudent_1-false">
                                                         <?php echo $error['activestudent_1']; ?>
                                                     </div>
                                                 </div>
                                                 <br>

                                                 <div class="mb-3">
                                                     <label for="name"><i class="float"></i> Half-body picture 4 x 6</label>
                                                     <label for="name"><i class="float"></i> <b>formal, plain background </b>(JPG, JPEG, PNG)</label>
                                                     <input class="form-control text-dark <?php $ok = " ";
                                                                                            (!empty($error['photo_1'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                                            echo $ok; ?>" type="file" id="photo_1" name="photo_1" multiple required>
                                                     <div class="invalid-feedback" id="photo_1-false">
                                                         <?php echo $error['photo_1']; ?>
                                                     </div>
                                                 </div>
                                                 <br>
                                                 <div class="form-group text-dark">
                                                     <label for="phone"><i class="text-dark float"></i> Phone Number </label>
                                                     <input type="phone" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('phone_1') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="phone_1" name="phone_1" placeholder="phone ll Ex: 08XX XXXX XXXX" required>
                                                     <div class="invalid-feedback" id="phone_1-false">
                                                         <?php echo form_error('phone_1'); ?>
                                                     </div>
                                                 </div><br>

                                                 <div class="form-group text-dark">
                                                     <label for="email"><i class="text-dark float"></i> Email Address</label>
                                                     <input type="email" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('email_1') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="email_1" name="email_1" placeholder="Email ll Ex: Devitweb@gmail.com" required>
                                                     <div class="invalid-feedback" id="email_1-false">
                                                         <?php echo form_error('email_1'); ?>
                                                     </div>
                                                 </div><br>


                                                 <div class="mb-3">
                                                     <label for="name"><i class="float"></i> Proof of following our official Instagram account @futurest2022 or our linkedin at </label>
                                                     <a href="https://www.linkedin.com/company/futureenergysummit/" class="link-primary">https://www.linkedin.com/company/futureenergysummit/</a>
                                                     <input class="form-control text-dark <?php $ok = " ";
                                                                                            (!empty($error['follow_1'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                                            echo $ok; ?>" type="file" id="follow_1" name="follow_1" multiple required>
                                                     <div class="invalid-feedback" id="follow_1-false">
                                                         <?php echo $error['follow_1']; ?>
                                                     </div>
                                                 </div><br>

                                                 <div class="d-inline p-2 bg-dark text-white">Member 2</div>

                                                 <div class="form-group text-dark ">
                                                     <br><label for="name" class="text-dark"><i class="text-dark"> </i> Full Name </label>
                                                     <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('name_2') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="name_2" name="name_2" placeholder="Your Name ll Ex: Devitweb development" required>
                                                     <div class="invalid-feedback" id="name_2-false">
                                                         <?php echo form_error('name_2'); ?>
                                                     </div>
                                                 </div><br>


                                                 <div class="form-group text-dark">
                                                     <label for="name"><i class="float"></i> Major </label>
                                                     <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('major_2') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="major_2" name="major_2" placeholder="Major ll Ex: Information Technology" required>
                                                     <div class="invalid-feedback" id="major_2-false">
                                                         <?php echo form_error('name_2'); ?>
                                                     </div>
                                                 </div><br>

                                                 <label for="pwd"><i class="float"></i> Batch </label>
                                                 <select class="form-select <?php $ok = " ";
                                                                            (form_error('batch_2') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                            echo $ok; ?>" aria-label="Default select example" id="batch_2" name="batch_2" required>
                                                     <option selected>-</option>
                                                     <option value="2017+">2017+</option>
                                                     <option value="2018">2018</option>
                                                     <option value="2019">2019</option>
                                                     <option value="2020">2020</option>
                                                     <option value="2021">2021</option>
                                                     <option value="2022">2022</option>
                                                 </select><br>
                                                 <div class="invalid-feedback" id="batch_2-false">
                                                     <?php echo form_error('batch_2'); ?>
                                                 </div>

                                                 <div class="mb-3">
                                                     <label for="name"><i class="float"></i> Student ID Card Scan<b>(pdf)</b></label>
                                                     <input class="form-control text-dark <?php $ok = " ";
                                                                                            (!empty($error['card_2'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                                            echo $ok; ?>" type="file" id="card_2" name="card_2" multiple required>
                                                     <div class="invalid-feedback" id="card_2-false">
                                                         <?php echo $error['card_2']; ?>
                                                     </div>
                                                 </div>
                                                 <br>

                                                 <div class="mb-3">
                                                     <label for="name"><i class="float"></i> Statement Letter of Active Student Scan<b>(pdf)</b></label>
                                                     <input class="form-control text-dark <?php $ok = " ";
                                                                                            (!empty($error['activestudent_2'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                                            echo $ok; ?>" type="file" id="activestudent_2" name="activestudent_2" multiple required>
                                                     <div class="invalid-feedback" id="activestudent_2-false">
                                                         <?php echo $error['activestudent_2']; ?>
                                                     </div>
                                                 </div>
                                                 <br>

                                                 <div class="mb-3">
                                                     <label for="name"><i class="float"></i> Half-body picture 4 x 6</label>
                                                     <label for="name"><i class="float"></i> <b>formal, plain background </b>(JPG, JPEG, PNG)</label>
                                                     <input class="form-control text-dark <?php $ok = " ";
                                                                                            (!empty($error['photo_2'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                                            echo $ok; ?>" type="file" id="photo_2" name="photo_2" multiple required>
                                                     <div class="invalid-feedback" id="photo_2-false">
                                                         <?php echo $error['photo_2']; ?>
                                                     </div>
                                                 </div>
                                                 <br>
                                                 <div class="form-group text-dark">
                                                     <label for="phone"><i class="text-dark float"></i> Phone Number </label>
                                                     <input type="phone" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('phone_2') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="phone_2" name="phone_2" placeholder="phone ll Ex: 08XX XXXX XXXX" required>
                                                     <div class="invalid-feedback" id="phone_2-false">
                                                         <?php echo form_error('phone_2'); ?>
                                                     </div>
                                                 </div><br>

                                                 <div class="form-group text-dark">
                                                     <label for="email"><i class="text-dark float"></i> Email Address</label>
                                                     <input type="email" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('email_2') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="email_2" name="email_2" placeholder="Email ll Ex: Devitweb@gmail.com" required>
                                                     <div class="invalid-feedback" id="email_2-false">
                                                         <?php echo form_error('email_2'); ?>
                                                     </div>
                                                 </div><br>


                                                 <div class="mb-3">
                                                     <label for="name"><i class="float"></i> Proof of following our official Instagram account @futurest2022 or our linkedin at </label>
                                                     <a href="https://www.linkedin.com/company/futureenergysummit/" class="link-primary">https://www.linkedin.com/company/futureenergysummit/</a>
                                                     <input class="form-control text-dark <?php $ok = " ";
                                                                                            (!empty($error['follow_2'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                                            echo $ok; ?>" type="file" id="follow_2" name="follow_2" multiple required>
                                                     <div class="invalid-feedback" id="follow_2-false">
                                                         <?php echo $error['follow_2']; ?>
                                                     </div>
                                                 </div><br>

                                                 <div class="d-inline p-2 bg-dark text-white">Member 3 (Optional)</div>
                                                 <br>
                                                 <br><label for="name" class="text-dark"><i class="text-dark"> </i> <b>Note : No need to fill
                                                         if there is no 3rd member </b></label>
                                                 <br><label for="name" class="text-dark"><i class="text-dark"> </i> Full Name </label>
                                                 <div class="form-group text-dark ">

                                                     <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('name_3') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="name_3" name="name_3" placeholder="Your Name ll Ex: Devitweb development">
                                                     <div class="invalid-feedback" id="name_3-false">
                                                         <?php echo form_error('name_3'); ?>
                                                     </div>
                                                 </div><br>


                                                 <div class="form-group text-dark">
                                                     <label for="name"><i class="float"></i> Major </label>
                                                     <input type="text" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('major_3') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="major_3" name="major_3" placeholder="Major ll Ex: Information Technology">
                                                     <div class="invalid-feedback" id="major_3-false">
                                                         <?php echo form_error('name_3'); ?>
                                                     </div>
                                                 </div><br>

                                                 <label for="pwd"><i class="float"></i> Batch </label>
                                                 <select class="form-select <?php $ok = " ";
                                                                            (form_error('batch_3') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                            echo $ok; ?>" aria-label="Default select example" id="batch_3" name="batch_3">
                                                     <option selected>-</option>
                                                     <option value="2017+">2017+</option>
                                                     <option value="2018">2018</option>
                                                     <option value="2019">2019</option>
                                                     <option value="2020">2020</option>
                                                     <option value="2021">2021</option>
                                                     <option value="2022">2022</option>
                                                 </select><br>
                                                 <div class="invalid-feedback" id="batch_3-false">
                                                     <?php echo form_error('batch_3'); ?>
                                                 </div>

                                                 <div class="mb-3">
                                                     <label for="name"><i class="float"></i> Student ID Card Scan<b>(pdf)</b></label>
                                                     <input class="form-control text-dark <?php $ok = " ";
                                                                                            (!empty($error['card_3'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                                            echo $ok; ?>" type="file" id="card_3" name="card_3" multiple>
                                                     <div class="invalid-feedback" id="card_3-false">
                                                         <?php echo $error['card_3']; ?>
                                                     </div>
                                                 </div>
                                                 <br>

                                                 <div class="mb-3">
                                                     <label for="name"><i class="float"></i> Statement Letter of Active Student Scan<b>(pdf)</b></label>
                                                     <input class="form-control text-dark <?php $ok = " ";
                                                                                            (!empty($error['activestudent_3'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                                            echo $ok; ?>" type="file" id="activestudent_3" name="activestudent_3" multiple>
                                                     <div class="invalid-feedback" id="activestudent_3-false">
                                                         <?php echo $error['activestudent_3']; ?>
                                                     </div>
                                                 </div>
                                                 <br>

                                                 <div class="mb-3">
                                                     <label for="name"><i class="float"></i> Half-body picture 4 x 6</label>
                                                     <label for="name"><i class="float"></i> <b>formal, plain background </b>(JPG, JPEG, PNG)</label>
                                                     <input class="form-control text-dark <?php $ok = " ";
                                                                                            (!empty($error['photo_3'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                                            echo $ok; ?>" type="file" id="photo_3" name="photo_3" multiple>
                                                     <div class="invalid-feedback" id="photo_3-false">
                                                         <?php echo $error['photo_3']; ?>
                                                     </div>
                                                 </div>
                                                 <br>
                                                 <div class="form-group text-dark">
                                                     <label for="phone"><i class="text-dark float"></i> Phone Number </label>
                                                     <input type="phone" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('phone_3') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="phone_3" name="phone_3" placeholder="phone ll Ex: 08XX XXXX XXXX">
                                                     <div class="invalid-feedback" id="phone_3-false">
                                                         <?php echo form_error('phone_3'); ?>
                                                     </div>
                                                 </div><br>

                                                 <div class="form-group text-dark">
                                                     <label for="email"><i class="text-dark float"></i> Email Address</label>
                                                     <input type="email" class="form-control text-dark <?php $ok = " ";
                                                                                                        (form_error('email_3') > 0) ? $ok = 'is-invalid' :  $ok = '';
                                                                                                        echo $ok; ?>" id="email_3" name="email_3" placeholder="Email ll Ex: Devitweb@gmail.com">
                                                     <div class="invalid-feedback" id="email_3-false">
                                                         <?php echo form_error('email_3'); ?>
                                                     </div>
                                                 </div><br>


                                                 <div class="mb-3">
                                                     <label for="name"><i class="float"></i> Proof of following our official Instagram account @futurest2022 or our linkedin at </label>
                                                     <a href="https://www.linkedin.com/company/futureenergysummit/" class="link-primary">https://www.linkedin.com/company/futureenergysummit/</a>
                                                     <input class="form-control text-dark <?php $ok = " ";
                                                                                            (!empty($error['follow_3'])) ? $ok = 'is-invalid' :  $ok = '';
                                                                                            echo $ok; ?>" type="file" id="follow_3" name="follow_3" multiple>
                                                     <div class="invalid-feedback" id="follow_3-false">
                                                         <?php echo $error['follow_3']; ?>
                                                     </div>
                                                 </div><br>


                                                 <br>

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
     <script type="text/javascript" src="<?php echo base_url() ?>public/js/backend/registerreinnovation.js"></script>
 </body>

 </html>