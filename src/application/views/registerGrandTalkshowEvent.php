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

    <br><br><br><br><br>
    <main id="section">
        <div class="container">

            <div class="container register center">

                <!-- Main Data -->
                <div class="row">
                    <div class=".col-6 .col-md-10 register-right">
                        <br>
                        <!-- image -->
                        <img src="<?php echo base_url() ?>/public/img/logo-utama.png" width="200" height="200" alt="FUTUREST" class="d-block mx-auto img-fluid" /><br>
                        <h2 class="logo-regist">Futurest 2022</h2><br><br>
                        <h1 class="register text-center">Register Grand Talkshow</h1>
                        <div class="register-form mt-3 mb-3">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-13  container">
                                        <div class="col-md-7  container">
                                            <!-- Form -->
                                            <form action="#" class="" method="post" id="form">
                                                <div class="form-group text-dark ">
                                                    <label for="name" class="text-dark"><i class="text-dark"> </i> Name </label>
                                                    <input type="text" class="form-control text-dark <?php $ok = " "; (form_error('name') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" name="name" id="name" placeholder="Your Name ll Ex: Devitweb development" required>
                                                    <div class="invalid-feedback" id="name-false">
                                                        <?php echo form_error('name');?>
                                                    </div>
                                                </div><br>
                                                <div class="form-group text-dark">
                                                    <label for="email"><i class="text-dark float"></i> Email </label>
                                                    <input type="email" class="form-control text-dark <?php $ok = " "; (form_error('email') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" name="email" id="email" placeholder="Email ll Ex: Devitweb@gmail.com" required>
                                                    <div class="invalid-feedback" id="email-false">
                                                        <?php echo form_error('email');?>
                                                    </div>
                                                </div><br>
                                                <div class=" form-group text-dark">
                                                    <label for="name"><i class="float"></i> Domicile </label>
                                                    <input type="text" class="form-control text-dark <?php $ok = " "; (form_error('domicile') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" name="domicile" id="domicile" placeholder="Domicile ll Ex: Surabaya, Jawa Timur" required>
                                                    <div class="invalid-feedback" id="domicile-false">
                                                        <?php echo form_error('domicile');?>
                                                    </div>
                                                </div><br>
                                                <div class="form-group text-dark">
                                                    <label for="name"><i class="float"></i> University </label>
                                                    <input type="text" class="form-control text-dark <?php $ok = " "; (form_error('university') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" id="university" name="university" placeholder="University ll Ex: Institut Teknologi Sepuluh Nopember" required>
                                                    <div class="invalid-feedback" id="university-false">
                                                        <?php echo form_error('university');?>
                                                    </div>
                                                </div><br>
                                                <div class="form-group text-dark">
                                                    <label for="name"><i class="float"></i> Major </label>
                                                    <input type="text" class="form-control text-dark <?php $ok = " "; (form_error('major') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" id="major" name="major" placeholder="Major ll Ex: Information Technology" required> 
                                                    <div class="invalid-feedback" id="major-false">
                                                        <?php echo form_error('major');?>
                                                    </div>
                                                </div><br>

                                                <label for="pwd"><i class="float"></i> Batch </label>
                                                <select class="form-select <?php $ok = " "; (form_error('batch') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" aria-label="Default select example" id="batch" name="batch" required>
                                                    <option selected disabled>-</option>
                                                    <option value="2017+">2017+</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                </select>
                                                <div class="invalid-feedback" id="batch-false">
                                                    <?php echo form_error('batch');
                                                    ?>
                                                </div><br>

                                                <div>
                                                    <label for="name"><i class="float"></i> Questions for speakers </label>
                                                    <textarea class="form-control text-dark  <?php $ok = " "; (form_error('question') > 0) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" id="question" name="question" placeholder="Any Questions?" rows="3" required></textarea>
                                                    <div class="invalid-feedback" id="question-false">
                                                        <?php echo form_error('question');?>
                                                    </div>
                                                </div><br>

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Proof of following Futurest ITS instagram </label>
                                                    <input class="form-control text-dark  <?php $ok = " "; (!empty($error['followfuturestig'])) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" type="file" id="followfuturestig" multiple name="followfuturestig" required>
                                                    <div class="invalid-feedback" id="followfuturestig-false">
                                                        <?php echo $error['followfuturestig'];?>
                                                    </div>
                                                </div><br>

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Proof of following SRE ITS instagram </label>
                                                    <input class="form-control text-dark <?php $ok = " "; (!empty($error['followsreig'])) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" type="file" id="followsreig" multiple name="followsreig" required>
                                                    <div class="invalid-feedback" id="followsreig-false">
                                                        <?php echo $error['followsreig'];?>
                                                    </div>
                                                </div><br>
                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Proof of uploading our twibbon in your Instagram main account (You can get the twibbon at <a href="https://twb.nz/grandtalkshowfuturest2022">Here!</a>)
                                                    </label>
                                                    <input class="form-control text-dark <?php $ok = " "; (!empty($error['sharestory'])) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" type="file" id="twibbon" multiple name="twibbon" required>
                                                    <div class="invalid-feedback" id="twibbon-false">
                                                        <?php echo $error['twibbon'];?>
                                                    </div>
                                                </div><br>
                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Proof of share story and tag 3 friends (You can get the poster at <a href="https://drive.google.com/file/d/1Xu9m-OkesjuN-E3G2M4wGmNYxryUGvCX/view">Here!</a>)
                                                    </label>
                                                    <input class="form-control text-dark <?php $ok = " "; (!empty($error['sharestory'])) ? $ok='is-invalid' :  $ok='' ;echo $ok;?>" type="file" id="sharestory" multiple name="sharestory" required>
                                                    <div class="invalid-feedback" id="sharestory-false">
                                                        <?php echo $error['sharestory'];?>
                                                    </div>
                                                </div>

                                            
                                                <button type="submit" class="btn btn-danger" id="submit">
                                                    <i class="hide loading-icon fa fa-spinner fa-spin d-none" id="loading"></i>Submit</button>
                                                <!-- Example single danger button -->
                                            </form>
                                            <!-- End Form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
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
    <script>var url = 'Auth_regis/regisGrandTalkshow'</script>
    <script>var base_url = '<?php echo base_url()?>';</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/backend/register.js"></script>
</body>

</html>