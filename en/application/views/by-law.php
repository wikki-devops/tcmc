<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2"
            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <?php foreach ($by as $laws): ?>
                <div class="col">
                    <div class="card box-shadow border-radius-20px">
                        <div class="card-body">
                            <img src="<?= cdn_url(); ?>assets/images/icons/<?= $laws['icons']; ?>" class="card-img-top w-60px mb-20px">
                            <h5 class="card-title fs-20 fw-700 text-black mb-20px"><?= $laws['title']; ?></h5>
                            <p class="fs-20 text-base-color mb-10px">
                                <img src="<?= cdn_url(); ?>assets/images/icons/document.png" class="w-30px me-10px">
                                <a href="<?= base_url(); ?><?= $laws['pdf']; ?>" target="_blank" class="text-black">Download<img src="<?= cdn_url(); ?>assets/images/icons/arrow-up-right.png"
                                        class="text-base-color ms-10px"></a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>