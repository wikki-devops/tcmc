<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px position-relative">
    <div class="container">
        <h2 class="text-dark-gray fw-700 fs-32 mb-5 text-center">Commissioner of Municipal Administration Officials
        </h2>
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2"
            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <?php foreach ($administrationofficials as $contact): ?>
                <div class="col mb-30px">
                    <div
                        class="icon-with-text-style-01 feature-box feature-box-left-icon-middle bg-white p-20px border-radius-20px h-100 text-start box-shadow-double-large">
                        <div class="feature-box-icon me-15px">
                            <img src="<?= cdn_url(); ?>assets/images/logo/logo.png" class="h-60px" alt="">
                        </div>
                        <div class="feature-box-content">
                            <p class="fs-18 fw-700 mb-5px text-base-color"><?= $contact['name']; ?></p>
                            <p class="fs-16 fw-300 mb-5px text-black lh-22"><?= $contact['designation']; ?></p>
                            <p class="fs-16 fw-400 mb-5px">
                                <i class="fa-solid fa-phone text-base-color me-5px"></i>
                                <a href="tel:<?= $contact['phone']; ?>" class="text-black"> <?= $contact['phone']; ?></a>
                            </p>
                            <p class="fs-16 fw-400 mb-5px">
                                <i class="fa-solid fa-envelope text-base-color me-5px"></i>
                                <a href="mailto:<?= $contact['email']; ?>" class="text-black"> <?= $contact['email']; ?></a>
                            </p>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>