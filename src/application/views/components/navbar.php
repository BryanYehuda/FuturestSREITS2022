<!-- Navbar Component -->

<!-- Navbar Links mobile -->
<div class="navbar-links navbar-links-mobile d-flex flex-column align-items-center d-md-none position-absolute">
  <button class="back-btn-navbar-mobile h-25 mt-3 mb-3 ">
    <i class="bi bi-x text-white"></i>
  </button>
  <div class="h-50 d-flex flex-column align-items-center justify-content-between">
    <a class="my-3 active" href="">Home</a>
    <a class="my-3" href="">Details</a>
    <a class="my-3" href="">Events</a>
    <a class="my-3" href="">Contact</a>
  </div>
</div>

<nav class="navbar">
  <div class="container">
    <!-- Navbar Button Mobile -->
    <button class="btn-nav-mobile d-md-none">
      <i class="bi bi-list"></i>
    </button>

    <!-- Navbar Brand Desktop-->
    <div class="navbar-brand d-none d-md-block">
      <a href="" class="d-flex">
        <img src="<?php echo base_url() ?>/public/img/logo-utama.png" width="50" alt="FUTUREST">
        <h2 class="mt-2">FUTUREST</h2>
      </a>
    </div>

    <!-- Navbar Links Desktop -->
    <div class="navbar-links d-none d-md-flex">
      <!-- Pages Links Desktop -->
      <div class="me-3">
        <a class="mx-lg-3 mx-2 active" href="">Home</a>
        <a class="mx-lg-3 mx-2" href="">Details</a>
        <a class="mx-lg-3 mx-2" href="">Events</a>
        <a class="mx-lg-3 mx-2" href="">Contact</a>
      </div>
      <!-- Login Button Desktop -->
      <button class="btn btn-sm">Login</button>
    </div>

    <!-- Navbar Brand Mobile -->
    <div class="navbar-brand navbar-brand-mobile d-md-none mt-2">
      <a href="">
        <h2>FUTUREST</h2>
      </a>
    </div>
  </div>
</nav>
