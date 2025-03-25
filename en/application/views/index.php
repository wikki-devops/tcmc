<section class="pt-100px pb-100px h-700px cover-background"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/banner.webp);">
</section>


<section class="pt-60px pb-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex">
                <div class="cover-background border-radius-20px border box-shadow h-650px"
                    style="background: linear-gradient(180deg, #FFF 0%, #D5C5B8 100%);">
                    <div class="container">
                        <div class="row mb-6 xs-mb-8">
                            <div class="col tab-style-02">
                                <ul class="nav nav-tabs fs-18 fw-700 justify-content-left text-center border-bottom">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab"
                                            href="#tab_first1">Notification</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab_first2">Recent
                                            Updates</a>
                                    </li>
                                </ul>
                                <div class="tab-content scrollable-content" style="min-height: 550px;">
                                    <div class="tab-pane fade in active show" id="tab_first1">
                                        <div class="row justify-content-left">
                                            <div class="col-lg-12 sm-mb-20px">
                                                <ul class="list-style-02 p-10px">
                                                    <?php foreach ($updates as $update): ?>
                                                        <?php if ($update['tags'] === '0'): ?>
                                                            <li
                                                                class="border-color-dark-very-light border-bottom pt-15px pb-15px pe-10px">
                                                                <i class="fa-solid fa-angles-right text-base-color me-10px"></i>
                                                                <a href="<?= $update['link']; ?>" target="_blank"
                                                                    class="lh-10 fs-16 fw-400"><?= $update['updates']; ?></a>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in" id="tab_first2">
                                        <div class="row justify-content-left">
                                            <div class="col-lg-12 sm-mb-20px">
                                                <ul class="list-style-02 p-10px">
                                                    <?php foreach ($updates as $update): ?>
                                                        <?php if ($update['tags'] === '1'): ?>
                                                            <li
                                                                class="border-color-dark-very-light border-bottom pt-15px pb-15px pe-10px">
                                                                <i class="fa-solid fa-angles-right text-base-color me-10px"></i>
                                                                <a href="<?= $update['link']; ?>" target="_blank"
                                                                    class="lh-10 fs-16 fw-400"><?= $update['updates']; ?></a>
                                                            </li>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="card flex-fill border-radius-20px box-shadow h-650px p-5px">
                    <img src="<?= cdn_url(); ?>assets/images/vot.png" class="card-img-top border-radius-top-left" />
                    <div class="card-body">
                        <h5 class="card-title fs-20 fw-700 text-base-color">Grievance Redressal</h5>
                        <div class="row">
                            <p class="mb-5px fs-16 fw-400">
                                <i class="fa-solid fa-globe text-base-color me-5px"></i>
                                <a href="https://voiceoftambaram.tcmcpublichealth.in/" target="_blank"
                                    class="card-text fs-16 fw-400"
                                    style="text-decoration-line: underline;color: var(--Blue-1, #2F80ED);">
                                    Voice of Tambaram</a>
                            </p>
                            <p class="mb-5px fs-16 fw-400">
                                <i class="fa-solid fa-phone text-base-color me-5px"></i>
                                <a href="https://wa.link/0o4uvg" target="_blank" class="text-black">
                                    +91 84383 53355</a>
                            </p>
                            <p class="fs-16 fw-400 mb-5px">
                                <i class="fa-solid fa-location-dot text-base-color me-2 d-inline"></i>
                                Complaint via Paper Form, Write to <br>No 28, The Corporation Commissioner,
                                Muthurenga Mudali Street, West Tambaram, Chennai – 600 045
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="swiper"
                    data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "pagination": { "el": ".slider-four-slide-pagination", "clickable": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next", "prevEl": ".slider-four-slide-prev" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 1 }, "1200": { "slidesPerView": 1 }, "992": { "slidesPerView": 1 }, "768": { "slidesPerView": 1 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper">
                        <?php foreach ($commissioner as $new): ?>
                            <?php if ($new['designation'] === 'Commissioner' || $new['designation'] === 'Mayor' || $new['designation'] === 'Deputy Mayor'): ?>
                                <div class="swiper-slide">
                                    <div class="card flex-fill border-radius-20px box-shadow h-650px p-5px">
                                        <img src="<?= cdn_url(); ?>assets/images/people/<?= $new['image']; ?>"
                                            class="card-img-top border-radius-top-left" />
                                        <div class="card-body">
                                            <h5 class="card-title fs-20 fw-700 text-base-color mb-5px"><?= $new['name']; ?></h5>
                                            <p class="fs-16 fw-700 mb-5px">
                                                <?= $new['designation']; ?>
                                            </p>
                                            <div class="row">
                                                <p class="fs-16 fw-400 mb-5px">
                                                    <i class="fa-solid fa-location-dot text-base-color me-5px"></i>
                                                    <?= $new['address']; ?>
                                                </p>
                                                <p class="fs-16 fw-400 mb-5px">
                                                    <i class="fa-solid fa-phone text-base-color me-5px"></i>
                                                    <a href="tel:<?= $new['contact_no']; ?>" class="text-black">
                                                        <?= $new['contact_no']; ?></a>
                                                </p>
                                                <p class="fs-16 fw-400 mb-5px">
                                                    <i class="fa-solid fa-envelope text-base-color me-5px"></i>
                                                    <a href="mailto:<?= $new['email_id']; ?>" class="text-black">
                                                        <?= $new['email_id']; ?></a>
                                                </p><br><br>
                                            </div>
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
</section>
<!-- About End -->

<section class="pt-60px pb-60px position-relative overflow-hidden bg-light">
    <div class="container">
        <div class="row justify-content-center mb-30px">
            <div class="col-md-8 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font fs-40 fw-700 mb-10px text-dark-gray ls-minus-2px">Pay your Tax</h2>
            </div>
        </div>
        <div class="row specific-section row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-1 justify-content-center transition-inner-all"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <?php foreach ($application as $tax): ?>
                <div class="col interactive-banner-style-02 hover-box dark-hover">
                    <div class="bg-white text-center position-relative border-radius-20px box-shadow-quadruple-large overflow-hidden"
                        style="border: 1px solid var(--Gray-5, #E0E0E0);">
                        <figure class="m-0 pb-20px">
                            <a href="<?= $tax['link']; ?>" target="_blank" class="position-relative d-block">
                                <img src="<?= cdn_url(); ?><?= $tax['image']; ?>" alt="" class="p-10px" />
                            </a>
                            <figcaption class="w-100 position-absolute bottom-0px bg-base-color"
                                style="border-radius: 99% 99% 0% 0%;">
                                <div
                                    class="position-relative z-index-2 p-15px border-bottom border-dark-opacity d-flex flex-column align-items-center">
                                    <img src="<?= cdn_url(); ?>assets/images/icons/<?= $tax['icons']; ?>"
                                        class="w-40px features-icon d-block" />
                                    <a href="<?= $tax['link']; ?>" target="_blank"
                                        class="fs-20 fw-700 d-inline-block mb-5px text-white"><?= $tax['tax_name']; ?></a>
                                </div>
                                <div class="box-overlay bg-base-color"></div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="pt-60px pb-60px position-relative overflow-hidden cover-background"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/quick-link-bg.png);">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xxl-7 col-lg-7">
                <span class="ps-25px pe-25px mb-20px text-uppercase fs-13 lh-38 fw-600 border-radius-100px bg-solitude-blue d-inline-block"><span class="text-base-color">Bharat Bill Payment System</span></span>
                <h3 class="text-dark-gray fw-600 ls-minus-2px mb-40px">How to Pay?</h3>
                <div class="row row-cols-1 row-cols-xl-2 row-cols-xl-2 row-cols-md-2 row-cols-sm-2">
                    <div class="col-12 process-step-style-05 position-relative hover-box mb-30px ">
                        <div class="process-step-item d-flex">
                            <div class="process-step-icon-wrap position-relative">
                                <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-base-color fw-600 position-relative">
                                    <span class="number position-relative z-index-1 text-white">01</span>
                                </div>
                                <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                            </div>
                            <div class="process-content ps-30px align-items-center d-flex">
                                <span class="d-block fw-600 text-dark-gray mb-5px fs-18">Login to – PhonePe/Google Pay <br><br><br></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 process-step-style-05 position-relative hover-box mb-30px ">
                        <div class="process-step-item d-flex">
                            <div class="process-step-icon-wrap position-relative">
                                <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-base-color fw-600 position-relative">
                                    <span class="number position-relative z-index-1 text-white">03</span>
                                </div>
                                <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                            </div>
                            <div class="process-content ps-30px align-items-center d-flex">
                                <span class="d-block fw-600 text-dark-gray mb-5px fs-18">Choose <strong>Municipal Tax/Service</strong> and select <strong>Tamilnadu Urban eSevai Municipal Taxes.</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 process-step-style-05 position-relative hover-box mb-30px ">
                        <div class="process-step-item d-flex">
                            <div class="process-step-icon-wrap position-relative">
                                <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-base-color fw-600 position-relative">
                                    <span class="number position-relative z-index-1 text-white">02</span>
                                </div>
                            </div>
                            <div class="process-content ps-30px align-items-center d-flex">
                                <span class="d-block fw-600 text-dark-gray mb-5px fs-18">Navigate to <strong>Recharge & Pay Bills</strong> and select <strong>View All Categories.</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 process-step-style-05 position-relative hover-box mb-30px ">
                        <div class="process-step-item d-flex">
                            <div class="process-step-icon-wrap position-relative">
                                <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-16 bg-base-color fw-600 position-relative">
                                    <span class="number position-relative z-index-1 text-white">04</span>
                                </div>
                            </div>
                            <div class="process-content ps-30px align-items-center d-flex">
                                <span class="d-block fw-600 text-dark-gray mb-5px fs-18">Select Property Tax and enter your Unique No. ID or UID number, verify your details and proceed to Pay.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <div class="fit-videos overflow-hidden">
                    <video loop controls class="h-600px">
                        <source src="../assets/videos/video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pay your Tax -->



