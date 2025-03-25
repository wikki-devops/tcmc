<?php $this->load->view('widgets/page-title'); ?>


<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row">
            <div class="col tab-style-01">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mb-5 md-mb-7">
                    <div class="col icon-with-text-style-10 md-mb-30px skrollable skrollable-between"
                        data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)"
                        style="transform: translateY(-0.133779px);">
                        <div
                            class="feature-box bg-white h-100 align-items-center box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                                <i class="fa-solid fa-people-group icon-extra-large text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">மொத்த மக்கள் தொகை:
                                    10,11,328</span>
                            </div>
                        </div>
                    </div>
                    <div class="col icon-with-text-style-10 md-mb-30px skrollable skrollable-between"
                        data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)"
                        style="transform: translateY(-0.133779px);">
                        <div
                            class="feature-box bg-white h-100 align-items-center box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                                <i class="fa-solid fa-people-group icon-extra-large text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">மொத்த எஸ்சி மக்கள் தொகை:
                                    1,51,482</span>
                            </div>
                        </div>
                    </div>
                    <div class="col icon-with-text-style-10 md-mb-30px skrollable skrollable-between"
                        data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)"
                        style="transform: translateY(-0.133779px);">
                        <div
                            class="feature-box bg-white h-100 align-items-center box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                            <div
                                class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                                <i class="fa-solid fa-people-group icon-extra-large text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">மொத்த எஸ்டி மக்கள் தொகை:
                                    5,643</span>
                            </div>
                        </div>
                    </div>
                </div>
                <table id="example" class="w-100 border-radius-20px overflow-hidden" style="table-layout: fixed">
                    <thead>
                        <tr>
                            <th><strong>மண்டலம்</strong></th>
                            <th><strong>மொத்த மக்கள் தொகை</strong></th>
                            <th><strong>மொத்த எஸ்சி மக்கள் தொகை</strong></th>
                            <th><strong>மொத்த எஸ்டி மக்கள் தொகை</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($population as $count): ?>
                            <tr>
                                <td>மண்டலம் - <?= htmlspecialchars($count['ward_no']); ?></td>
                                <td><i
                                        class="fa-regular fa-user text-base-color me-5px"></i><?= number_format((int) str_replace(',', '', $count['total_population'])); ?>
                                </td>
                                <td><i
                                        class="fa-regular fa-user text-base-color me-5px"></i><?= number_format((int) str_replace(',', '', $count['sc_population'])); ?>
                                </td>
                                <td><i
                                        class="fa-regular fa-user text-base-color me-5px"></i><?= number_format((int) str_replace(',', '', $count['st_population'])); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
