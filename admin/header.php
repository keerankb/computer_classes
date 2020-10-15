    

<style>
    aside {
        background-color: #ebebeb !important;
    }

    .top-bar .navbar .navbar-header {
        background: #ebebeb; 
    }
    .app-navbar .sidebar-nav {
        background: #ebebeb;
    }
    .app-navbar .sidebar-nav ul.metismenu li a {
        color: #000;
    }
    .app-navbar .sidebar-nav ul.metismenu li.active a {
        color: #000;
    }

    .app-navbar .sidebar-nav ul.metismenu li a:focus, .app-navbar .sidebar-nav ul.metismenu li a:hover {
        background: #ebebeb;
        color: #6c3353;
    }
    .app-navbar .sidebar-nav ul.metismenu li.active ul li a {
        background: #ebebeb !important;
        color: #000;
    }
    .app-navbar .sidebar-nav ul.metismenu li.active ul li a:hover {
        color: #f4af23 !important;
    }



    .sidebar-nav .metismenu a:active, .sidebar-nav .metismenu a:focus, .sidebar-nav .metismenu a:hover {
    color: #f8f9fa;
    text-decoration: none;
    /* background: #0b7285; */
    }



    .app-navbar .sidebar-nav ul.metismenu li a i {
        margin-right: 10px;
        color: #6C3353;
        width: 20px;
    }
    .app-navbar .sidebar-nav ul.metismenu li.active a i {
        color: #f4af23;
    }
    .top-bar .navbar .navbar-header .logo-desktop {
        width: 150px;
        height: auto;
        visibility: visible;
        opacity: 1;
        position: relative;
        z-index: 0;
        transition: all ease-in-out .2s;
    }
</style>



    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="index.php">
                            <img src="../img/logo/future logo banner.png" class="img-fluid logo-desktop" alt="logo" />
                            <img src="../img/logo/future logo.png" class="img-fluid logo-mobile" alt="logo" />
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                        <i class="ti ti-align-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav nav-right ml-auto">
                                <li class="nav-item dropdown user-profile">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/img/avtar/02.jpg" alt="avtar-img">
                                        <span class="bg-success user-status"></span>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <div class="bg-gradient px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="mr-1">
                                                    <h4 class="text-white mb-0">Alice Williams</h4>
                                                    <small class="text-white">Henry@example.com</small>
                                                </div>
                                                <a href="logout.php" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout"> <i
                                                                class="zmdi zmdi-power"></i></a>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-user pr-2 text-success"></i> Profile</a>
                                            <div class="col">
                                                <a class="bg-light p-3 text-center d-block" href="admin-signup.php">
                                                    <i class="fe fe-plus font-20 text-primary"></i>
                                                    <span class="d-block font-13 mt-2">Add New Admin</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
                </nav>
                <!-- end navbar -->
            </header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->

                <!-- <aside>
                    <div class="app-navbar">
                        <nav class="navbar">
                            <div>
                                <button class="navbar-toggler"></button>
                            </div>
                            
                        </nav>
                    </div>
                </aside> -->








                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title"></li>
                            <li>
                                <a class="" href="index.php" aria-expanded="false">
                                    <i class="nav-icon ti ti-rocket"></i>
                                    <span class="nav-title">Dashboards</span>
                                </a>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon fa fa-tasks"></i><span class="nav-title">Batches</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='add-batch.php'>Add Batch</a> </li>
                                    <li> <a href='batches.php'>List of Batches</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon fa fa-graduation-cap"></i><span class="nav-title">Courses</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='add-course.php'>Add Course</a> </li>
                                    <li> <a href='courses.php'>List of Courses</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon fa fa-user-o"></i> <span class="nav-title">Faculty</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='add-facilty.php'>Add Faculty</a> </li>
                                    <li> <a href='faculty.php'>List of Faculties</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon ti ti-bag"></i> <span class="nav-title">Branches</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='#'>Add Branch</a> </li>
                                    <li> <a href='#'>List of Branches</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false"><i class="nav-icon fa fa-map-marker"></i> <span class="nav-title">City</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='#'>Add City</a> </li>
                                    <li> <a href='#'>List of Cities</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="registration.php" aria-expanded="false"><i class="nav-icon fa fa-users"></i><span class="nav-title">Registration</span></a>
                            </li>
                            <li>
                                <a href="enquiry.php" aria-expanded="false"><i class="nav-icon fa fa-pencil-square-o"></i><span class="nav-title">Enquiry</span></a>
                            </li>
                            <li>
                                <a href="feedback.php" aria-expanded="false"><i class="nav-icon fa fa-comment"></i><span class="nav-title">Feedback</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>