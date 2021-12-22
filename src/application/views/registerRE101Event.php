<!-- <!DOCTYPE html>

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

                <!-- Main Data -->
                <div class="row">
                    <div class=".col-6 .col-md-10 register-right ">
                        <br>
                        <h1 class="register text-center">RE101</h1>
                        <div class="register-form mt-3 mb-3">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-13  container">
                                        <div class="col-md-7  container">
                                            <!-- Form -->
                                            <form action="#" class="">
                                                <div class="form-group text-dark ">
                                                    <label for="name" class="text-dark"><i class="text-dark"> </i> Name </label>
                                                    <input type="text" class="form-control text-dark" name="name" placeholder="Your Name ll Ex: Devitweb development">
                                                </div><br>
                                                <div class="form-group text-dark">
                                                    <label for="email"><i class="text-dark float"></i> Email </label>
                                                    <input type="email" class="form-control text-dark" name="email" placeholder="Email ll Ex: Devitweb@gmail.com">
                                                </div><br>
                                                <div class=" form-group text-dark">
                                                    <label for="name"><i class="float"></i> Domicile </label>
                                                    <input type="text" class="form-control text-dark" id="dmc" name="domicile" placeholder="Domicile ll Ex: Surabaya, Jawa Timur">
                                                </div><br>
                                                <div class="form-group text-dark">
                                                    <label for="name"><i class="float"></i> University </label>
                                                    <input type="text" class="form-control text-dark" id="unv" name="university" placeholder="University ll Ex: Institut Teknologi Sepuluh Nopember">
                                                </div><br>
                                                <div class="form-group text-dark">
                                                    <label for="name"><i class="float"></i> Major </label>
                                                    <input type="text" class="form-control text-dark" id="mjr" name="major" placeholder="Major ll Ex: Information Technology">
                                                </div><br>

                                                <label for="pwd"><i class="float"></i> Batch </label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>-</option>
                                                    <option value="1">2019</option>
                                                    <option value="2">2020</option>
                                                    <option value="3">2021</option>
                                                </select><br>

                                                <div>
                                                    <label for="name"><i class="float"></i> Questions for speakers </label>
                                                    <textarea class="form-control text-dark" id="questions" placeholder="Any Questions?" rows="3"></textarea>
                                                </div><br>

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Proof of following Futurest and SRE ITS instagram </label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div><br>

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Proof of share story and tag 3 friends
                                                    </label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div>


                                                <button type="button" class="btn btn-danger">Submit</button>
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
</body>

</html> -->