<section class="pt-60px pb-60px position-relative cover-background" data-parallax-background-ratio="0.5"
    style="background-image: url(<?= cdn_url(); ?>assets/images/glance-bg.png);">
    <div class="container">
        <div class="card border-none" style="background: none">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="logo mb-20px">
                        <img src="<?= cdn_url(); ?>assets/images/logo/logo.png" alt="" style="width: 80px;">
                    </div>
                    <h3 class="mb-10px text-white fs-40 fw-700">TAMBARAM CORPORATION</h3>
                    <h3 class="mb-10px text-white fs-40 fw-300">at a glance</h3>
                </div>
                <div class="col-md-8">
                    <div
                        class="row row-cols-1 row-cols-xl-3 row-cols-xl-3 row-cols-md-3 row-cols-sm-2 icon-with-style-2 g-0">
                        <?php foreach ($areaglance as $areaglance): ?>
                            <a href="<?= $areaglance['slug']; ?>">
                                <div class="col transition-inner-all">
                                    <div class="feature-box">
                                        <div class="d-flex align-items-center w-100 p-15px mb-30px">
                                            <div class="feature-box-icon me-5px bg-white p-10px border-radius-20px">
                                                <img src="<?= cdn_url(); ?><?= $areaglance['icon']; ?>" class="w-80px h-80px p-5px" />
                                            </div>
                                            <div class="feature-box-content ms-10px text-start">
                                                <span
                                                    class="d-inline-block alt-font text-white fs-20 fw-700 mb-5px"><?= $areaglance['title']; ?></span>
                                                <p class="mb-0 fs-18 fw-500 text-white"><?= $areaglance['content']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- at Glance -->

