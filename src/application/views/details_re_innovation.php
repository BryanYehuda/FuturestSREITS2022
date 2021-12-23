<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php
    $this->load->view('template/meta');
  ?>
  <title>Details RE Innovation</title>
  <?php
    $this->load->view('template/css');
  ?>
  <!-- Import css if need -->
  <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/re_innovation.css">
</head>

<body>
  <?php
    $this->load->view('components/navbar');
  ?>

  <main id="section">
    <section id="jumbotron">
      <h1>Hello world</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eius dolore reiciendis sint, cupiditate libero harum ex rem, nulla officia possimus voluptate aliquam omnis inventore nostrum velit aut quaerat doloribus? Similique quos maxime assumenda cupiditate. Reprehenderit, non. Eius ipsum ullam quibusdam atque, maxime ipsa blanditiis cum commodi quidem illum molestiae facere odio, impedit ducimus suscipit deserunt dicta. Sequi, pariatur incidunt eligendi, id aperiam eos, dolorum omnis quasi suscipit dolore recusandae. Illum nisi blanditiis sint? Iusto consequatur laboriosam quidem esse necessitatibus quod perferendis reprehenderit, labore, officia quisquam animi velit minima optio voluptatibus impedit fuga cumque pariatur. Alias eos non magnam quos.</p>
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
</body>

</html>
