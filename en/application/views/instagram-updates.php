<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px bg-white position-relative overflow-hidden">
    <div class="container">
        <div class="row justify-content-center mb-30px">
            <div class="col-md-8 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font fs-40 fw-700 mb-10px text-dark-gray ls-minus-2px">Instagram Updates</h2>
            </div>
        </div>
        <div class="row specific-section row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center"
            data-anime='{"el": "childs", "translateY": [0, 0], "perspective": [1000,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <?php foreach ($news as $updates): ?>
                <div class="col interactive-banner-style-07">
                    <figure
                        class="mb-0 shadow border-radius-8px overflow-hidden box-shadow-quadruple-large-hover box-shadow-quadruple-large">
                        <img src="<?= cdn_url(); ?>assets/images/news/<?= $updates['image']; ?>" alt="" />
                        <figcaption>
                            <div
                                class="hover-content align-items-center d-flex flex-column justify-content-center h-100 p-50px text-center">
                                <div class="hover-show-content text-center">
                                    <a href="<?= $updates['instagram_url']; ?>" target="_blank"
                                        class="bg-gradient-pink-orange w-55px h-55px rounded-circle position-relative mx-auto d-block">
                                        <i
                                            class="fa-brands fa-instagram icon-extra-medium absolute-middle-center text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Daily updates -->


<section class="pt-60px pb-60px bg-white position-relative overflow-hidden">
    <div class="container">
        <div class="row justify-content-center mb-30px">
            <div class="col-md-8 text-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="alt-font fs-40 fw-700 mb-10px text-dark-gray ls-minus-2px">Instagram Updates</h2>
            </div>
        </div>
        <div class="row specific-section row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center"
            data-anime='{"el": "childs", "translateY": [0, 0], "perspective": [1000,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <?php foreach (array_slice($news, 0, 6) as $updates): ?>
                <div class="col interactive-banner-style-07">
                    <figure
                        class="mb-0 shadow border-radius-8px overflow-hidden box-shadow-quadruple-large-hover box-shadow-quadruple-large">
                        <img src="<?= cdn_url(); ?>assets/images/news/<?= $updates['image']; ?>" alt="" />
                        <figcaption>
                            <div
                                class="hover-content align-items-center d-flex flex-column justify-content-center h-100 p-50px text-center">
                                <div class="hover-show-content text-center">
                                    <a href="<?= $updates['instagram_url']; ?>" target="_blank"
                                        class="bg-gradient-pink-orange w-55px h-55px rounded-circle position-relative mx-auto d-block">
                                        <i
                                            class="fa-brands fa-instagram icon-extra-medium absolute-middle-center text-white"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col justify-content-center align-content-center mt-5 d-flex btn-dual">
            <a href="instagram_updates"
                class="btn btn-base-color btn-large btn-rounded d-table d-lg-inline-block lg-mb-15px md-mx-auto">More
                Updates</a>
        </div>
    </div>
</section>
<!-- Daily updates -->