<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambaram Corporation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/png" href="https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/images/logo/logo.png">
    <link href="<?= base_url('../assets/admin/css/bootstrap.min.css'); ?>" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <link href="<?= base_url('../assets/admin/css/app.min.css'); ?>" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container-fluid overflow-hidden" style="background-image: url(<?= base_url();?>../assets/images/login-bg.jpg);">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-10 col-md-6 col-lg-6 col-xxl-6">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="index.php" class="logo-dark">
                                <img src="assets/images/logo-dark.png" alt="" height="20"
                                    class="auth-logo logo-dark mx-auto">
                            </a>
                            <a href="index.php" class="logo-dark">
                                <img src="assets/images/logo-light.png" alt="" height="20"
                                    class="auth-logo logo-light mx-auto">
                            </a>
                            <h4 class="mt-4">Login for Admin Dashboard</h4>
                        </div>
                        <div class="p-2 mt-2">
                            <?php if ($this->session->flashdata('danger')): ?>
                                <div class="alert alert-danger solid alert-end-icon alert-dismissible">
                                    <strong>Error!&nbsp;&nbsp;</strong> <?php echo $this->session->flashdata('danger'); ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($this->session->flashdata('success')): ?>
                                <div class="alert alert-info solid alert-end-icon alert-dismissible">
                                    <span><i class="mdi mdi-email"></i></span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        <span><i class="fa-solid fa-xmark"></i></span>
                                    </button>
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <?php echo form_open(base_url('admin/adminLogin')); ?>
                            <div
                                class="input-group auth-form-group-custom mb-3 <?= !empty($user_err) ? 'has-error' : ''; ?>">
                                <span class="input-group-text bg-primary bg-opacity-10 fs-16 " id="basic-addon1"><i
                                        class="mdi mdi-account-outline auti-custom-input-icon"></i></span>
                                <input type="text" class="form-control" placeholder="Enter username"
                                    name="username" aria-label="Username" aria-describedby="basic-addon1">

                            </div>
                            <!-- <span class="text-danger"><?php echo $user_err; ?></span> -->
                            <div
                                class="input-group auth-form-group-custom mb-3 <?= !empty($password_err) ? 'has-error' : ''; ?>">
                                <span class="input-group-text bg-primary bg-opacity-10 fs-16" id="basic-addon2"><i
                                        class="mdi mdi-lock-outline auti-custom-input-icon"></i></span>
                                <input type="password" class="form-control" id="userpassword" name="password"
                                    placeholder="Enter password" aria-label="Username"
                                    aria-describedby="basic-addon1">

                            </div>
                            <div class="pt-3 text-center">
                                <button class="btn btn-primary w-xl waves-effect waves-light" type="submit">Log
                                    In</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>