<section class="pt-60px pb-60px">
    <div class="container">
        <div class="card zone-card border border-radius-20px overflow-hidden cover-background"
            style="background-image: url(<?= cdn_url(); ?>assets/images/bg/zone-bg.png);">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="<?= cdn_url(); ?>assets/images/zone-bg.png"
                        class="h-100 img-fluid rounded-start border-radius-left-20px">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="card-body p-30px pt-50px pb-50px">
                        <h5 class="fs-20 fw-700 mt-5px mb-5px text-base-color">Zone Updates</h5>
                        <div class="zone-select d-flex align-center-item">
                            <label for="zoneSelect" class="align-content-center fs-16 fw-400 form-label w-100">Select
                                your Zone</label>
                            <select id="zoneSelect"
                                class="form-select border-radius-20px fs-16 fw-400 ps-15px pe-15px p-0">
                                <option value="" selected>Select Zone</option>
                                <option value="Zone 1">Zone 1</option>
                                <option value="Zone 2">Zone 2</option>
                                <option value="Zone 3">Zone 3</option>
                                <option value="Zone 4">Zone 4</option>
                                <option value="Zone 5">Zone 5</option>
                            </select>
                        </div>
                        <div class="row pt-20px pb-20px row-cols-1 row-cols-lg-3 row-cols-sm-2">
                            <div class="col icon-with-text-style-03">
                                <a href="#" id="link1" onclick="checkZoneSelection(event, 'link1')" target="_blank">
                                    <div class="feature-box">
                                        <div class="feature-box-icon">
                                            <img src="<?= cdn_url(); ?>assets/images/icons/1.png"
                                                class="w-80px p-10px" />
                                        </div>
                                        <div class="feature-box-content">
                                            <span
                                                class="d-inline-block fw-500 text-dark-gray mb-5px fs-16">Corporation<br>
                                                Ward Map</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col icon-with-text-style-03">
                                <a href="#" id="link2" onclick="checkZoneSelection(event, 'link2')" target="_blank">
                                    <div class="feature-box">
                                        <div class="feature-box-icon">
                                            <img src="<?= cdn_url(); ?>assets/images/icons/2.png"
                                                class="w-80px p-10px" />
                                        </div>
                                        <div class="feature-box-content">
                                            <span class="d-inline-block fw-500 text-dark-gray mb-5px fs-16">Water
                                                Supply Distribution</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col icon-with-text-style-03">
                                <a href="#" id="link3" onclick="checkZoneSelection(event, 'link3')" target="_blank">
                                    <div class="feature-box">
                                        <div class="feature-box-icon">
                                            <img src="<?= cdn_url(); ?>assets/images/icons/3.png"
                                                class="w-80px p-10px" />
                                        </div>
                                        <div class="feature-box-content">
                                            <span class="d-inline-block fw-500 text-dark-gray mb-5px fs-16">Bulk
                                                Wastes Management</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <button onclick="findZone()" id="findZoneButton"
                                class="btn btn-base-color btn-large btn-rounded">Know Your
                                Zone</button>
                            <a href="javascript:void(0)" onclick="highlightButton()" class="">
                                <i class="fa-solid fa-arrow-left-long me-5px"></i>Click here to know your zone
                            </a>
                            <div id="mapModal" class="container w-700px bg-white sm-w-100 box-shadow p-30px"
                                style="height: 85%;display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1000;">
                                <div
                                    class="w-100px h-100px p-15px position-relative bottom-70px box-shadow border border-radius-100 bg-white">
                                    <img src="<?= cdn_url(); ?>assets/images/success.png" class="w-70px h-70px" alt="">
                                </div>
                                <div class="bottom-70px position-relative">
                                    <button onclick="closeMap()"
                                        class="d-flex w-100 justify-content-end bg-white border-0">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                    <p class="fs-18 fw-700 mb-5px text-base-color">Know your zone</p>
                                    <p class="mb-5px fs-16 fw-400 text-black">Locate your area on the map to know your
                                        zone</p>

                                    <input type="text" id="addressInput" placeholder="Enter your address"
                                        onfocus="initAutocomplete()" class="border-radius-10px" />

                                    <div id="map" class="w-100 mt-20px border-radius-20px h-300px overflow-hidden"></div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 d-flex p-0 mt-20px align-content-center">
                                                <p class="mb-10px fs-20"><i class="fa-solid fa-circle-check me-10px"
                                                        style="color: green;"></i>Zone details fetched successfully!</p>
                                            </div>
                                            <div
                                                class="col p-10px border-radius-20px bg-light-red mb-20px align-content-center">
                                                <!-- <p class="mb-10px fs-22">Your Pincode: <span class="fw-600" id="streetDisplay"></span></p> -->
                                                <p class="mb-10px fs-22">Your Pincode: <span class="fw-600"
                                                        id="pincodeDisplay"></span></p>
                                                <p class="mb-10px fs-22">Your Zone: <span class="fw-600"
                                                        id="zoneDisplay"></span></p>
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
    </div>
