<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row">
            <table class="w-100 border-radius-20px overflow-hidden">
                <thead>
                    <tr>
                        <th>வ.எண்</th>
                        <th>பெயர்</th>
                        <th>பதிவிறக்கங்கள்</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($slbm as $pdf): ?>
                        <tr>
                            <td><?= $pdf['id']; ?></td>
                            <td><?= $pdf['name']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?><?= $pdf['link']; ?>" target="_blank" class="btn btn-extra-large">
                                    <img src="<?= cdn_url(); ?>assets/images/icons/document.png"
                                        class="w-30px me-10px" />
                                    <img src="<?= cdn_url(); ?>assets/images/icons/arrow-up-right.png"
                                        class="text-base-color ms-10px">
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>