<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-40px pb-40px">
    <div class="container">
        <p class="mb-10px text-grey fs-16 fw-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptatum porro assumenda magnam doloribus
            distinctio adipisci expedita, libero, commodi enim facilis dignissimos voluptas autem beatae corporis fugit.
            Sint, iusto soluta? </p>
        <div class="row">
            <table id="example" class="mt-30px w-100">
                <thead>
                    <tr>
                        <th><strong>S.No</strong></th>
                        <th><strong>Address</strong></th>
                        <th><strong>Download Link</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($downloads as $report): ?>
                        <tr>
                            <td><?= $report['id']; ?></td>
                            <td><?= $report['title']; ?></td>
                            <td><a href="<?= $report['pdf']; ?>" target="_blank"> <img
                                        src="<?= cdn_url(); ?>assets/images/icons/pdf-download.png" class="me-10px" />
                                    Download Details</a><i class="feather icon-feather-arrow-up-right text-base-color"></i>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>