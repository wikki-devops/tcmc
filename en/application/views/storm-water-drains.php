<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-40px pb-40px">
    <div class="container">
        <div class="row bg-spring-wood align-content-center justify-content-center">
            <div class="col-lg-6 p-0 position-relative">
                <img src="<?= cdn_url(); ?>assets/images/swd/1.png" alt=""
                    class="border-radius-top-left-bottom-left" />
            </div>
            <div class="col-lg-6 align-content-center">
                <div class="pt-30px pb-30px ps-30px">
                    <ul class="list-style-04 fs-16 fw-400 text-black  lh-20">
                        <li>FY 2020-21(IUDM) 3 SWD, 3.543 KM @ cost of Rs.9.89 cr. </li>
                        <li>FY 2021-22(SDMF) 12 nos SWD 8.93KM at an cost Rs.30.75 cr. </li>
                        <li>FY 2023-24 (SDMF) 13 nos SWD 12461km at an cost Rs.37.59 Cr. </li>
                    </ul>
                    <h3 class="fs-20 fw-700 text-base-color mb-10px">Total Projects 28 SWD 25 KM @ cost of Rs.78.23 cr.</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-40px pb-40px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 justify-content-center align-content-center">
                <table class="w-100 border-radius-20px overflow-hidden mb-40px">
                    <thead>
                        <tr>
                            <th><strong>Drains</strong></th>
                            <th><strong>Storm Water Drain (in kms)</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (array_slice($swd, 0, 4) as $count): ?>
                            <tr>
                                <td><?= $count['drains']; ?></td>
                                <td><?= $count['length']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <h3 class="text-center fs-20 fw-700 text-base-color mb-10px">Zone Wise Storm Water Drain.</h3>
                <table class="w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>Zone No</strong></th>
                            <th><strong>Length of drain (Km)</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (array_slice($swd, 4, 10) as $count): ?>
                            <tr>
                                <td><?= $count['drains']; ?></td>
                                <td><?= $count['length']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>