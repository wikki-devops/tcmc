<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row">
            <table class="w-100 overflow-hidden border-radius-20px">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Zone</th>
                        <th>House Hold</th>
                        <th>Population</th>
                        <th>Existing Mcc</th>
                        <th>Existing Ct</th>
                        <th>Existing Pt</th>
                        <th>Existing Urinal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($swm_2 as $variable): ?>
                        <tr>
                            <td><?= $variable['id']; ?></td>
                            <td><?= $variable['zone']; ?></td>
                            <td><?= $variable['house_hold']; ?></td>
                            <td><?= $variable['population']; ?></td>
                            <td><?= $variable['existing_mcc']; ?></td>
                            <td><?= $variable['existing_ct']; ?></td>
                            <td><?= $variable['existing_pt']; ?></td>
                            <td><?= $variable['existing_urinal']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 colm-md-6">
                <table class="w-100 overflow-hidden border-radius-20px">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($waste as $generation): ?>
                            <tr>
                                <td><?= $generation['id']; ?></td>
                                <td><?= $generation['name']; ?></td>
                                <td><?= $generation['value']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 colm-md-6">
                <table class="w-100 overflow-hidden border-radius-20px">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($swm as $variable): ?>
                            <tr>
                                <td><?= $variable['id']; ?></td>
                                <td><?= $variable['name']; ?></td>
                                <td><?= $variable['value']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

