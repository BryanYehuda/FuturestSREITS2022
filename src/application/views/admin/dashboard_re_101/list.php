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

    <title>RE 101 - List</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 img-fluid"><img src="<?php echo base_url() ?>/public/img/Logo.png" alt=""></div>
            <div class="list-group list-group-flush my-3">
                <a href="<?php echo base_url('dashboard-re-101')?>" class="list-group-item list-group-item-action bg-transparent primary-text"><i class="fas fa-home-alt me-2"></i>Home</a>
                <a href="<?php echo base_url('dashboard-re-101-list')?>" class="list-group-item list-group-item-action bg-transparent second-text primary-text active"><i class="fas fa-users-cog me-2"></i>Registeree List</a>                <hr class="info-color">
                <a href="<?php echo base_url('logout')?>" class="list-group-item list-group-item-action bg-transparent text-danger primary-text"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="primary-text">Welcome to Dashboard Futurest RE 101</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2 info-color"></i>@FuturestRE101
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard-re-101')?>">Home</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard-re-101-list')?>">Registeree List</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('logout')?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Info Card -->
            
            <div class="container-fluid px-4 pb-5">
                <div class="row g-3 my-2">
                    <h4 class="mb-3 primary-text">User Registered</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Domicile</th>
                                        <th scope="col">University</th>
                                        <th scope="col">Major</th>
                                        <th scope="col">Batch</th>
                                        <th scope="col">Question</th>
                                        <th scope="col">Following Futurest</th>
                                        <th scope="col">Following SRE</th>
                                        <th scope="col">Sharing IGS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;?>
                                    <?php foreach($data as $item):?>
                                    <tr>
                                        <th scope="row"><?= $i++;?></th>
                                        <td><?= $item['pendaftaranre101_name']?></td>
                                        <td><?= $item['pendaftaranre101_email']?></td>
                                        <td><?= $item['pendaftaranre101_email']?></td>
                                        <td><?= $item['pendaftaranre101_university']?></td>
                                        <td><?= $item['pendaftaranre101_major']?></td>
                                        <td><?= $item['pendaftaranre101_batch']?></td>
                                        <td><?= $item['pendaftaranre101_question']?></td>
                                        <td><a href="<?php echo base_url('/upload/RE101/followfuturestig/' . $item['pendaftaranre101_followingfuturestig'])?>" target="_blank">Show</a></td>
                                        <td><a href="<?php echo base_url('/upload/RE101/followsreig/' . $item['pendaftaranre101_followingsreig'])?>" target="_blank">Show</a></td>
                                        <td><a href="<?php echo base_url('/upload/RE101/sharestory/' . $item['pendaftaranre101_sharestory'])?>" target="_blank">Show</a></td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
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
    </script>
</body>

</html>