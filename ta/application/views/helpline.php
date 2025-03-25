<?php $this->load->view('widgets/page-title'); ?>


<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2"
            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <?php foreach ($helpline as $contact): ?>
                <div>
                    <div class="card overflow-hidden mb-30px box-shadow border-radius-20px">
                        <div class="card-body p-20px h-350px">
                            <img src="<?= cdn_url(); ?>assets/images/icons/<?= $contact['icons']; ?>"
                                class="card-img-top w-80px mb-20px">
                            <h5 class="card-title fs-18 text-base-color fw-700 mb-20px"><?= $contact['helpline']; ?>
                            </h5>
                            <p class="fs-18 text-black mb-10px">
                                <i class="fa-solid fa-location-dot text-base-color  me-5px"></i>
                                <?= $contact['address']; ?>
                            </p>
                            <div class="card-footer bg-white border-0 p-0 border-top">
                                <a href="tel:<?= $contact['phone']; ?>"><i
                                        class="fa-solid fa-phone text-base-color  me-5px"></i>
                                    <small class="text-muted">Phone : +044 <?= $contact['phone']; ?></a></small>
                            </div>
                            <div class="card-footer bg-white border-0 p-0">
                                <small class="text-muted">Area : <?= $contact['area']; ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>