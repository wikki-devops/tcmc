<header id="page-topbar">
    <div class="navbar-header">
        <div class="navbar-logo-box">
            <a href="<?= base_url('admin/dashboard'); ?>" class="logo logo-dark">
                <span class="logo-sm">
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
        <div class="d-flex justify-content-between menu-sm px-3 ms-auto">
            <div class="d-flex align-items-center gap-2">
            </div>
            <div class="d-flex align-items-center gap-2">
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm top-icon p-0" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded avatar-2xs p-0" src="<?= base_url('../assets/admin/images/users/avatar-6.png'); ?>" alt="Header Avatar">
                    </button>
                    <div
                        class="dropdown-menu dropdown-menu-end dropdown-menu-animated overflow-hidden py-0">
                        <div class="card border-0">
                            <div class="card-header rounded-0">
                                <div class="rich-list-item w-100 p-0">
                                    <div class="rich-list-prepend">
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display text-black"><i class="far fa-bell"></i></div>
                                        </div>
                                    </div>
                                    <a href="<?= base_url(); ?>" target="_blank" class="rich-list-content">
                                        <h3 class="rich-list-title text-black">Website</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer card-footer-bordered rounded-0">
                                <a href="<?= base_url('admin/logout');?>" class="btn btn-label-danger ms-20px">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
