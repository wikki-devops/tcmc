<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start">
                <table class="mt-30px w-100 border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>S.No</strong></th>
                            <th><strong>Name</strong></th>
                            <th><strong>Downloads</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($fcg as $audit): ?>
                            <tr>
                                <td><?= $audit['id']; ?></td>
                                <td><?= $audit['name']; ?></td>
                                <td><a href="assets/downloads/audit/<?= $audit['link']; ?>" target="_blank"><img
                                            src="<?= cdn_url(); ?>assets/images/icons/document.png" class="w-40px ms-10px">
                                    </a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>