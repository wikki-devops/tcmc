<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/about-bg.png);background-repeat: no-repeat;background-size: contain;background-position: right;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-start"
                data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h2 class="fs-20 fw-700 text-base-color mb-5px">About Tambaram</h2>
                <p class="fs-16 text-grey fw-400">
                    Tambaram Town is situated 24 K.M. south of the Capital City of Chennai. The famous Grand Southern Trunk Road and Railway route from Chennai Egmore to Kanyakumari divide the town into east and West. The Municipal Town, Tambaram is described as Gateway of the Beautiful Metropolitan City, Chennai.
                </p>
                <p class="fs-16 text-grey fw-400">
                    Tambaram is very popular because of the existence of world-renowned Madras Christian College, IAF training center, and the first commissioned suburban trains from Tambaram to Beach. Nowadays almost all trains to southern parts of Tamil Nadu start only from Tambaram. This Municipal Town is also proud of being home to a number of industrial units established at the Madras Export Processing Zone (MEPZ). The units in the MEPZ export various items to several foreign countries thereby earning foreign exchange for the country.
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                <div>
                    <img src="<?= cdn_url(); ?>assets/images/about-1.png" alt=""
                        class="border-radius-20px w-100">
                </div>
            </div>  
        </div>
    </div>
</section>


<section class="h-500px align-content-center cover-background background-position-center-bottom position-relative"
    style="background-image: url('<?= cdn_url(); ?>assets/images/galnce.jpg')" data-parallax-background-ratio="0.5">
    <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-12 col-lg-12 col-md-10 text-center">
                <div class="cd-headline slide">
                    <div class="fs-30 lg-fs-100 text-white fw-500 alt-font fancy-text-style-4"
                        data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-100, 0], "staggervalue": 300, "duration": 1000, "easing": "easeOutCubic" }'>
                        <span class="d-inline-block" data-bottom-top="transform: translateX(70px)"
                            data-top-bottom="transform: translateX(-70px)">Tambaram is one of the busiest towns in and around Chennai with extensive transport facilities. Tambaram Town is also well known for its reputed educational institutions.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-60px pb-60px">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                <div>
                <img src="<?= cdn_url(); ?>assets/images/map.jpg" alt=""
                        class="border-radius-6px w-100">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-start"
                data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <p class="fs-16 text-grey fw-400">
                    Prior to 1964, Tambaram was a small Panchayat. In 1964 it was constituted as Grade III Municipality comprising the Village Panchayats of Pulikoradu, Irumbliyur, Selaiyur. Due to rapid development and growth of the town commercially and residentially, the Municipality is now classified as a Special Grade Municipality. The population as per 2011 census is 1,64,830 besides a floating population of more than 1 lakh per day. The extent of the municipality is 20.72 sq.km.
                </p>
                <p class="fs-16 text-grey fw-400">
                    As Per G.O No 66 MA WS(Election) dt 11.9.2021  Tambaram  Municipalty becomes Tambaram City Municipal Corporation Comprising the 5 Municipalities Tambaram, Pallavapuram, Pammal, Anakaputhur & Sembakkam and 5 Town Panchayats Chitlapakkam, Madambakkam, Perungalathur, Peerkankaranai & Thiruneermalai the extent of the Tambaram City Municipal Corporation is 87.64 sq.km. The population as per 2011 census is 7,23,017
                </p>
            </div>
        </div>
    </div>
</section>

<!-- <section class="pt-60px pb-60px">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                <div class="w-100">
                    <img src="<?= cdn_url(); ?>assets/images/map.jpg" alt=""
                        class="border-radius-6px w-100">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-start"
                data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h2 class="fs-20 fw-700 text-base-color mb-5px">Highlights</h2>
                <ul class="p-0 list-style-01 fw-400 fs-16 mb-40px">
                    <li class="border-none pt-10px pb-10px text-gray d-flex align-items-start">
                        <span class="m-3">
                            <i class="fas fa-university text-base-color fs-4"></i>
                        </span>
                        <div>
                            <strong>Educational Excellence:</strong> Home to the world-renowned Madras Christian College
                            and several reputed institutions.
                        </div>
                    </li>
                    <li class="border-none pt-10px pb-10px text-gray d-flex align-items-start">
                        <span class="m-3">
                            <i class="fas fa-train text-base-color fs-4"></i>
                        </span>
                        <div>
                            <strong>Transport Connectivity:</strong> Suburban trains operate from Tambaram to Beach,
                            connecting southern Tamil Nadu.
                        </div>
                    </li>
                    <li class="border-none pt-10px pb-10px text-gray d-flex align-items-start">
                        <span class="m-3">
                            <i class="fas fa-industry text-base-color fs-4"></i>
                        </span>
                        <div>
                            <strong>Industrial Growth:</strong> The MEPZ hosts industrial units contributing to India’s
                            foreign exchange.
                        </div>
                    </li>
                    <li class="border-none pt-10px pb-10px text-gray d-flex align-items-start">
                        <span class="m-3">
                            <i class="fas fa-city text-base-color fs-4"></i>
                        </span>
                        <div>
                            <strong>Municipal Progress:</strong> Established in 1964, Tambaram has grown into a Special
                            Grade Municipality spanning 20.72 sq.km.
                        </div>
                    </li>
                    <li class="border-none pt-10px pb-10px text-gray d-flex align-items-start">
                        <span class="m-3">
                            <i class="fas fa-users text-base-color fs-4"></i>
                        </span>
                        <div>
                            <strong>Population Growth:</strong> With a 2011 census population of 1,64,830 and a daily
                            floating population of over 1 lakh, Tambaram thrives as a bustling town.
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="pt-40px pb-40px">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 sm-mb-35px"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <div class="col md-mb-30px">
                <div
                    class="box-shadow-quadruple-large box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden border-radius-20px">
                    <div class="position-relative">
                        <img src="<?= cdn_url(); ?>assets/images/about/1.png" alt="" />
                    </div>
                    <div class="bg-white">
                        <div
                            class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center progress-bar-style-01">
                            <p
                                class="d-inline-block fs-20 fw-700 text-base-color mb-5px text-dark-gray-hover mb-5px ls-minus-05px">
                                Industrial Hub </p>
                            <p class="fs-18 fw-400 text-gray">Tambaram is home to industries at the MEPZ that export
                                goods globally, boosting India’s economy through foreign exchange.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col md-mb-30px">
                <div
                    class="box-shadow-quadruple-large box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden border-radius-20px">
                    <div class="position-relative">
                        <img src="<?= cdn_url(); ?>assets/images/about/3.png" alt="" />
                    </div>
                    <div class="bg-white">
                        <div
                            class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center progress-bar-style-01">
                            <p
                                class="d-inline-block fs-20 fw-700 text-base-color mb-5px text-dark-gray-hover mb-5px ls-minus-05px">
                                Transport Connectivity </p>
                            <p class="fs-18 fw-400 text-gray">Known for extensive transport facilities, Tambaram
                                connects Chennai with southern Tamil Nadu via rail and road.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col md-mb-30px">
                <div
                    class="box-shadow-quadruple-large box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden border-radius-20px">
                    <div class="position-relative">
                        <img src="<?= cdn_url(); ?>assets/images/about/2.png" alt="" />
                    </div>
                    <div class="bg-white">
                        <div
                            class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center progress-bar-style-01">
                            <p
                                class="d-inline-block fs-20 fw-700 text-base-color mb-5px text-dark-gray-hover mb-5px ls-minus-05px">
                                Educational Excellence </p>
                            <p class="fs-18 fw-400 text-gray">With reputed institutions like Madras Christian College,
                                Tambaram is a leading center for education and training.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->