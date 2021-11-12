<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
    $this->load->view('template/meta');
  ?>
  <title>Home</title>
  <?php
    $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
</head>

<body>
  <header>
    <?php
      $this->load->view('components/navbar');
    ?>
  </header>

  <main id="section">
    <div class="container">
      <h1 class="text-center py-5">Hello World!</h1>
    </div>
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
</body>

</html>
