<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
  $this->load->view('template/meta');
  ?>
  <title>Contact</title>
  <?php
  $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/contact.css">
</head>

<body>
  <?php
  $this->load->view('components/navbar');
  ?>

  <main id="section">

    <!-- Jumbotron -->
    <section id="jumbotron" class="d-flex align-items-center position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center text-xl-start col-xl-8">
            <h1 class="mb-5">CONTACT</h1>
            <p class="mb-5">
              Confused about the explanation of the existing competition? Contact some of our people to ask questions by pressing the button below:
            </p>
            <a href="#re-contact" class="btn btn-primary">Read More</a>
          </div>
          <div class="d-none d-xl-flex col-xl-4 d-flex align-items-center justify-content-center">
            <i class="bi bi-person-lines-fill"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- Futurest Sosmed -->
    <section id="re-contact" class="pt-5 position-relative">
      <img src="<?php echo base_url() ?>public/img/ornamen/ornam2.png" alt="ornamen" id="ornamen_re" class="position-absolute" width="300" height="300">
      <div class="container pt-5">
        <h2 class="text-center mb-5">RE Innovation Contact</h2>

        <div class="row mt-5 px-3 d-flex justify-content-center">

          <!-- contact 1 -->
          <div class="card-re-contact m-3 col-md-4 p-0" style="background-color: #e3e3e3;">

            <div class="p-3">
              <h3>Chindy</h3>
              <p>
                Line: chindy_rosita
                <br>
                WA: +6285215371119
              </p>
              <a href="https://wa.me/6285215371119" class="btn-lg btn-primary" target="_blank">Contact by WA now</a>
            </div>
          </div>

          <!-- contact 2 -->
          <div class="card-re-contact m-3 col-md-4 p-0" style="background-color: #e3e3e3;">

            <div class="p-3">
              <h3>Khoirul</h3>
              <p>
                Line: m.khoirulm
                <br>
                WA: +6288228249694
              </p>
              <a href="https://wa.me/6288228249694" class="btn-lg btn-primary" target="_blank">Contact by WA now</a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Admin Social Media -->
    <section id="admin-sosmed" class="pt-5 position-relative">

      <div class="container pt-5">
        <h2 class="text-center mb-5">National Essay Contact</h2>
        <div class="row mt-5 px-3 d-flex justify-content-center">

          <!-- card 1 -->
          <div class="card-admin-futurest m-3 col-md-4 p-0" style="background-color: #e3e3e3;">

            <div class="p-3">
              <h3>Wury</h3>
              <p>Line : wuryhanda36</p>
              <a href="https://wa.me/6282245336684" class="btn-lg btn-primary" target="_blank">Contact by WA now</a>
            </div>
          </div>

          <!-- card 2 -->
          <div class="card-admin-futurest m-3 col-md-4 p-0" style="background-color: #e3e3e3;">

            <div class="p-3">
              <h3>Daffa</h3>
              <p>WA : 082245606252</p>
              <a href="https://wa.me/6282245606252" class="btn-lg btn-primary" target="_blank">Contact by WA now</a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Contact Us -->
    <section id="contact-us" class="d-flex align-items-center position-relative">
      <div class="container h-75">
        <h2 class="text-center mb-5">Suggestions for us</h2>
        <form action="" id="form">
          <div class="mb-5">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email here...">
            <div class="invalid-feedback" id="email-false">
            </div>
          </div>
          <div class="mb-5">
            <label for="exampleFormControlTextarea1" class="form-label">Message Text</label>
            <textarea class="form-control" rows="5" id="message" name="message" placeholder="Enter a message here..."></textarea>
            <div class="invalid-feedback" id="message-false">
            </div>
          </div>
          <button type="submit" class="btn-lg btn-primary d-block m-auto" id="submit">
            <i class="hide loading-icon fa fa-spinner fa-spin d-none" id="loading"></i>Submit
          </button>
        </form>
      </div>
    </section>

  </main>

  <footer>
    <?php
    $this->load->view('components/footer');
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
  <script type="text/javascript" src="<?php echo base_url() ?>public/js/backend/contact.js"></script>
</body>

</html>