</section>
<!-- Zone Updates -->



<section class="pt-60px pb-60px position-relative overflow-hidden cover-background"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/quick-link-bg.png);">
    <div class="container">
        <div class="row justify-content-center mb-30px">
            <div class="col-md-8 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font fs-40 fw-700 mb-10px text-dark-gray ls-minus-2px">Quick Links</h2>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">
            <div class="col icon-with-text-style-03">
                <div
                    class="bg-white h-350px shadow border-radius-20px feature-box p-8 text-start overflow-hidden justify-content-start">
                    <div class="feature-box-icon mb-15px">
                        <img src="<?= cdn_url(); ?>assets/images/icons/13.png" class="w-70px" alt="">
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block tabs fs-20 fw-700 text-base-color mb-10px">ePay</span>
                        <p class="fs-16 fw-400 text-black mb-5px">
                            The website provides online tax services for municipalities and corporations across Tamil
                            Nadu (excluding Chennai).
                        </p>
                        <a href="https://tnurbanepay.tn.gov.in/" target="_blank"
                            class="btn btn-small btn-rounded btn-transparent-dark-gray border d-table d-lg-inline-block lg-mb-15px md-mx-auto mt-20px">Pay
                            Now</a>

                    </div>
                </div>
            </div>
            <div class="col icon-with-text-style-03">
                <div
                    class="bg-white h-350px shadow border-radius-20px feature-box p-8 text-start overflow-hidden justify-content-start">
                    <div class="feature-box-icon mb-15px">
                        <img src="<?= cdn_url(); ?>assets/images/icons/14.png" class="w-70px" alt="">
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block tabs fs-20 fw-700 text-base-color mb-10px">Important Link</span>
                        <ul class="list-style-02 ps-0">
                            <?php foreach ($quick as $link): ?>
                                <?php if ($link['filter'] === 'quick-link'): ?>
                                    <li class="d-flex align-items-center">
                                        <img src="<?= cdn_url(); ?>assets/images/icons/arrow-right.png" class="me-10px" />
                                        <a href="<?= $link['slug']; ?>" class="fs-16 fw-400 text-black"
                                            target="<?= (str_contains($link['slug'], 'https://') || str_contains($link['slug'], 'assets/download')) ? '_blank' : '_self'; ?>">
                                            <?= $link['title']; ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col icon-with-text-style-03">
                <div
                    class="bg-white h-350px shadow border-radius-20px feature-box p-8 text-start overflow-hidden justify-content-start">
                    <div class="feature-box-icon mb-15px">
                        <img src="<?= cdn_url(); ?>assets/images/icons/15.png" class="w-70px" alt="">
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block tabs fs-20 fw-700 text-base-color mb-10px">Place of interest</span>
                        <ul class="list-style-02 ps-0">
                            <?php foreach ($quick as $link): ?>
                                <?php if ($link['filter'] === 'place-of-interest'): ?>
                                    <li class="d-flex align-items-center">
                                        <img src="<?= cdn_url(); ?>assets/images/icons/arrow-right.png" class="me-10px" />
                                        <a href="<?= $link['slug']; ?>" class="fs-16 fw-400 text-black"
                                            target="<?= (str_contains($link['slug'], 'https://') || str_contains($link['slug'], 'assets/download')) ? '_blank' : '_self'; ?>">
                                            <?= $link['title']; ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Qucik Links -->


