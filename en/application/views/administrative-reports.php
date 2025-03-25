<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 justify-content-center text-center"
            data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <?php foreach ($administrative as $report): ?>
                <div class="col icon-with-text-style-01">
                    <div
                        class="feature-box feature-box-left-icon last-paragraph-no-margin border bg-white border-radius-20px p-20px box-shadow-double-large-hover box-button">
                        <div class="feature-box-icon me-5px">
                            <img src="<?= cdn_url(); ?>assets/images/icons/briefcase.png" class="w-60px me-10px mb-20px" />
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-black fw-500 fs-17 mb-5px">Updated on : <span
                                    class="text-base-color"><?= $report['updated_on']; ?></span></span>
                            <span class="d-inline-block alt-font text-black fw-500 fs-17 mb-5px">Published on : <span
                                    class="text-base-color"><?= $report['published_on']; ?></span></span>
                            <a href="<?= $report['administrative_report_document']; ?>" target="_blank"
                                class="btn btn-small btn-rounded with-rounded m-auto border">Download<span
                                    class="bg-base-color text-white"><i class="fa-solid fa-download"></i></span></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>