<nav class="navbar fixed-top">
	<div class="container d-flex align-items-center me-auto">
		<!-- Navbar Brand -->
		<div class="navbar-brand">
			<a href="" class="d-flex">
				<img
					src="<?php echo base_url() ?>/public/img/logo-utama.png"
					width="50"
					alt="FUTUREST"
				/>
				<h2 class="mt-2">FUTUREST</h2>
			</a>
		</div>

		<!-- Navbar Button Mobile -->
		<input
			class="input-btn-mobile d-block d-md-none float-end"
			type="checkbox"
			onchange="handlerNav(this)"
		/>
		<i class="bi bi-list icon-btn-mobile d-block d-md-none float-end"></i>

		<!-- Navbar Links -->
		<div class="navbar-links d-flex flex-column flex-md-row align-items-center">
      <!-- Home -->
			<a class="me-lg-4 me-md-3" href="<?php echo base_url('home')?>"
				>Home</a
			>
      <!-- Event -->
			<a class="me-md-2 active" href="<?php echo base_url('events')?>"
				>Events</a
			>
      <!-- 2 Details -->
			<div class="dropdown dropdown-navbar-futurest me-lg-2">
        <!-- Button -->
				<button
					class="btn dropdown-toggle shadow-none"
					type="button"
					id="dropdownMenuButton1"
					data-bs-toggle="dropdown"
					aria-expanded="false"
				>
					Details
				</button>
        <!-- List -->
				<ul class="dropdown-menu list-dropdown-navbar-futurest" aria-labelledby="dropdownMenuButton1">
					<li><a class="dropdown-item now" href="<?php echo base_url('details')?>">National Essay</a></li>
					<li><a class="dropdown-item" href="<?php echo base_url('details')?>">RE Innovation Brainstorm</a></li>
				</ul>
			</div>
      <!-- Contact -->
			<a class="me-lg-4 me-md-3" href="<?php echo base_url('contact')?>"
				>Contact</a
			>
      <!-- Login -->
			<a class="btn btn-sm" href="<?php echo base_url('login')?>">Login</a>
		</div>
	</div>
</nav>
