<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
            <?php foreach ($commissioner as $new): ?>
                <?php if ($new['designation'] === 'Mayor' || $new['designation'] === 'Deputy Mayor' || $new['designation'] === 'Commissioner'): ?>
                    <div class="col text-center team-style-04 md-mb-50px">
                        <figure class="mb-0 position-relative">
                            <img src="<?= cdn_url(); ?>assets/images/people/<?= $new['image']; ?>" class="border-radius-10px"
                                alt="" />
                            <figcaption class="w-100 ps-30px pe-30px">
                                <div class="position-relative p-10px border-radius-10px bg-base-color">
                                    <div class="fs-19 fw-500 text-white lh-20"><?= $new['name']; ?></div>
                                    <span class="text-white opacity-7 d-inline-block fs-15"><?= $new['designation']; ?></span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="pt-60px pb-60px position-relative">
    <div class="container">
        <div class="row">
            <div class="col tab-style-01">
                <ul class="nav nav-tabs border-0 text-center fs-18 alt-font fw-600 mb-3 justify-content-center">
                    <li class="nav-item me-20px">
                        <a class="nav-link active" data-bs-toggle="tab" href="#tab_sec2">
                            Commisioners
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#tab_sec3">
                            Counsellors
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active show" id="tab_sec2">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <?php foreach ($commissioner as $new): ?>
                                <?php if ($new['designation'] === 'Deputy Commissioners' || $new['designation'] === 'Assistant Commissioners'): ?>
                                    <div class="col mb-40px">
                                        <div class="h-100 p-20px border-radius-20px box-shadow text-center"
                                            style="background: linear-gradient(360deg, #FFDFC5 0%, #FFF 61.51%);">
                                            <img src="<?= isset($new['image']) && !empty($new['image']) ? '<?= cdn_url(); ?>assets/images/people/' . $new['image'] : 'https://dummyimage.com/500x500/e2dad9/aaa'; ?>"
                                                class="mb-15px d-block mx-auto h-200px w-200px rounded-circle" alt="" />
                                            <p class="fw-700 fs-18 text-base-color text-capitalize mb-5px"><?= $new['name']; ?>
                                            </p>
                                            <p class="fw-400 fs-17 text-black text-capitalize mb-5px">
                                                <?= $new['designation']; ?></p>
                                            <p class="fs-16 fw-400 text-black mb-5px"><i
                                                    class="fa-solid fa-location-dot text-base-color me-5px"></i>
                                                <?= $new['address']; ?></p>
                                            <p class="fs-16 fw-400 text-black mb-5px"><i
                                                    class="fa-solid fa-phone text-base-color me-5px"></i><a
                                                    href="tel:+<?= $new['contact_no']; ?>"
                                                    class="text-black">+<?= $new['contact_no']; ?></a></p>
                                            <p class="fs-16 fw-400 text-black mb-5px"><?= $new['partyname']; ?></p>
                                            <p class="fs-16 fw-400 text-black mb-5px"><?= $new['ward_no']; ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade in" id="tab_sec3">
                        <div class="row">
                            <div class="col tab-style-01">
                                <ul
                                    class="nav nav-tabs justify-content-center border-0 text-center fs-18 alt-font fw-600 mb-3">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                            href="#zone_1">Zone 1</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_2">Zone
                                            2</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_3">Zone
                                            3</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_4">Zone
                                            4</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_5">Zone
                                            5</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active show" id="zone_1">
                                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                                            <?php foreach ($commissioner as $new): ?>
                                                <?php if ($new['zone'] === 'Zone 1'): ?>
                                                    <div class="col mb-40px">
                                                        <div class="h-100 p-20px border-radius-20px box-shadow text-center"
                                                            style="background: linear-gradient(360deg, #FFDFC5 0%, #FFF 61.51%);">
                                                            <img src="<?= isset($new['image']) && !empty($new['image']) ? '<?= cdn_url(); ?>assets/images/people/' . $new['image'] : 'https://dummyimage.com/500x500/e2dad9/aaa'; ?>"
                                                                class="mb-15px d-block mx-auto h-200px w-200px rounded-circle"
                                                                alt="" />
                                                            <div class="ps-20px pe-20px">
                                                                <p class="fw-700 fs-18 text-base-color text-capitalize mb-5px">
                                                                    <?= $new['name']; ?></p>
                                                                <p class="fw-400 fs-17 text-black text-capitalize mb-5px">
                                                                    <?= $new['designation']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px"><i
                                                                        class="fa-solid fa-location-dot text-base-color me-5px"></i>
                                                                    <?= $new['address']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px"><i
                                                                        class="fa-solid fa-phone text-base-color me-5px"></i><a
                                                                        href="tel:+<?= $new['contact_no']; ?>"
                                                                        class="text-black">+<?= $new['contact_no']; ?></a></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px">
                                                                    <?= $new['partyname']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px">Ward No:
                                                                    <?= $new['ward_no']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="zone_2">
                                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                                            <?php foreach ($commissioner as $new): ?>
                                                <?php if ($new['zone'] === 'Zone 2'): ?>
                                                    <div class="col mb-40px">
                                                        <div class="h-100 p-20px border-radius-20px box-shadow text-center"
                                                            style="background: linear-gradient(360deg, #FFDFC5 0%, #FFF 61.51%);">
                                                            <img src="<?= isset($new['image']) && !empty($new['image']) ? '<?= cdn_url(); ?>assets/images/people/' . $new['image'] : 'https://dummyimage.com/500x500/e2dad9/aaa'; ?>"
                                                                class="mb-15px d-block mx-auto h-200px w-200px rounded-circle"
                                                                alt="" />
                                                            <div class="ps-20px pe-20px">
                                                                <p class="fw-700 fs-18 text-base-color text-capitalize mb-5px">
                                                                    <?= $new['name']; ?></p>
                                                                <p class="fw-400 fs-17 text-black text-capitalize mb-5px">
                                                                    <?= $new['designation']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px"><i
                                                                        class="fa-solid fa-location-dot text-base-color me-5px"></i>
                                                                    <?= $new['address']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px"><i
                                                                        class="fa-solid fa-phone text-base-color me-5px"></i><a
                                                                        href="tel:+<?= $new['contact_no']; ?>"
                                                                        class="text-black">+<?= $new['contact_no']; ?></a></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px">
                                                                    <?= $new['partyname']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px">Ward No:
                                                                    <?= $new['ward_no']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="zone_3">
                                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                                            <?php foreach ($commissioner as $new): ?>
                                                <?php if ($new['zone'] === 'Zone 3'): ?>
                                                    <div class="col mb-40px">
                                                        <div class="h-100 p-20px border-radius-20px box-shadow text-center"
                                                            style="background: linear-gradient(360deg, #FFDFC5 0%, #FFF 61.51%);">
                                                            <img src="<?= isset($new['image']) && !empty($new['image']) ? '<?= cdn_url(); ?>assets/images/people/' . $new['image'] : 'https://dummyimage.com/500x500/e2dad9/aaa'; ?>"
                                                                class="mb-15px d-block mx-auto h-200px w-200px rounded-circle"
                                                                alt="" />
                                                            <div class="ps-20px pe-20px">
                                                                <p class="fw-700 fs-18 text-base-color text-capitalize mb-5px">
                                                                    <?= $new['name']; ?></p>
                                                                <p class="fw-400 fs-17 text-black text-capitalize mb-5px">
                                                                    <?= $new['designation']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px"><i
                                                                        class="fa-solid fa-location-dot text-base-color me-5px"></i>
                                                                    <?= $new['address']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px"><i
                                                                        class="fa-solid fa-phone text-base-color me-5px"></i><a
                                                                        href="tel:+<?= $new['contact_no']; ?>"
                                                                        class="text-black">+<?= $new['contact_no']; ?></a></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px">
                                                                    <?= $new['partyname']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px">Ward No:
                                                                    <?= $new['ward_no']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="zone_4">
                                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                                            <?php foreach ($commissioner as $new): ?>
                                                <?php if ($new['zone'] === 'Zone 4'): ?>
                                                    <div class="col mb-40px">
                                                        <div class="h-100 p-20px border-radius-20px box-shadow text-center"
                                                            style="background: linear-gradient(360deg, #FFDFC5 0%, #FFF 61.51%);">
                                                            <img src="<?= isset($new['image']) && !empty($new['image']) ? '<?= cdn_url(); ?>assets/images/people/' . $new['image'] : 'https://dummyimage.com/500x500/e2dad9/aaa'; ?>"
                                                                class="mb-15px d-block mx-auto h-200px w-200px rounded-circle"
                                                                alt="" />
                                                            <div class="ps-20px pe-20px">
                                                                <p class="fw-700 fs-18 text-base-color text-capitalize mb-5px">
                                                                    <?= $new['name']; ?></p>
                                                                <p class="fw-400 fs-17 text-black text-capitalize mb-5px">
                                                                    <?= $new['designation']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px"><i
                                                                        class="fa-solid fa-location-dot text-base-color me-5px"></i>
                                                                    <?= $new['address']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px"><i
                                                                        class="fa-solid fa-phone text-base-color me-5px"></i><a
                                                                        href="tel:+<?= $new['contact_no']; ?>"
                                                                        class="text-black">+<?= $new['contact_no']; ?></a></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px">
                                                                    <?= $new['partyname']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px">Ward No:
                                                                    <?= $new['ward_no']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="zone_5">
                                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                                            <?php foreach ($commissioner as $new): ?>
                                                <?php if ($new['zone'] === 'Zone 5'): ?>
                                                    <div class="col mb-40px">
                                                        <div class="h-100 p-20px border-radius-20px box-shadow text-center"
                                                            style="background: linear-gradient(360deg, #FFDFC5 0%, #FFF 61.51%);">
                                                            <img src="<?= isset($new['image']) && !empty($new['image']) ? '<?= cdn_url(); ?>assets/images/people/' . $new['image'] : 'https://dummyimage.com/500x500/e2dad9/aaa'; ?>"
                                                                class="mb-15px d-block mx-auto h-200px w-200px rounded-circle"
                                                                alt="" />
                                                            <div class="ps-20px pe-20px">
                                                                <p class="fw-700 fs-18 text-base-color text-capitalize mb-5px">
                                                                    <?= $new['name']; ?></p>
                                                                <p class="fw-400 fs-17 text-black text-capitalize mb-5px">
                                                                    <?= $new['designation']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px"><i
                                                                        class="fa-solid fa-location-dot text-base-color me-5px"></i>
                                                                    <?= $new['address']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px"><i
                                                                        class="fa-solid fa-phone text-base-color me-5px"></i><a
                                                                        href="tel:+<?= $new['contact_no']; ?>"
                                                                        class="text-black">+<?= $new['contact_no']; ?></a></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px">
                                                                    <?= $new['partyname']; ?></p>
                                                                <p class="fs-16 fw-400 text-black mb-5px">Ward No:
                                                                    <?= $new['ward_no']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>