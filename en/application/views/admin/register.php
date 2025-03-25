<?php include 'header.php'; ?>
<div class="container-fluid authentication-bg overflow-hidden">
        <div class="bg-overlay"></div>
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-10 col-md-6 col-lg-4 col-xxl-3">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center">
                            <div>
                                <a href="index.php" class="logo-dark">
                                    <img src="assets/images/logo-dark.png" alt="" height="20" class="auth-logo logo-dark mx-auto">
                                </a>
                                <a href="index.php" class="logo-light">
                                    <img src="assets/images/logo-light.png" alt="" height="20" class="auth-logo logo-light mx-auto">
                                </a>
                            </div>

                            <h4 class="font-size-18 mt-4">Register account</h4>
                            <p class="text-muted">Get your free Clivax account now.</p>
                        </div>
                        <div class="p-2 mt-5">
    <!-- Display Error Messages -->
    <?php if ($this->session->flashdata('danger')): ?>
                                <div class="alert alert-danger solid alert-end-icon alert-dismissible">
                                    <span><i class="mdi mdi-help"></i></span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        <span><i class="fa-solid fa-xmark"></i></span>
                                    </button>
                                    <strong>Error!</strong> <?php echo $this->session->flashdata('danger'); ?>
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
                        
                            <!-- Registration Form -->
                            <?php echo form_open('admin/adminRegister'); ?>
                        
                            <!-- Username Field -->
                            <div class="input-group auth-form-group-custom mb-3">
                                <span class="input-group-text bg-primary bg-opacity-10 fs-16 " id="basic-addon1">
                                    <i class="mdi mdi-account-outline auti-custom-input-icon"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Enter username" name="username"
                                    value="<?php echo set_value('username'); ?>" aria-describedby="basic-addon1">
                            </div>
                            <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
                        
                            <!-- Password Field -->
                            <div class="input-group auth-form-group-custom mb-3">
                                <span class="input-group-text bg-primary bg-opacity-10 fs-16" id="basic-addon2">
                                    <i class="mdi mdi-lock-outline auti-custom-input-icon"></i>
                                </span>
                                <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password"
                                    aria-describedby="basic-addon2">
                            </div>
                            <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                        
                            <!-- Confirm Password Field -->
                            <div class="input-group auth-form-group-custom mb-3">
                                <span class="input-group-text bg-primary bg-opacity-10 fs-16" id="basic-addon3">
                                    <i class="mdi mdi-lock-outline auti-custom-input-icon"></i>
                                </span>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                                    placeholder="Confirm password" aria-describedby="basic-addon3">
                            </div>
                            <?php echo form_error('confirm_password', '<div class="text-danger">', '</div>'); ?>
                        
                            <!-- Terms and Conditions Checkbox -->
                            <div class="mb-5">
                                <div class="form-check float-start">
                                    <input type="checkbox" class="form-check-input" id="customControlInline">
                                    <label class="form-check-label" for="customControlInline">
                                        I agree to all Terms and Conditions
                                    </label>
                                </div>
                            </div>
                        
                            <!-- Submit Button -->
                            <div class="text-center pt-3">
                                <button class="btn btn-primary w-xl waves-effect waves-light" type="submit">
                                    Register
                                </button>
                            </div>
                        
                            <!-- Login Link -->
                            <div class="mt-3 text-center">
                                <p class="mb-0">Already have an account?
                                    <a href="<?php echo base_url('admin/login'); ?>" class="fw-medium text-primary"> Login </a>
                                </p>
                            </div>
                        
                            <?php echo form_close(); ?> <!-- Correct form close -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>