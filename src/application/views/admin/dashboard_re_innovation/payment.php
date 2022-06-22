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
    <link rel="stylesheet" href="<?php echo base_url() ?>public/css/pages/dashboard_admin_team_confirmation.css">

    <!-- CSS Fonts Global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/fonts.css">

    <!-- CSS Colors Global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/colours.css">

    <!-- CSS Template Style Global -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/public/css/app.css">

    <title>RE Innovation - Payment</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 img-fluid"><img src="<?php echo base_url() ?>/public/img/Logo.png" alt=""></div>
            <div class="list-group list-group-flush my-3">

            <a href="<?php echo base_url('dashboard-re-innovation')?>" class="list-group-item list-group-item-action bg-transparent primary-text second-text"><i class="fas fa-home-alt me-2"></i>Home</a>
                <a href="<?php echo base_url('dashboard-re-innovation-list')?>" class="list-group-item list-group-item-action bg-transparent second-text primary-text"><i class="fas fa-users-cog me-2"></i>Team List</a>
                <a href="<?php echo base_url('dashboard-re-innovation-confirmation')?>" class="list-group-item list-group-item-action bg-transparent second-text primary-text"><i class="fas fa-calendar-check me-2"></i>Confirmation</a>
                <a href="<?php echo base_url('dashboard-re-innovation-payment') ?>" class="list-group-item list-group-item-action bg-transparent second-text primary-text active"><i class="fas fa-money-check-alt me-2"></i>Payment</a>
                <hr class="info-color">
                <a href="<?php echo base_url('logout') ?>" class="list-group-item list-group-item-action bg-transparent text-danger primary-text"><i class="fas fa-power-off me-2"></i>Logout</a>
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
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard-re-innovation') ?>">Home</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard-re-innovation-list') ?>">Team List</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard-re-innovation-confirmation') ?>">Confirmation</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard-re-innovation-payment') ?>">Payment</a></li>

                                <li><a class="dropdown-item" href="<?php echo base_url('logout') ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Info Card -->


            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <h4>Payment Status</h4>
                    <?php if ($this->session->flashdata('response')) : ?>
                        <?= $this->session->flashdata('response'); ?>
                    <?php endif; ?>
                    <div class="col-md-12 p-2">
                        <table class="table table-borderless row-gap center">
                            <tbody>

                                <tr class="invoice-head shadow primary-text" valign="middle">
                                    <td>
                                        Team Name
                                    </td>

                                    <td> Contact</td>
                                    <td>
                                        Confirmation
                                    </td>
                                    <td>
                                        Status
                                    </td>
                                </tr>
                                <?php foreach($data as $item){ ?>
                                <tr class="invoice-row shadow regular-text" valign="middle">
                                    <td>
                                        <?= $item['pendaftaranreinnovation_teamname']?>
                                    </td>

                                    <td>
                                        Phone : <?=$item['pendaftaranreinnovation_1_phone']?>
                                    </td>
                                    <td>
                                        <?php if($item['pendaftaranreinnovation_status'] != 2) {?>
                                            <a href= "re_innovation/confirmpay/<?= $item['pendaftaranreinnovation_id']?>" class="btn btn-success" id="accept-<?= $item['pendaftaranreinnovation_id']?>" onclick="accept(this.id)">
                                                <i class="hide loading-icon fa fa-spinner fa-spin d-none" id="loading-accept-<?= $item['pendaftaranreinnovation_id']?>"></i>Accept
                                            </a>
                                        <?php }elseif($item['pendaftaranreinnovation_status'] == 2){?>
                                            <a href="re_innovation/cancelpay/<?= $item['pendaftaranreinnovation_id']?>" class="btn btn-danger" id="reject-<?= $item['pendaftaranreinnovation_id']?>" onclick="reject(this.id)">
                                                <i class="hide loading-icon fa fa-spinner fa-spin d-none" id="loading-reject-<?= $item['pendaftaranreinnovation_id']?>"></i>Cancel
                                            </a>
                                        <?php }?>
                                    </td>

                                    <td>
                                        <?php if($item['pendaftaranreinnovation_status'] != 2) {?>
                                            <div class="text-danger"><b>NOT PAID</b></div>
                                        <?php }elseif($item['pendaftaranreinnovation_status'] == 2){?>
                                            <div class="status-color primary-text"><b>PAID</b></div>
                                        <?php }?>
                                        
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

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

        function reject(id){
            document.getElementById(id).classList.add("disabled");
            document.getElementById("loading-" + id).classList.remove("d-none");
        };
        function accept(id){
            document.getElementById(id).classList.add("disabled");
            document.getElementById("loading-" + id).classList.remove("d-none");
        };
    </script>
</body>

</html>