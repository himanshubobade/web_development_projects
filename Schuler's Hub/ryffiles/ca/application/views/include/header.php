<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>TheRYF - Campus Ambasador</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>assets/ms-icon-310x310.png">

        <!-- slick css -->
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link href="<?= base_url() ?>assets/admin-assets/css/utility-classes.css?var=1" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/admin-assets/libs/slick-slider/slick/slick.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/slick-slider/slick/slick-theme.css" rel="stylesheet" type="text/css" />

        <!-- jvectormap -->
        <link href="<?= base_url() ?>assets/admin-assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

		<link href="<?= base_url() ?>assets/admin-assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/admin-assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url() ?>assets/admin-assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <!-- Responsive datatable examples -->
        <link href="<?= base_url() ?>assets/admin-assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     
		<link href="<?= base_url() ?>assets/admin-assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />			

        <!-- Bootstrap Css -->
        <link href="<?= base_url() ?>assets/admin-assets/css/bootstrap.min.css?var=2" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url() ?>assets/admin-assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= base_url() ?>assets/admin-assets/css/app.min.css?var=1.4" rel="stylesheet" type="text/css" />

        <!-- JAVASCRIPT -->
        <script src="<?= base_url() ?>assets/admin-assets/libs/jquery/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

		

    </head>

    <body data-sidebar="white">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box bg-white-f9">
                            <a href="<?= base_url() ?>" class="logo">
                                <span class="logo-sm">
                                    <img src="<?= base_url() ?>assets/ms-icon-310x310.png" alt="" height="40">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?= base_url() ?>assets/admin-assets/images/logo-new.png" alt="" height="70">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?= base_url() ?>assets/ms-icon-310x310.png"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1 text-capitalize"><?php echo $campusambasador->name; ?></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url() ?>index.php/auth/logout_ca"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                            </div>
                        </div>
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu --> 
                    <div id="sidebar-menu" class="nunito_fonts">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="<?= base_url() ?>" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>ca-tasks" class="waves-effect">
                                    <i class="mdi mdi-lan"></i>
                                    <span>CA's Tasks</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?= base_url() ?>submit-report" class="waves-effect">
                                    <i class="mdi mdi-forum"></i>
                                    <span>Submit Report</span>
                                </a>
                            </li>
                            
                            
                           <li>
                                <a href="<?= base_url() ?>catakeaction" class="waves-effect">
                                   <i class="mdi mdi-comment-question-outline"></i>
                                    <span>Take action</span>
                                </a>
                            </li> 
                            
                           <li>
                                <a href="<?= base_url() ?>my-file" class="waves-effect">
									<i class="mdi mdi-cookie"></i>
                                    <span>My File</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>dashboard" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>Dashboard1</span>
                                </a>
                            </li> 
                            

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
