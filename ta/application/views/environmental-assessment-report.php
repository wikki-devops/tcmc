<?php $this->load->view('widgets/page-title'); ?>


<section class="pt-60px pb-60px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start">
                <table class="w-100 border-radius-20px border overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>வ.எண்</strong></th>
                            <th><strong>இணைப்பு 1</strong></th>
                            <th><strong>இணைப்பு 2</strong></th>
                            <th><strong>சுற்றுச்சூழல் ஆய்வறிக்கை</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tnsudp as $report): ?>
                            <tr>
                                <?php if (!empty($report['id'])): ?>
                                    <td><?= $report['id']; ?></td>
                                <?php endif; ?>

                                <?php if (!empty($report['annexure_1']) && !empty($report['annexure_1_link'])): ?>
                                    <td>
                                        <img src="<?= cdn_url(); ?>assets/images/icons/document.png" class="w-40px me-10px">
                                        <a href="<?= $report['annexure_1_link']; ?>"
                                            target="_blank"><?= $report['annexure_1']; ?><img
                                                src="<?= cdn_url(); ?>assets/images/icons/arrow-up-right.png"
                                                class="ms-20px"></a>
                                    </td>
                                <?php endif; ?>

                                <?php if (!empty($report['annexure_2']) && !empty($report['annexure_2_link'])): ?>
                                    <td style="border-right: 1px solid #BDBDBD!important;">
                                        <img src="<?= cdn_url(); ?>assets/images/icons/document.png" class="w-40px me-10px">
                                        <a href="<?= $report['annexure_2_link']; ?>"
                                            target="_blank"><?= $report['annexure_2']; ?><img
                                                src="<?= cdn_url(); ?>assets/images/icons/arrow-up-right.png"
                                                class="ms-20px"></a>
                                    </td>
                                <?php endif; ?>

                                <?php if (!empty($report['link'])): ?>
                                    <td rowspan="2">
                                        <img src="<?= cdn_url(); ?>assets/images/icons/document.png" class="w-40px me-10px">
                                        <a href="<?= $report['link']; ?>" target="_blank">TNSUDP – Roads and SWD – EA report<img
                                                src="<?= cdn_url(); ?>assets/images/icons/arrow-up-right.png"
                                                class="ms-20px"></a>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>