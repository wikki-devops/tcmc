<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 justify-content-center align-content-center">
                <table class="w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>S.no</strong></th>
                            <th><strong>Zone No</strong></th>
                            <th><strong>Conversion of LED Lights</strong></th>
                            <th><strong>Leftout area LED Lights</strong></th>
                            <th><strong>Existing LED Lights</strong></th>
                            <th><strong>Total</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lights as $light): ?>
                            <tr>
                                <td><?= $light['id']; ?></td>
                                <td><?= $light['zone']; ?></td>
                                <td><?= $light['conversion_led']; ?></td>
                                <td><?= $light['leftout_led']; ?></td>
                                <td><?= $light['existing_led']; ?></td>
                                <td><?= $light['total']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
