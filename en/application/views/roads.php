<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 justify-content-center align-content-center">
                <table class="w-100 border-radius-20px overflow-hidden mb-40px">
                    <thead>
                        <tr>
                            <th><strong>Roads</strong></th>
                            <th><strong>Length</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($roads as $count): ?>
                            <tr>
                                <td><?= $count['roads']; ?></td>
                                <td><?= $count['length']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <table class="w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>Name of the Scheme</strong></th>
                            <th><strong>No. of Pakcage </strong></th>
                            <th><strong>No. of roads</strong></th>
                            <th><strong>Length in KM</strong></th>
                            <th><strong>Project Cost Rs</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($roadproject as $roads): ?>
                            <tr>
                                <td><?= $roads['name']; ?></td>
                                <td><?= $roads['package']; ?></td>
                                <td><?= $roads['roads']; ?></td>
                                <td><?= $roads['length']; ?></td>
                                <td><?= $roads['project']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
