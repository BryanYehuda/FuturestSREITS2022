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
                        <h1 class="register text-center">3C (Climate Change Community)</h1>

                        <div class="register-form mt-3 mb-3">
                            <div class="">

                                <div class="row">
                                    <div class="col-md-13  container">
                                        <div class="col-md-7  container">
                                            <!-- Form -->
                                            <form action="#" class="">
                                                <p class="shadow-none p-3 mb-5 bg-light rounded fs-6">!!!ONLY FOR ITS STUDENTS BATCH 2019-2021!!! and will be selected for 20 students
                                                </p>
                                                <div class="form-group text-dark ">
                                                    <label for="name" class="text-dark"><i class="text-dark"> </i> Name </label>
                                                    <input type="text" class="form-control text-dark" name="name" placeholder="Your Name ll Ex: Devitweb development">
                                                </div><br>
                                                <div class="form-group text-dark">
                                                    <label for="email"><i class="text-dark float"></i> Email </label>
                                                    <input type="email" class="form-control text-dark" name="email" placeholder="Email ll Ex: Devitweb@gmail.com">
                                                </div><br>
                                                <div class=" form-group text-dark">
                                                    <label for="name"><i class="float"></i> Current Domicile </label>
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

                                                <label for="basic-url" class="form-label">Linkedin URL</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control text-dark" id="basic-url" aria-describedby="basic-addon3" placeholder="Linkedin URL ll Ex: https://www.linkedin.com/company/futureenergysummit/">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Curriculum Vitae </label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div><br>

                                                <p class="shadow-none p-3 mb-5 bg-light rounded fs-5">Please elaborate your knowledge about renewable energy and its condition in Indonesia! </p>

                                                <div class="form-group text-dark ">
                                                    <label for="name" class="text-dark"><i class="text-dark"> </i> What is your motivation to join this social project?<br> Min 100 words</label>

                                                    <input type="text" class="form-control text-dark" name="name" placeholder="Your Motivation...">
                                                </div><br>

                                                <div class="form-group text-dark ">
                                                    <label for="name" class="text-dark"><i class="text-dark"> </i> What is your contribution to this project? </label>
                                                    <input type="text" class="form-control text-dark" name="name" placeholder="Your Contribution...">
                                                </div><br>

                                                <label for="name"><i class="float"></i> Scale of Prioritization towards the Program </label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                                                    <label class="form-check-label" for="inlineRadio4">4</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                                                    <label class="form-check-label" for="inlineRadio5">5</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                                                    <label class="form-check-label" for="inlineRadio6">6</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option7">
                                                    <label class="form-check-label" for="inlineRadio7">7</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio8" value="option8">
                                                    <label class="form-check-label" for="inlineRadio8">8</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio9" value="option9">
                                                    <label class="form-check-label" for="inlineRadio9">9</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio10" value="option10">
                                                    <label class="form-check-label" for="inlineRadio10">10</label>
                                                </div><br><br>

                                                <label for="name"><i class="float"></i> Are you willing to go to Surabaya and stay from March to June 2022? </label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        No
                                                    </label>
                                                </div>

                                                <br>
                                                <label for="name"><i class="float"></i> Are you committed to following the event from start to finish? (note: if you leave the event, there will be a penalty in the form of money) </label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked">
                                                        No
                                                    </label>
                                                </div>
                                                <br>
                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Proof of following Futurest and SRE ITS instagram </label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div><br>

                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Proof of share story and tag 3 friends </label>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div>
                                                <br>
                                                <div class="mb-3">
                                                    <label for="name"><i class="float"></i> Proof of post a twibbon </label><br>
                                                    <label for="name"><i class="float"></i> Link : </label>
                                                    <a href="https://drive.google.com/drive/folders/1trXDl2rt7olqcQ77HuUH9PGRzDIsbqdg?usp=sharing" class="link-primary">Twibbon</a>
                                                    <input class="form-control text-dark" type="file" id="formFileMultiple" multiple>
                                                </div>

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