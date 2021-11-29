<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <?php
        $this->load->view('template/meta');
    ?>
    <title>Dashboard Admin - Team List</title>
    <?php
        $this->load->view('template/css_admin');
    ?>
    <!-- Import css if need -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/dashboard_admin_team_list.css">
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
                <a href="<?php echo base_url('admin')?>" class="mb-3 text-decoration-none">
                    <i class="bi bi-house-door"></i>
                    Home
                </a>

                <a href="<?php echo base_url('admin/list')?>" class="mb-3 text-decoration-none active">
                    <i class="bi bi-people"></i>
                    Team List
                </a>

                <a href="<?php echo base_url('admin/confirmation')?>" class="mb-3 text-decoration-none">
                    <i class="bi bi-cash-coin"></i>
                    Team Confirmation
                </a>

                <hr />

                <a href="" class="btn btn-danger">
                    <i class="bi bi-box-arrow-left"></i>
                    Logout
                </a>
            </div>

            <!-- Main Content -->
            <div class="main-content col-12 col-md-9 p-4 pe-2 pe-md-4">

                <h1 class="text-success mb-5">Admin Dashboard</h1>

                <h3 class="mb-3">Team Registered:</h3>

                <!-- Card Content -->
                <div class="card-content m-3 p-3">
                    <div class="d-flex justify-content-between p-2" style="background-color: #F0F0F0;">
                        <h4>Daeng Jago</h4>
                        <h4 class="universitas">ITS</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-sm-5">
                            <h4>Daftar Anggota</h4>
                            <ul>
                                <li>Hafizh Abid Wibowo</li>
                                <li>Hafizh Abid Wibowo</li>
                                <li>Hafizh Abid Wibowo</li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-5">
                            <h4>Lomba</h4>
                            <p>Valorant</p>
                        </div>
                    </div>
                </div>

                <div class="card-content m-3 p-3">
                    <div class="d-flex justify-content-between p-2" style="background-color: #F0F0F0;">
                        <h4>Daeng Jago</h4>
                        <h4 class="universitas">ITS</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-sm-5">
                            <h4>Daftar Anggota</h4>
                            <ul>
                                <li>Hafizh Abid Wibowo</li>
                                <li>Hafizh Abid Wibowo</li>
                                <li>Hafizh Abid Wibowo</li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-5">
                            <h4>Lomba</h4>
                            <p>Valorant</p>
                        </div>
                    </div>
                </div>

                <div class="card-content m-3 p-3">
                    <div class="d-flex justify-content-between p-2" style="background-color: #F0F0F0;">
                        <h4>Daeng Jago</h4>
                        <h4 class="universitas">ITS</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-sm-5">
                            <h4>Daftar Anggota</h4>
                            <ul>
                                <li>Hafizh Abid Wibowo</li>
                                <li>Hafizh Abid Wibowo</li>
                                <li>Hafizh Abid Wibowo</li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-5">
                            <h4>Lomba</h4>
                            <p>Valorant</p>
                        </div>
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
