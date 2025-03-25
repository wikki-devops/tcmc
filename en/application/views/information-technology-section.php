<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row">
            <div class="col tab-style-01">
                <table class="w-100 mx-auto border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>S.No</strong></th>
                            <th><strong>Name</strong></th>
                            <th><strong>Designation</strong></th>
                            <th><strong>Phone Number</strong></th>
                            <th><strong>Zone</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sno = 1;
                        foreach ($informationtechnology as $contact): ?>
                            <tr>
                                <td><?= $sno++; ?></td>
                                <td><?= $contact['name']; ?></td>
                                <td><?= $contact['designation']; ?></td>
                                <td><i class="fa-solid fa-phone text-base-color me-5px"></i>
                                    <a href="tel:<?= $contact['contact_no']; ?>"><?= $contact['contact_no']; ?></a>
                                </td>
                                <td><?= $contact['zone']; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>