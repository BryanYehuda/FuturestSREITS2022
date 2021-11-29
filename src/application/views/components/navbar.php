<nav class="navbar fixed-top">
  <div class="container d-flex align-items-center me-auto">
      <!-- Navbar Brand -->
      <div class="navbar-brand">
         <a href="" class="d-flex">
         <img src="<?php echo base_url() ?>/public/img/logo-utama.png" width="50" alt="FUTUREST">
         <h2 class="mt-2">FUTUREST</h2>
         </a>
      </div>

      <!-- Navbar Button Mobile -->
      <input class="input-btn-mobile d-block d-md-none float-end" type="checkbox" onchange="handlerNav(this)">
      <i class="bi bi-list icon-btn-mobile d-block d-md-none float-end"></i>

      <!-- Navbar Links -->
      <div class="navbar-links d-flex flex-column flex-md-row align-items-center">
         <a class="me-lg-4 me-md-3 active" href="<?php echo base_url('home')?>">Home</a>
         <a class="me-lg-4 me-md-3" href="<?php echo base_url('details')?>">Details</a>
         <a class="me-lg-4 me-md-3" href="<?php echo base_url('events')?>">Events</a>
         <a class="me-lg-5 me-md-4" href="<?php echo base_url('contact')?>">Contact</a>
         <a class="btn btn-sm" href="<?php echo base_url('auth')?>">Login</a>
      </div>
  </div>
</nav>