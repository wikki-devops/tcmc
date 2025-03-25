<!-- Start topbar -->
<header id="page-topbar">
    <div class="navbar-header">

        <!-- Logo -->

        <!-- Start Navbar-Brand -->
        <div class="navbar-logo-box">
            <a href="index.php" class="logo logo-dark">
                <span class="logo-sm">
                    <!-- <img src="assets/images/logo-sm.png" alt="logo-sm-dark" height="20"> -->
                    <img src="<?= cdn_url(); ?>assets/images/logo/logo.png" alt="logo" height="40">
                </span>
                <span class="logo-lg">
                    <img src="<?= cdn_url(); ?>assets/images/logo/logo-english.png" alt="Tambaram Corporation" height="45" />
                </span>
            </a>

            <a href="index.php" class="logo logo-light">
                <span class="logo-sm">
                    <img src="<?= cdn_url(); ?>assets/images/logo/logo.png" alt="logo" height="40">
                </span>
                <span class="logo-lg">
                    <img src="<?= cdn_url(); ?>assets/images/logo/logo-english.png" alt="Tambaram Corporation" height="45" />
                </span>
            </a>

            <button type="button" class="btn btn-sm top-icon sidebar-btn" id="sidebar-btn">
                <i class="mdi mdi-menu-open align-middle fs-19"></i>
            </button>
        </div>
        <!-- End navbar brand -->

        <!-- Start menu -->
        <div class="d-flex justify-content-between menu-sm px-3 ms-auto">
            <div class="d-flex align-items-center gap-2">
            </div>
            <div class="d-flex align-items-center gap-2">

                <!-- Start Profile -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm top-icon p-0" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded avatar-2xs p-0" src="<?= base_url(); ?>../assets/admin/images/users/avatar-6.png" alt="Header Avatar">
                    </button>
                    <div
                        class="dropdown-menu dropdown-menu-wide dropdown-menu-end dropdown-menu-animated overflow-hidden py-0">
                        <div class="card border-0">
                            <div class="card-header bg-primary rounded-0">
                                <div class="rich-list-item w-100 p-0">
                                    <div class="rich-list-prepend">
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </div>
                                    <div class="rich-list-content">
                                        <h3 class="rich-list-title text-white"><?php echo $this->session->userdata('username');?></h3>
                                        <span class="rich-list-subtitle text-white">admin@codubucks.in</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="grid-nav grid-nav-flush grid-nav-action grid-nav-no-rounded">
                                    <div class="grid-nav-row">
                                        <a href="apps-contact.php" class="grid-nav-item">
                                            <div class="grid-nav-icon"><i class="far fa-address-card"></i></div>
                                            <span class="grid-nav-content">Profile</span>
                                        </a>
                                        <a href="#!" class="grid-nav-item">
                                            <div class="grid-nav-icon"><i class="far fa-comments"></i></div>
                                            <span class="grid-nav-content">Messages</span>
                                        </a>
                                        <a href="#!" class="grid-nav-item">
                                            <div class="grid-nav-icon"><i class="far fa-clone"></i></div>
                                            <span class="grid-nav-content">Activities</span>
                                        </a>
                                    </div>
                                    <div class="grid-nav-row">
                                        <a href="#!" class="grid-nav-item">
                                            <div class="grid-nav-icon"><i class="far fa-calendar-check"></i></div>
                                            <span class="grid-nav-content">Tasks</span>
                                        </a>
                                        <a href="#!" class="grid-nav-item">
                                            <div class="grid-nav-icon"><i class="far fa-sticky-note"></i></div>
                                            <span class="grid-nav-content">Notes</span>
                                        </a>
                                        <a href="#!" class="grid-nav-item">
                                            <div class="grid-nav-icon"><i class="far fa-bell"></i></div>
                                            <span class="grid-nav-content">Notification</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer card-footer-bordered rounded-0">
                                <a href="<?= base_url('admin/logout');?>" class="btn btn-label-danger">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Profile -->
            </div>
        </div>
        <!-- End menu -->
    </div>
</header>
<!-- End topbar -->