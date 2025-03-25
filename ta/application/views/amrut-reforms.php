<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row g-0 mb-5 sm-mb-30px">
            <div
                class="col event-style-03 bg-white box-shadow-quadruple-large border-radius-20px border overflow-hidden">
                <ul
                    class="nav nav-tabs flex-wrap flex-md-nowrap fs-17 md-fs-15 fw-500 alt-font text-center bg-base-color border-color-white">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#reform-1">சீர்திருத்தம்
                            - I</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#reform-2">சீர்திருத்தம் -
                            II</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#reform-4">சீர்திருத்தம் -
                            IV</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#reform-5">சீர்திருத்தம் - V</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#reform-6">சீர்திருத்தம் -
                            VI</a></li>
                </ul>
                <div class="tab-content p-40px">
                    <div class="tab-pane fade in active show" id="reform-1">
                        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 justify-content-center text-center"
                            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <?php foreach ($amrut as $downloads): ?>
                                <?php if ($downloads['reforms'] === 'REFORM -I'): ?>
                                    <?php if (!empty($downloads['link'])): ?>
                                        <a href="<?= $downloads['link']; ?>" target="_blank" class="mb-20px">
                                        <?php else: ?>
                                            <div class="mb-20px">
                                            <?php endif; ?>
                                            <div
                                                class="trainer-box h-100 p-10px bg-white border-radius-20px border box-shadow-quadruple-large border-color-extra-medium-gray position-relative">
                                                <span
                                                    class="fs-12 lh-24 fw-600 text-white bg-base-color d-inline-block border-radius-26px position-absolute top-minus-13px z-index-1 right-15px ps-10px pe-10px">
                                                    <i class="fa-solid fa-cloud-arrow-down text-white"></i>
                                                </span>
                                                <div class="overflow-hidden">
                                                    <img src="<?= cdn_url(); ?>assets/images/icons/document.png" class="w-60px">
                                                    <div class="bg-white position-relative p-10px">
                                                        <span
                                                            class="text-dark-gray fw-600 d-block"><?= $downloads['name']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if (!empty($downloads['link'])): ?>
                                        </a>
                                    <?php else: ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                </div>
                <div class="tab-pane fade in" id="reform-2">
                    <div
                        class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 justify-content-center text-center">
                        <?php foreach ($amrut as $downloads): ?>
                            <?php if ($downloads['reforms'] === 'REFORM -II'): ?>
                                <?php if (!empty($downloads['link'])): ?>
                                    <a href="<?= $downloads['link']; ?>" target="_blank" class="mb-20px">
                                    <?php else: ?>
                                        <div class="mb-20px">
                                        <?php endif; ?>
                                        <div
                                            class="trainer-box h-100 p-10px bg-white border-radius-20px border box-shadow-quadruple-large border-color-extra-medium-gray position-relative">
                                            <span
                                                class="fs-12 lh-24 fw-600 text-white bg-base-color d-inline-block border-radius-26px position-absolute top-minus-13px z-index-1 right-15px ps-10px pe-10px">
                                                <i class="fa-solid fa-cloud-arrow-down text-white"></i>
                                            </span>
                                            <div class="overflow-hidden">
                                                <img src="<?= cdn_url(); ?>assets/images/icons/document.png" class="w-60px">
                                                <div class="bg-white position-relative p-10px">
                                                    <span
                                                        class="text-dark-gray fw-600 d-block"><?= $downloads['name']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if (!empty($downloads['link'])): ?>
                                    </a>
                                <?php else: ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="tab-pane fade in" id="reform-4">
                <div
                    class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 justify-content-center text-center">
                    <?php foreach ($amrut as $downloads): ?>
                        <?php if ($downloads['reforms'] === 'REFORM -IV'): ?>
                            <?php if (!empty($downloads['link'])): ?>
                                <a href="<?= $downloads['link']; ?>" target="_blank" class="mb-20px">
                                <?php else: ?>
                                    <div class="mb-20px">
                                    <?php endif; ?>
                                    <div
                                        class="trainer-box h-100 p-10px bg-white border-radius-20px border box-shadow-quadruple-large border-color-extra-medium-gray position-relative">
                                        <span
                                            class="fs-12 lh-24 fw-600 text-white bg-base-color d-inline-block border-radius-26px position-absolute top-minus-13px z-index-1 right-15px ps-10px pe-10px">
                                            <i class="fa-solid fa-cloud-arrow-down text-white"></i>
                                        </span>
                                        <div class="overflow-hidden">
                                            <img src="<?= cdn_url(); ?>assets/images/icons/document.png" class="w-60px">
                                            <div class="bg-white position-relative p-10px">
                                                <span class="text-dark-gray fw-600 d-block"><?= $downloads['name']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (!empty($downloads['link'])): ?>
                                </a>
                            <?php else: ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="tab-pane fade in" id="reform-5">
            <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 justify-content-center text-center">
                <?php foreach ($amrut as $downloads): ?>
                    <?php if ($downloads['reforms'] === 'REFORM -V'): ?>
                        <?php if (!empty($downloads['link'])): ?>
                            <a href="<?= $downloads['link']; ?>" target="_blank" class="mb-20px">
                            <?php else: ?>
                                <div class="mb-20px">
                                <?php endif; ?>
                                <div
                                    class="trainer-box h-100 p-10px bg-white border-radius-20px border box-shadow-quadruple-large border-color-extra-medium-gray position-relative">
                                    <span
                                        class="fs-12 lh-24 fw-600 text-white bg-base-color d-inline-block border-radius-26px position-absolute top-minus-13px z-index-1 right-15px ps-10px pe-10px">
                                        <i class="fa-solid fa-cloud-arrow-down text-white"></i>
                                    </span>
                                    <div class="overflow-hidden">
                                        <img src="<?= cdn_url(); ?>assets/images/icons/document.png" class="w-60px">
                                        <div class="bg-white position-relative p-10px">
                                            <span class="text-dark-gray fw-600 d-block"><?= $downloads['name']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php if (!empty($downloads['link'])): ?>
                            </a>
                        <?php else: ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="tab-pane fade in" id="reform-6">
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 justify-content-center text-center">
            <?php foreach ($amrut as $downloads): ?>
                <?php if ($downloads['reforms'] === 'REFORM -VI'): ?>
                    <?php if (!empty($downloads['link'])): ?>
                        <a href="<?= $downloads['link']; ?>" target="_blank" class="mb-20px">
                        <?php else: ?>
                            <div class="mb-20px">
                            <?php endif; ?>
                            <div
                                class="trainer-box h-100 p-10px bg-white border-radius-20px border box-shadow-quadruple-large border-color-extra-medium-gray position-relative">
                                <span
                                    class="fs-12 lh-24 fw-600 text-white bg-base-color d-inline-block border-radius-26px position-absolute top-minus-13px z-index-1 right-15px ps-10px pe-10px">
                                    <i class="fa-solid fa-cloud-arrow-down text-white"></i>
                                </span>
                                <div class="overflow-hidden">
                                    <img src="<?= cdn_url(); ?>assets/images/icons/document.png" class="w-60px">
                                    <div class="bg-white position-relative p-10px">
                                        <span class="text-dark-gray fw-600 d-block"><?= $downloads['name']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php if (!empty($downloads['link'])): ?>
                        </a>
                    <?php else: ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</section>