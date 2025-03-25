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


<!-- <section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start">
                <h2 class="text-dark-gray fw-700 fs-32 mb-5 text-center">Important Contacts </h2>
                <table id="example" class="mt-30px w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th style="width: 70px;"><strong>S.No</strong></th>
                            <th style="width: 390px;"><strong>Office</strong></th>
                            <th><strong>Contact Number</strong></th>
                            <th><strong>Contact Number</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($importantcontact as $contact): ?>
                            <tr>
                                <td><?= $contact['id']; ?></td>
                                <td><?= $contact['place']; ?></td>
                                <td>
                                    <i class="fa-solid fa-phone text-base-color me-5px"></i>
                                    <a href="tel:<?= $contact['phone']; ?>"><?= $contact['phone']; ?></a>
                                </td>
                                <td>
                                    <?php if ($contact['contact'] !== null): ?>
                                        <i class="fa-solid fa-phone text-base-color me-5px"></i>
                                        <a href="tel:<?= $contact['contact']; ?>"><?= $contact['contact']; ?></a>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section> -->