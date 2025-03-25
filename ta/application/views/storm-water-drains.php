<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-40px pb-40px">
    <div class="container">
        <div class="row bg-spring-wood align-content-center justify-content-center">
            <div class="col-lg-6 p-0 position-relative">
                <img src="<?= cdn_url(); ?>assets/images/swd/1.png" alt="" class="border-radius-top-left-bottom-left" />
            </div>
            <div class="col-lg-6 align-content-center">
                <div class="pt-30px pb-30px ps-30px">
                    <ul class="list-style-04 fs-16 fw-400 text-black  lh-20">
                        <li>2020-21 நிதியாண்டு (IUDM) 3 SWD, 3.543 கி.மீ. ரூ. 9.89 கோடி செலவில்.</li>
                        <li>2021-22 நிதியாண்டு (SDMF) 12 SWD, 8.93 கி.மீ. ரூ. 30.75 கோடி செலவில்.</li>
                        <li>2023-24 நிதியாண்டு (SDMF) 13 SWD, 12461 கி.மீ. ரூ. 37.59 கோடி செலவில்.</li>
                    </ul>
                    <h3 class="fs-20 fw-700 text-base-color mb-10px">மொத்த திட்டங்கள் 28 SWD, 25 கி.மீ. ரூ. 78.23 கோடி செலவில்.
                    </h3>
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
                            <th><strong>வடிகால்கள்</strong></th>
                            <th><strong>நீளம்</strong></th>
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
                <h3 class="text-center fs-20 fw-700 text-base-color mb-10px">மண்டல வாரியாக புயல் நீர் வடிகால்.</h3>
                <table class="w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>மண்டலம்</strong></th>
                            <th><strong>வடிகால் நீளம் (கிமீ)</strong></th>
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