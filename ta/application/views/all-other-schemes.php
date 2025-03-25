<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2"
            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <?php foreach ($schemes as $scheme): ?>
                <div class="col mb-30px">
                    <div class="h-100 card mb-20px box-shadow border-radius-20px">
                        <div class="card-body">
                            <img src="https://dummyimage.com/500/fff/aaa" class="card-img-top mb-20px">
                            <h5 class="card-title fs-20 fw-700 text-base-color mb-10px">
                                <?= $scheme['scheme']; ?></h5>
                            <p class="fs-18 text-black mb-10px">
                                <?= $scheme['work']; ?>
                            </p>
                            <div class="card-footer bg-white border-0 p-0 border-top">
                                <small class="text-muted">Cost Rs. In lakhs : <?= $scheme['cost']; ?></small>
                            </div>
                            <div class="card-footer bg-white border-0 p-0 border-top">
                                <small class="text-muted">Year of completion : <?= $scheme['year_of_completion']; ?></small>
                            </div>
                            <div class="card-footer bg-white border-0 p-0 border-top">
                                <small class="text-muted">No. of Benefited people : <?= $scheme['benefited_people']; ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>