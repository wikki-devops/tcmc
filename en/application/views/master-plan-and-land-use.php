<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row">
            <table class="w-100 border-radius-20px overflow-hidden">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Place</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reports as $report): ?>
                        <tr>
                            <td><?= $report['id']; ?></td>
                            <td><?= $report['place']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?><?= $report['link'];?>" target="_blank" class="btn btn-extra-large">
                                    <img src="<?= cdn_url(); ?>assets/images/icons/document.png"
                                        class="w-30px me-10px" /><?= $report['place']; ?>
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