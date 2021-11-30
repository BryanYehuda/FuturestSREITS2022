<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <?php
        $this->load->view('template/meta');
    ?>
    <title>Dashboard Admin - Home</title>
    <?php
        $this->load->view('template/css_admin');
    ?>
    <!-- Import css if need -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/dashboard_admin_home.css">
</head>

<body>
    <?php
        $this->load->view('components/navbar_admin');
    ?>
    <br><br><br>

    <main id="section">
        <!-- Main Row -->
        <div class="row">

            <!-- Button Mobile Nav -->
            <input type="checkbox" class="btn-nav-mobile d-md-none">
            <i class="btn-nav-mobile d-md-none bi bi-chevron-double-right"></i>
            <div class="btn-nav-mobile d-md-none"></div>
            
            <!-- Side Bar -->
            <div class="side-bar col-md-3 p-5 d-flex flex-column">
                <a href="<?php echo base_url('admin')?>" class="mb-3 text-decoration-none active">
                    <i class="bi bi-house-door"></i>
                    Home
                </a>

                <a href="<?php echo base_url('admin/list')?>" class="mb-3 text-decoration-none">
                    <i class="bi bi-people"></i>
                    Team List
                </a>

                <a href="<?php echo base_url('admin/confirmation')?>" class="mb-3 text-decoration-none">
                    <i class="bi bi-cash-coin"></i>
                    Team Confirmation
                </a>

                <hr />

                <a href="<?php echo base_url('logout')?>" class="btn btn-danger">
                    <i class="bi bi-box-arrow-left"></i>
                    Logout
                </a>
            </div>

            <!-- Main Content -->
            <div class="main-content col-12 col-md-9 p-4 pe-2 pe-md-4">
                <h1 class="text-success mb-5">Admin Dashboard</h1>

                <h3 class="mb-3">Announcement</h3>

                <div class="d-flex flex-column flex-sm-row">
                    <div class="card-content m-3 p-3">
                        <h4>First Announcement</h4>
                        <hr>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis eligendi deserunt ad obcaecati. Quam distinctio enim quas placeat nisi iure saepe, at, id quaerat officiis exercitationem consectetur soluta cumque incidunt!
                        </p>
                    </div>
                    <div class="card-content m-3 p-3">
                        <h4>Second Announcement</h4>
                        <hr>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis eligendi deserunt ad obcaecati. Quam distinctio enim quas placeat nisi iure saepe, at, id quaerat officiis exercitationem consectetur soluta cumque incidunt!
                        </p>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row">
                    <div class="card-content m-3 p-3">
                        <h4>Third Announcement</h4>
                        <hr>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis eligendi deserunt ad obcaecati. Quam distinctio enim quas placeat nisi iure saepe, at, id quaerat officiis exercitationem consectetur soluta cumque incidunt!
                        </p>
                    </div>
                    <div class="card-content m-3 p-3">
                        <h4>Fourth Announcement</h4>
                        <hr>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis eligendi deserunt ad obcaecati. Quam distinctio enim quas placeat nisi iure saepe, at, id quaerat officiis exercitationem consectetur soluta cumque incidunt!
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php
        $this->load->view('template/script_admin');
    ?>

    <!-- Import js if need -->
    <script src="<?php echo base_url() ?>public/js/pages/side_bar_admin.js"></script>
</body>

</html>
