<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div>
                        <?php
                        // Set timezone (Ensure this is set in your application)
                        date_default_timezone_set('Asia/Kolkata'); // Change as per your region

                        // Get current hour
                        $hour = (int) date('H');

                        // Determine greeting
                        if ($hour >= 5 && $hour < 12) {
                            $greeting = "Good Morning";
                        } elseif ($hour >= 12 && $hour < 17) {
                            $greeting = "Good Afternoon";
                        } elseif ($hour >= 17 && $hour < 21) {
                            $greeting = "Good Evening";
                        } else {
                            $greeting = "Good Night";
                        }
                        ?>

                        <h4 class="fs-16 fw-semibold mb-1 mb-md-2">
                            <?php echo $greeting; ?>,
                            <span class="text-primary"><?php echo $this->session->userdata('username'); ?>!</span>
                        </h4>

                        <p class="text-muted mb-0">Welcome to the Tambaram corporation Admin Dashboard.</p>
                    </div>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tambaram corporation</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--    end row -->
    </div>
    <!-- end container-fluid -->
</div>