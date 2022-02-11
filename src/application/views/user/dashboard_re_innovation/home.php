<!doctype html>

<html lang="en" dir="ltr">

<head>
    <?php
        $this->load->view('template/meta');
    ?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/dashboard_user.css">

    <!-- CSS Fonts Global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/fonts.css">

    <!-- CSS Colors Global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/colours.css">

    <!-- CSS Template Style Global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/app.css">

    <title>User Dashboard - Home</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 img-fluid"><img src="<?php echo base_url() ?>/public/img/Logo.png" alt="Futurest 2022"></div>
            <div class="list-group list-group-flush my-3">

                <a href="<?php echo base_url('user')?>" class="list-group-item list-group-item-action bg-transparent primary-text active"><i class="fas fa-home-alt me-2"></i>Home</a>
                <a href="<?php echo base_url('user/team')?>" class="list-group-item list-group-item-action bg-transparent second-text primary-text"><i class="fas fa-users-cog me-2"></i>Team Identity</a>
                <hr class="info-color">
                <a href="<?php echo base_url('logout')?>" class="list-group-item list-group-item-action bg-transparent text-danger primary-text"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="primary-text">Welcome to FUTUREST dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2 info-color"></i><?php echo $this->session->userdata('account_username');?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo base_url('user')?>">Home</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('user/team')?>">Team Identity</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('logout')?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Info Card -->
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <h4 class="mb-3 primary-text">Info</h4>

                    <div class="col-lg-3 col-md-6 ">
                        <div class="p-3 bg-white shadow d-flex justify-content-around align-items-center info-card">
                            <i class="fas fa-users fs-1 info-color p-3"></i>
                            <div>
                                <p class="fs-6 text-black-50 regular-text">Team Name</p>
                                <h5 class="primary-text"><?= $data[0]['pendaftaranreinnovation_teamname']?></h5>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 ">
                        <div class="p-3 bg-white shadow d-flex justify-content-around align-items-center info-card">
                            <i class="fas fa-university fs-1 info-color p-3"></i>
                            <div>
                                <p class="fs-6 text-black-50 regular-text">Institution</p>
                                <h5 class="primary-text"><?= $data[0]['pendaftaranreinnovation_college']?></h5>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 ">
                        <div class="p-3 bg-white shadow d-flex justify-content-around align-items-center info-card">
                            <i class="fas fa-id-card fs-1 status-color p-3"></i>
                            <div>
                                <p class="fs-6 text-black-50 regular-text">Team ID Status</p>
                                <h5 class="status-color primary-text">Verified</h5>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 ">
                        <div class="p-3 bg-white shadow d-flex justify-content-around align-items-center info-card">
                            <i class="fas fa-money-check-alt fs-1 status-color p-3"></i>
                            <div>
                                <p class="fs-6 text-black-50 text-black-50 regular-text">Payment Status</p>
                                <?php if($data[0]['pendaftaranreinnovation_status'] != 2) {?>
                                    <h5 class="text-danger"><b>Not Verified</b></h5>
                                <?php }elseif($data[0]['pendaftaranreinnovation_status'] == 2){?>
                                    <h5 class="status-color primary-text">Verified</h5>
                                <?php }?>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /info card -->

                <!-- Announcement card -->
                <div class="row announcement pb-5">
                    <h4 class="mb-4 primary-text">Announcement</h4>
                    <div class="col-md-6 p-2">
                        <div class="card announcement-card shadow">
                            <div class="card-body">
                                <h5 class="card-title primary-text">Guidebook</h5>
                                
                                <a href="https://bit.ly/GuidebookREIB2022" class="btn btn-outline-success" target="_blank">View</a>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-md-6 p-2">
                        <div class="card announcement-card shadow">
                            <div class="card-body">
                                <h5 class="card-title primary-text">Upload Abstract</h5>
                                
                                <a href="<?php echo base_url('user/abstract')?>" class="btn btn-outline-success">Upload</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="card announcement-card shadow">
                            <div class="card-body">
                                <h5 class="card-title primary-text">Upload full paper</h5>
                                
                                <a href="<?php echo base_url('user/fullpaper')?>" class="btn btn-outline-success">Upload</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="card announcement-card shadow">
                            <div class="card-body">
                                <h5 class="card-title primary-text">Upload Power Point</h5>
                                
                                <a href="<?php echo base_url('user/powerpoint')?>" class="btn btn-outline-success">Upload</a>
                            </div>
                        </div>
                    </div>-->
                </div>
                <!-- /Announcement card -->
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <a class="btn btn-success position-fixed" style="bottom: 30px; right: 30px" href="#wrapper">
        <i class="fas fa-chevron-up"></i>
    </a>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>