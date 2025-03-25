<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px position-relative">
    <div class="container">
        <div class="row g-0 mb-5 sm-mb-30px">
            <div class="col event-style-03 bg-white box-shadow border border-radius-20px overflow-hidden">
                <ul
                    class="nav nav-tabs flex-wrap flex-md-nowrap fs-17 md-fs-15 fw-500 alt-font text-center bg-base-color border-color-white">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#year2022">2022</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#year2023">2023</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#year2024">2024</a></li>
                </ul>
                <div class="tab-content p-40px">
                    <div class="tab-pane fade in active show" id="year2022">
                        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 justify-content-center text-center"
                            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <?php foreach ($council as $resolution): ?>
                                <?php if ($resolution['year'] === '2022'): ?>
                                    <a href="<?= base_url();?><?= $resolution['link']; ?>" target="_blank"
                                        class="mb-20px">
                                        <div
                                            class="mb-10 h-100 bg-white border-radius-20px border box-shadow-quadruple-large border-color-extra-medium-gray ">
                                            <div class="trainer-box h-100 p-10px position-relative">
                                                <span
                                                    class="fs-12 lh-24 fw-600 text-white bg-base-color d-inline-block border-radius-26px position-absolute top-minus-13px z-index-1 right-15px ps-10px pe-10px">
                                                    <i class="fa-solid fa-cloud-arrow-down text-white"></i>
                                                </span>
                                                <div class="overflow-hidden">
                                                    <div class="image-wrapper">
                                                        <img src="<?= cdn_url(); ?>assets/images/icons/document.png"
                                                            class="w-60px">
                                                    </div>
                                                    <div class="bg-white position-relative p-10px">
                                                        <span
                                                            class="text-dark-gray fw-600 d-block"><?= $resolution['name']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="year2023">
                        <div
                            class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 justify-content-center text-center">
                            <?php foreach ($council as $resolution): ?>
                                <?php if ($resolution['year'] === '2023'): ?>
                                    <a href="assets/downloads/council-resolution/<?= $resolution['link']; ?>" target="_blank"
                                        class="mb-20px">
                                        <div
                                            class="mb-10 h-100 bg-white border-radius-20px border box-shadow-quadruple-large border-color-extra-medium-gray ">
                                            <div class="trainer-box h-100 p-10px position-relative">
                                                <span
                                                    class="fs-12 lh-24 fw-600 text-white bg-base-color d-inline-block border-radius-26px position-absolute top-minus-13px z-index-1 right-15px ps-10px pe-10px">
                                                    <i class="fa-solid fa-cloud-arrow-down text-white"></i>
                                                </span>
                                                <div class="overflow-hidden">
                                                    <div class="image-wrapper">
                                                        <img src="<?= cdn_url(); ?>assets/images/icons/document.png"
                                                            class="w-60px">
                                                    </div>
                                                    <div class="bg-white position-relative p-10px">
                                                        <span
                                                            class="text-dark-gray fw-600 d-block"><?= $resolution['name']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="year2024">
                        <div
                            class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 justify-content-center text-center">
                            <?php foreach ($council as $resolution): ?>
                                <?php if ($resolution['year'] === '2024'): ?>
                                    <a href="assets/downloads/council-resolution/<?= $resolution['link']; ?>" target="_blank"
                                        class="mb-20px">
                                        <div
                                            class="mb-10 h-100 bg-white border-radius-20px border box-shadow-quadruple-large border-color-extra-medium-gray ">
                                            <div class="trainer-box h-100 p-10px position-relative">
                                                <span
                                                    class="fs-12 lh-24 fw-600 text-white bg-base-color d-inline-block border-radius-26px position-absolute top-minus-13px z-index-1 right-15px ps-10px pe-10px">
                                                    <i class="fa-solid fa-cloud-arrow-down text-white"></i>
                                                </span>
                                                <div class="overflow-hidden">
                                                    <div class="image-wrapper">
                                                        <img src="<?= cdn_url(); ?>assets/images/icons/document.png"
                                                            class="w-60px">
                                                    </div>
                                                    <div class="bg-white position-relative p-10px">
                                                        <span
                                                            class="text-dark-gray fw-600 d-block"><?= $resolution['name']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>