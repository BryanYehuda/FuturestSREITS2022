<nav class="navbar fixed-top">
  <div class="container d-flex align-items-center me-auto">
    <!-- Navbar Brand -->
    <div class="navbar-brand">
      <a href="<?php echo base_url('home') ?>" class="d-flex">
        <img src="<?php echo base_url() ?>/public/img/logo-utama.png" width="35" height="35" alt="FUTUREST" />
        <h2 class="pt-1">FUTUREST</h2>
      </a>
    </div>

    <!-- Navbar Button Mobile -->
    <input class="input-btn-mobile d-block d-md-none float-end" type="checkbox" onchange="handlerNav(this)" />
    <i class="fas fa-bars icon-btn-mobile d-block d-md-none float-end"></i>

    <!-- Navbar Links -->
    <div class="navbar-links d-flex flex-column flex-md-row align-items-center justify-content-start">
      <!-- Home -->
      <a class="me-lg-4 me-md-3" href="<?php echo base_url('home') ?>">
        Home
      </a>
      <!-- Event -->
      <a class="me-md-2" href="<?php echo base_url('events') ?>">
        Events
      </a>
      <!-- Dropdown 2 menu -->
      <div class="dropdown dropdown-navbar-futurest me-lg-2">
        <!-- Button -->
        <button class="btn dropdown-toggle shadow-none" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Futurest
        </button>
        <!-- List -->
        <ul class="dropdown-menu list-dropdown-navbar-futurest" aria-labelledby="dropdownMenuButton1">
          <li class="ps-3">
            <b>Competitions</b>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('essay') ?>">
              National Essay
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('re-innovation') ?>">
              RE Innovation
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="ps-3">
            <b>Events</b>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('grand-talkshow') ?>">
              Grand Talkshow
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('re-101') ?>">
              RE 101
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('final-talkshow') ?>">
              Final Talkshow
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('climate-change-community') ?>">
              Climate Change Community
            </a>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo base_url('awarding-night') ?>">
              Awarding Night
            </a>
          </li>
        </ul>
      </div>
      <!-- Contact -->
      <a class="me-lg-4 me-md-3" href="<?php echo base_url('contact') ?>">
        Contact
      </a>
      <!-- Login -->
      <a class="btn btn-sm" href="<?php echo base_url('login') ?>">Login</a>
    </div>
  </div>
</nav>