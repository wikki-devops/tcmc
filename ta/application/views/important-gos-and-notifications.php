<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-40px pb-40px" style="background-color: #f5f5f7">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2"
            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <?php foreach ($gos as $go): ?>
                <div class="col mb-20px">
                    <div class="card h-100 box-shadow border-radius-20px">
                        <div class="card-body">
                            <img src="<?= cdn_url(); ?>assets/images/logo/logo.png" class="card-img-top w-60px mb-20px">
                            <p class="fs-16 text-base-color mb-10px">
                                <img src="<?= cdn_url(); ?>assets/images/icons/document.png" class="w-30px me-10px">
                                <a href="<?= base_url();?><?= $go['link']; ?>" target="_blank"
                                    class="text-black"><?= $go['details']; ?><img
                                        src="<?= cdn_url(); ?>assets/images/icons/arrow-up-right.png"
                                        class="text-base-color ms-10px"></a>
                            </p>
                            <div class="card-footer bg-white border-0 p-0 border-top">
                                <small class="text-muted">Date : <?= $go['date']; ?></small>
                            </div>
                            <div class="card-footer bg-white border-0 p-0 border-top">
                                <small class="text-muted">Size : <?= $go['size']; ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>