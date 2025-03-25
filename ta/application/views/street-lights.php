<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 justify-content-center align-content-center">
                <table class="w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>வ.எண்</strong></th>
                            <th><strong>மண்டல எண்</strong></th>
                            <th><strong>LED விளக்குகள் மாற்றம்</strong></th>
                            <th><strong>LED விளக்குகள் விடப்பட்ட பகுதி</strong></th>
                            <th><strong>தற்போதுள்ள LED விளக்குகள்</strong></th>
                            <th><strong>மொத்தம்</strong></th>
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