<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 justify-content-center"
            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <?php foreach ($knowledgecenter as $center): ?>
                <div class="col">
                    <div class="h-100 box-shadow-quadruple-large box-shadow-quadruple-large-hover services-box-style-03 border-radius-20px overflow-hidden">
                        <div class="position-relative">
                            <img src="<?= base_url();?>../<?= $center['image']; ?>" alt="">
                        </div>
                        <div class="p-20px">
                            <p class="fs-20 fw-500 mb-10px text-base-color"><?= $center['name']; ?></p>
                            <p class="fs-16 fw-400 text-black mb-5px"><strong>Utilities : </strong><?= $center['utilities'];?></p>
                            <p class="fs-16 fw-400 text-black mb-5px"><strong>Amenities : </strong><?= $center['amenities'];?></p>
                            <p class="fs-16 fw-400 text-black mb-5px"><strong>Location : </strong><?= $center['location'];?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>