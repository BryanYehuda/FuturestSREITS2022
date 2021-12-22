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
                        <h1 class="register text-center">RE Innovation Brainstorm Competition <b>Team</b></h1>
                        <div class="register-form mt-3 mb-3">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-13  container">
                                        <div class="col-md-7  container">
                                            <!-- Form -->
                                            <form action="#" class="">

                                                <div class="form-group text-dark ">
                                                    <label for="name" class="text-dark"><i class="text-dark"> </i> Team Name </label>
                                                    <input type="text" class="form-control text-dark" name="name" placeholder="Team Name ll Ex: FuturesTeam">
                                                </div><br>
                                                <div class="form-group text-dark ">
                                                    <label for="name" class="text-dark"><i class="text-dark"> </i> College Name </label>
                                                    <input type="text" class="form-control text-dark" name="name" placeholder="College Name ll Ex: Institut Teknologi Sepuluh Nopember">
                                                </div><br>
                                                <div class="d-inline p-2 bg-dark text-white">Member 1 (Team Leader)</div>

                                                <div class="form-group text-dark ">
                                                    <br><label for="name" class="text-dark"><i class="text-dark"> </i> Full Name </label>
                                                    <input type="text" class="form-control text-dark" name="name" placeholder="Your Name ll Ex: Devitweb development">
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

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Student ID Card Scan<b>(pdf)</b></label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div>
                                                <br>

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Statement Letter of Active Student Scan<b>(pdf)</b></label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div>
                                                <br>

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Half-body picture 4 x 6</label>
                                                    <label for="name"><i class="float"></i> <b>formal, plain background </b>(JPG, JPEG, PNG)</label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div>
                                                <br>
                                                <div class="form-group text-dark">
                                                    <label for="phone"><i class="text-dark float"></i> Phone Number </label>
                                                    <input type="phone" class="form-control text-dark" name="phone" placeholder="phone ll Ex: 08XX XXXX XXXX">
                                                </div><br>

                                                <div class="form-group text-dark">
                                                    <label for="email"><i class="text-dark float"></i> Email Address</label>
                                                    <input type="email" class="form-control text-dark" name="email" placeholder="Email ll Ex: Devitweb@gmail.com">
                                                </div><br>


                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Proof of following our official Instagram account @futurest2022 or our linkedin at </label>
                                                    <a href="https://www.linkedin.com/company/futureenergysummit/" class="link-primary">https://www.linkedin.com/company/futureenergysummit/</a>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div><br>

                                                <div class="d-inline p-2 bg-dark text-white">Member 2</div>

                                                <div class="form-group text-dark ">
                                                    <br><label for="name" class="text-dark"><i class="text-dark"> </i> Full Name </label>
                                                    <input type="text" class="form-control text-dark" name="name" placeholder="Your Name ll Ex: Devitweb development">
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

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Student ID Card Scan<b>(pdf)</b></label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div>
                                                <br>

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Statement Letter of Active Student Scan<b>(pdf)</b></label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div>
                                                <br>

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Half-body picture 4 x 6</label>
                                                    <label for="name"><i class="float"></i> <b>formal, plain background </b>(JPG, JPEG, PNG)</label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div>
                                                <br>
                                                <div class="form-group text-dark">
                                                    <label for="phone"><i class="text-dark float"></i> Phone Number </label>
                                                    <input type="phone" class="form-control text-dark" name="phone" placeholder="phone ll Ex: 08XX XXXX XXXX">
                                                </div><br>

                                                <div class="form-group text-dark">
                                                    <label for="email"><i class="text-dark float"></i> Email Address</label>
                                                    <input type="email" class="form-control text-dark" name="email" placeholder="Email ll Ex: Devitweb@gmail.com">
                                                </div><br>


                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Proof of following our official Instagram account @futurest2022 or our linkedin at </label>
                                                    <a href="https://www.linkedin.com/company/futureenergysummit/" class="link-primary">https://www.linkedin.com/company/futureenergysummit/</a>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div><br>

                                                <div class="d-inline p-2 bg-dark text-white">Member 3</div>

                                                <div class="form-group text-dark ">
                                                    <br><label for="name" class="text-dark"><i class="text-dark"> </i> Full Name </label>
                                                    <input type="text" class="form-control text-dark" name="name" placeholder="Your Name ll Ex: Devitweb development">
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

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Student ID Card Scan<b>(pdf)</b></label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div>
                                                <br>

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Statement Letter of Active Student Scan<b>(pdf)</b></label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div>
                                                <br>

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Half-body picture 4 x 6</label>
                                                    <label for="name"><i class="float"></i> <b>formal, plain background </b>(JPG, JPEG, PNG)</label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div>
                                                <br>
                                                <div class="form-group text-dark">
                                                    <label for="phone"><i class="text-dark float"></i> Phone Number </label>
                                                    <input type="phone" class="form-control text-dark" name="phone" placeholder="phone ll Ex: 08XX XXXX XXXX">
                                                </div><br>

                                                <div class="form-group text-dark">
                                                    <label for="email"><i class="text-dark float"></i> Email Address</label>
                                                    <input type="email" class="form-control text-dark" name="email" placeholder="Email ll Ex: Devitweb@gmail.com">
                                                </div><br>


                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Proof of following our official Instagram account @futurest2022 or our linkedin at </label>
                                                    <a href="https://www.linkedin.com/company/futureenergysummit/" class="link-primary">https://www.linkedin.com/company/futureenergysummit/</a>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div><br>


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