<section class="pt-60px pb-60px"
    style="background-image: url(<?= cdn_url(); ?>assets/images/vector-bg.png);background-repeat: no-repeat;background-position: bottom left;background-size: 400px;">
    <div class="container">
        <div class="row justify-content-center mb-30px">
            <div class="col-md-8 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font fs-40 fw-700 mb-10px text-dark-gray ls-minus-2px">Gallery</h2>
            </div>
        </div>
        <div class="row">
            <div class="col sm-p-0">
                <div class="justified-gallery image-gallery-style-06"
                    data-justified-options='{ "rowHeight": 350, "maxRowHeight": false, "captions": false, "margins": 20, "waitThumbnailsLoad": true }'
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <div class="gallery-box transition-inner-all">
                            <a href="<?= cdn_url(); ?>assets/images/gallery/<?php echo $i; ?>.png"
                                data-group="lightbox-group-gallery-item-<?php echo $i; ?>" title="">
                                <div class="position-relative bg-dark-gray">
                                    <img src="<?= cdn_url(); ?>assets/images/gallery/<?php echo $i; ?>.png"
                                        alt="Gallery Image <?php echo $i; ?>" />
                                    <div
                                        class="d-flex align-items-center flex-column justify-content-end h-100 w-100 gallery-hover p-45px">
                                        <i
                                            class="icon feather icon-feather-plus-square icon-very-medium text-white absolute-middle-center"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="col justify-content-center align-content-center mt-5 d-flex btn-dual">
            <a href="gallery"
                class="btn btn-base-color btn-large btn-rounded d-table d-lg-inline-block lg-mb-15px md-mx-auto">More
                Gallery</a>
        </div>
    </div>
</section>