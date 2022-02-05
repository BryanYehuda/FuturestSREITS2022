<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
<?php
    $this->load->view('template/meta');
    ?>
    <title>Upload Power Point</title>
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
                        <div class="register-form mt-3 mb-3">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-13  container">
                                        <div class="col-md-7  container">
                                            <!-- Form -->
                                            <form action="#" class="" method="post" id="form">
                                                
                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Power Point</label>
                                                    <input class="form-control text-dark" type="file" id="ppt" multiple name="ppt" required>
                                                    <div class="invalid-feedback" id="ppt-false">
                                                        
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
    <script>var s_url = './submitppt'</script>
    <script>var base_url = '<?php echo base_url()?>';</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/backend/submits.js"></script>
</body>

</html>