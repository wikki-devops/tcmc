<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row">
            <div class="col tab-style-01">
                <ul class="nav nav-tabs justify-content-center border-0 text-center fs-18 alt-font fw-600 mb-30px">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#stand">
                            Bus Stands</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#shelters"> Bus Shelters</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active show" id="stand">
                        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mt-20px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <?php foreach ($busstand as $bus): ?>
                                <?php if ($bus['filter'] === 'bus-stand'): ?>
                                    <div class="col mb-30px">
                                        <div class="box-shadow-quadruple-large box-shadow-quadruple-large-hover services-box-style-03 last-paragraph-no-margin border-radius-4px overflow-hidden">
                                            <div class="position-relative">
                                                <img src="<?= $bus['image']; ?>" alt="">
                                            </div>
                                            <div class="bg-white">
                                                <div class="ps-50px pe-50px pt-20px pb-30px xl-ps-20px xl-pe-20px text-center progress-bar-style-01">
                                                    <p class="d-inline-block fs-20 fw-600 text-dark-gray text-dark-gray-hover mb-5px ls-minus-05px"><?= $bus['name']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade in show" id="shelters">
                        <table id="example" class="w-100 border-radius-20px overflow-hidden">
                            <thead>
                                <th>S.No</th>
                                <th>Bus Shelters</th>
                            </thead>
                            <?php $counter = 1;
                            ?>
                            <?php foreach ($busstand as $bus): ?>
                                <?php if ($bus['filter'] === 'bus-shelters'): ?>
                                    <tr>
                                        <td><?= $counter++;
                                            ?></td>
                                        <td><?= $bus['name']; ?></td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>