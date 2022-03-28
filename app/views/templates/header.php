<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title><?= $data['judulhalaman']; ?> - Sistem Informasi Manejemen KHDTK UGM </title>
    <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/assets/img/favicon.png"/>
    <link href="<?= BASEURL; ?>/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?= BASEURL; ?>/assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,600,700" rel="stylesheet">
    <link href="<?= BASEURL; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/css/structure.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/css/main.css">
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/css/elements/breadcrumb.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/assets/css/elements/search.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/plugins/table/datatable/dt-global_style.css">
    <link href="<?= BASEURL; ?>/assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <script src="<?= BASEURL; ?>/plugins/sweetalerts/promise-polyfill.js"></script>
    <link href="<?= BASEURL; ?>/plugins/sweetalerts/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/plugins/sweetalerts/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/assets/css/components/custom-sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?= BASEURL; ?>/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?= BASEURL; ?>/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">
        <!-- BEGIN LOADER -->
        <div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm expand-header">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

                <ul class="navbar-item flex-row ml-auto">

                    <li class="nav-item align-self-center search-animated">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        <form class="form-inline search-full form-inline search" role="search">
                            <div class="search-bar">
                                <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Cari...">
                            </div>
                        </form>
                    </li>

                    <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        </a>
                        <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                            <div class="user-profile-section">
                                <div class="media mx-auto">
                                    <img src="<?= BASEURL; ?>/assets/img/90x90.jpg" class="img-fluid mr-2" alt="avatar">
                                    <div class="media-body">
                                        <h5>echo</h5>
                                        <p>echo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-item">
                                <a href="user_profile.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Profile</span>
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a href="auth_logout.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </header>
        </div>
        <!--  END NAVBAR  -->