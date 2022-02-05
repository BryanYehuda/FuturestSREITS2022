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
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/dashboard_admin_team_list.css">

    <!-- CSS Fonts Global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/fonts.css">

    <!-- CSS Colors Global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/colours.css">

    <!-- CSS Template Style Global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/app.css">

    <title>RE Innovation - List</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 img-fluid"><img src="<?php echo base_url() ?>/public/img/Logo.png" alt=""></div>
            <div class="list-group list-group-flush my-3">
                <a href="<?php echo base_url('dashboard-re-innovation')?>" class="list-group-item list-group-item-action bg-transparent primary-text second-text"><i class="fas fa-home-alt me-2"></i>Home</a>
                <a href="<?php echo base_url('dashboard-re-innovation-list')?>" class="list-group-item list-group-item-action bg-transparent second-text primary-text active"><i class="fas fa-users-cog me-2"></i>Team List</a>
                <a href="<?php echo base_url('dashboard-re-innovation-confirmation')?>" class="list-group-item list-group-item-action bg-transparent second-text primary-text"><i class="fas fa-calendar-check me-2"></i>Confirmation</a>
                <a href="<?php echo base_url('dashboard-re-innovation-payment') ?>" class="list-group-item list-group-item-action bg-transparent second-text primary-text"><i class="fas fa-money-check-alt me-2"></i>Payment</a>
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
                    <h2 class="primary-text">Welcome to Dashboard Futurest RE Innovation</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2 info-color"></i>@FuturestREInnovation
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard-re-innovation')?>">Home</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard-re-innovation-list')?>">Team List</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard-re-innovation-confirmation')?>">Confirmation</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard-re-innovation-payment') ?>">Payment</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('logout')?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Info Card -->
            <div class="container-fluid px-4 pb-5">
                <div class="row g-3 my-2">
                    <h4 class="mb-3 primary-text">Team Confirmed</h4>

                    <?php foreach($data as $item):?>
                    <div class="col-12 col-sm-6 mb-3">
                        <div class="p-3 bg-white shadow info-card">
                        <i class="fas fa-users fs-1 info-color"></i>
                        <hr>                                
                            <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Team Name</p>
                            <h5 class="primary-text mb-2"><?= $item['pendaftaranreinnovation_teamname']?></h5>
                            
                            <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Institution</p>
                            <h5 class="primary-text mb-2"><?= $item['pendaftaranreinnovation_college']?></h5>
                            
                            <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Member 1</p>
                            <h5 class="primary-text mb-2 fs-6">
                                <ul>
                                    <li>Full Name: <?=$item['pendaftaranreinnovation_1_name']?></li>
                                    <li>Major: <?=$item['pendaftaranreinnovation_1_major']?></li>
                                    <li>Batch: <?=$item['pendaftaranreinnovation_1_batch']?></li>
                                    <li>Phone: <?=$item['pendaftaranreinnovation_1_phone']?></li>
                                    <li>Email: <?=$item['pendaftaranreinnovation_1_email']?></li>
                                    <li>KTP / Student ID: <a href="<?= base_url('/upload/REinnovation/card/' . $item['pendaftaranreinnovation_1_card'])?>" target="_blank">Show</a></li>
                                    <li>Active Student: <a href="<?= base_url('/upload/REinnovation/activestudent/' . $item['pendaftaranreinnovation_1_activestudent'])?>" target="_blank">Show</a></li>
                                    <li>Photo 4x6: <a href="<?= base_url('/upload/REinnovation/photo/' . $item['pendaftaranreinnovation_1_photo'])?>" target="_blank">Show</a></li>
                                    <li>Proof of Following: <a href="<?= base_url('/upload/REinnovation/follow/' . $item['pendaftaranreinnovation_1_follow'])?>" target="_blank">Show</a></li>
                                </ul>
                            </h5>
                            <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Member 2</p>
                            <h5 class="primary-text mb-2 fs-6">
                                <ul>
                                    <li>Full Name: <?=$item['pendaftaranreinnovation_2_name']?></li>
                                    <li>Major: <?=$item['pendaftaranreinnovation_2_major']?></li>
                                    <li>Batch: <?=$item['pendaftaranreinnovation_2_batch']?></li>
                                    <li>Phone: <?=$item['pendaftaranreinnovation_2_phone']?></li>
                                    <li>Email: <?=$item['pendaftaranreinnovation_2_email']?></li>
                                    <li>KTP / Student ID: <a href="<?= base_url('/upload/REinnovation/card/' . $item['pendaftaranreinnovation_2_card'])?>" target="_blank">Show</a></li>
                                    <li>Active Student: <a href="<?= base_url('/upload/REinnovation/activestudent/' . $item['pendaftaranreinnovation_2_activestudent'])?>" target="_blank">Show</a></li>
                                    <li>Photo 4x6: <a href="<?= base_url('/upload/REinnovation/photo/' . $item['pendaftaranreinnovation_2_photo'])?>" target="_blank">Show</a></li>
                                    <li>Proof of Following: <a href="<?= base_url('/upload/REinnovation/follow/' . $item['pendaftaranreinnovation_2_follow'])?>" target="_blank">Show</a></li>
                                </ul>
                            </h5>
                            <?php if($item['pendaftaranreinnovation_3_name'] != NULL):?>
                            <p class="fs-6 text-black-50 regular-text" style="margin-bottom: 1px;">Member 3</p>
                            <h5 class="primary-text mb-2 fs-6">
                                <ul>
                                    <li>Full Name: <?=$item['pendaftaranreinnovation_3_name']?></li>
                                    <li>Major: <?=$item['pendaftaranreinnovation_3_major']?></li>
                                    <li>Batch: <?=$item['pendaftaranreinnovation_3_batch']?></li>
                                    <li>Phone: <?=$item['pendaftaranreinnovation_3_phone']?></li>
                                    <li>Email: <?=$item['pendaftaranreinnovation_3_email']?></li>
                                    <li>KTP / Student ID: <a href="<?= base_url('/upload/REinnovation/card/' . $item['pendaftaranreinnovation_3_card'])?>" target="_blank">Show</a></li>
                                    <li>Active Student: <a href="<?= base_url('/upload/REinnovation/activestudent/' . $item['pendaftaranreinnovation_3_activestudent'])?>" target="_blank">Show</a></li>
                                    <li>Photo 4x6: <a href="<?= base_url('/upload/REinnovation/photo/' . $item['pendaftaranreinnovation_3_photo'])?>" target="_blank">Show</a></li>
                                    <li>Proof of Following: <a href="<?= base_url('/upload/REinnovation/follow/' . $item['pendaftaranreinnovation_3_follow'])?>" target="_blank">Show</a></li>
                                </ul>
                            </h5> 
                            <?php endif;?>
                            <!--
                            <p class="fs-6 text-black-50 regular-text" style="margin-bottom: -4px;">Proof of Payment</p>
                            <a href="<?= base_url('/upload/REinnovation/payment/' . $item['pendaftaranreinnovation_payment'])?>" target="_blank">Show</a></h5>
                            -->
                            </a>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <!-- /info card -->
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