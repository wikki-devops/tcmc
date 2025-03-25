<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
            <div class="col icon-with-text-style-10 md-mb-30px skrollable skrollable-between" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)" style="transform: translateY(-0.133779px);">
                <div class="feature-box bg-white h-100 align-items-center box-shadow-quadruple-large box-shadow-quadruple-large-hover p-20px xl-p-30px border-radius-8px">
                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                        <i class="fa-solid fa-check-to-slot icon-extra-large text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block fw-600 text-dark-gray mb-5px fs-22">Total Voters:
                            7,77,939</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 justify-content-center align-content-center">
                <table id="example" class="w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>Male</strong></th>
                            <th><strong>Female</strong></th>
                            <th><strong>TransGender</strong></th>
                            <th><strong>Total Voters</strong></th>
                            <th><strong>Ward No</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($voters as $count): ?>
                            <tr>
                                <td><i class="fa-solid fa-mars text-base-color me-5px"></i><?= $count['male']; ?></td>
                                <td><i class="fa-solid fa-venus text-base-color me-5px"></i><?= $count['female']; ?></td>
                                <td><i class="fa-solid fa-transgender text-base-color me-5px"></i><?= $count['others']; ?></td>
                                <td><i class="fa-regular fa-user text-base-color me-5px"></i><?= $count['total']; ?></td>
                                <td>Ward - <?= $count['ward_no']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>