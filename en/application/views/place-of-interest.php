<?php $this->load->view('widgets/page-title'); ?>


<!-- <div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div id="distanceMap" style="height: 400px;"></div>
        </div>

        <div class="col-md-6">
            <h4>Find Distance from Tambaram</h4>
            <input type="text" id="distanceSearchInput" class="form-control" placeholder="Enter a location">
            <button class="btn btn-primary mt-2" onclick="calculateDistance()">Find Distance</button>
            <p class="mt-3"><strong>Distance:</strong> <span id="distanceResult">-</span></p>
        </div>
    </div>
</div> -->



<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-3 row-cols-md-3 row-cols-sm-2 justify-content-center"
            data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <?php foreach ($places as $place): ?>
                <a href="#<?= $place['scroll']; ?>">
                    <div class="col interactive-banner-style-05 lg-mb-30px mb-30px position-relative z-index-1">
                        <div class="atropos" data-atropos data-atropos-perspective="1450">
                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">
                                        <figure class="m-0 hover-box border-radius-8px overflow-hidden position-relative"
                                            data-atropos-offset="3">
                                            <div class="image-container position-relative">
                                                <img class="w-100" src="<?= base_url();?>../assets/images/place-of-interest/<?= $place['image']; ?>" alt="">
                                                <div class="overlay"></div>
                                            </div>
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-end position-absolute left-0px top-0px w-100 h-100 z-index-1 ps-20px">
                                                <span class="text-white fw-400 fs-16"><?= $place['distance']; ?></span>
                                                <p class="text-white fs-24 fw-700"><?= $place['place']; ?></p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php foreach ($places as $place): ?>
    <section id="<?= $place['scroll']; ?>" class="pt-60px pb-60px">
        <div class="container"
            data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12 m-auto">
                    <h5 class="text-base-color fs-24 fw-700 text-center"><?= $place['place']; ?></h5>
                    <p class="text-dark-gray fs-18"><?= $place['brief']; ?></p>
                    <div class="divider-style-01 mt-20px mb-20px">
                        <div class="row">
                            <div class="col-md-3 text-center d-flex align-item-center justify-content-center">
                                <div class="d-flex align-items-center w-100">
                                    <p class="fs-20 fw-700 mb-0 text-base-color">Tambaram</p>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center divider-style-01">
                                <div class="divider-border d-flex align-items-center w-100">
                                    <span
                                        class="d-flex flex-column justify-content-center w-90px h-90px box-shadow-extra-large rounded-circle">
                                        <i class="fa fa-car-side icon-medium text-dark-gray"></i>
                                        <span class="text-balck fw-400 fs-16"><?= $place['distance']; ?></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex align-item-center" style="text-align: end;">
                                <div class="d-flex align-items-center w-100">
                                    <p class="fs-20 fw-700 mb-0 text-end text-base-color w-100"><?= $place['place']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>