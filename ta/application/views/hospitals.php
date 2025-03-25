<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start">
                <table id="example" class="mt-30px w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>S.No</strong></th>
                            <th><strong>List of Hospitals</strong></th>
                            <th><strong>Address</strong></th>
                            <!-- <th><strong>Phone No</strong></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hospitals as $hospital): ?>
                            <tr>
                                <td><?= $hospital['id']; ?></td>
                                <td><?= $hospital['hospital']; ?></td>
                                <td><?= $hospital['address']; ?></td>
                                <!-- <td><?= $hospital['hospital']; ?></td> -->
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>