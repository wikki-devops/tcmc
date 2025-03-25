<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row">
            <table class="w-100 overflow-hidden border-radius-20px">
                <thead>
                    <tr>
                        <th>ஆண்டு</th>
                        <th>வருவாய் நிதி</th>
                        <th>நீர் வழங்கல் நிதி</th>
                        <th>தொடக்கக் கல்வி நிதி</th>
                        <th>புதுப்பிக்கப்பட்ட தேதி</th>
                        <th>வெளியிடப்பட்ட தேதி</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($administrative as $report): ?>
                        <tr>
                            <td><?= $report['year']; ?></td>
                            <td><a href="<?= base_url();?><?= $report['revenue_fund']; ?>"
                                    target="_blank"><img src="<?= cdn_url(); ?>assets/images/icons/document.png"
                                        class="w-40px ms-10px">
                                </a></td>
                            <td><a href="<?= base_url();?><?= $report['water_supply_fund']; ?>"
                                    target="_blank"><img src="<?= cdn_url(); ?>assets/images/icons/document.png"
                                        class="w-40px ms-10px">
                                </a></td>
                            <td><a href="<?= base_url();?><?= $report['elementary_education_fund']; ?>"
                                    target="_blank"><img src="<?= cdn_url(); ?>assets/images/icons/document.png"
                                        class="w-40px ms-10px">
                                </a></td>
                            <td>
                                <?php if ($report['updated_on'] !== null): ?>
                                    <?= $report['updated_on']; ?>
                                <?php else: ?> -
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($report['published_on'] !== null): ?>
                                    <?= $report['published_on']; ?>
                                <?php else: ?> -
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>