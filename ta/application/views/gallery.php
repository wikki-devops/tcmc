<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-40px pb-40px"
    style="background-image: url(<?= cdn_url(); ?>assets/images/vector-bg.png);background-repeat: no-repeat;background-position: bottom left;background-size: 400px;">
    <div class="container">
        <div class="row">
            <div class="col sm-p-0">
                <div class="justified-gallery image-gallery-style-06"
                    data-justified-options='{ "rowHeight": 350, "maxRowHeight": false, "captions": false, "margins": 20, "waitThumbnailsLoad": true }'
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 500, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <?php for ($i = 1; $i <= 22; $i++): ?>
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
    </div>
</section>