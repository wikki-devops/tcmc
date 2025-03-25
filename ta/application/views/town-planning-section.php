<?php $this->load->view('widgets/page-title'); ?>
<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row">
            <div class="col tab-style-01">
                <table class="w-100 mx-auto border-radius-20px overflow-hidden">
                    <thead>
                        <tr>
                            <th><strong>வ.எண்</strong></th>
                            <th><strong>பெயர்</strong></th>
                            <th><strong>பதவி</strong></th>
                            <th><strong>தொலைபேசி எண்</strong></th>
                            <th><strong>மண்டலம்</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sno = 1;
                        foreach ($townplanning as $contact): ?>
                            <tr>
                                <td><?= $sno++; ?></td>
                                <td><?= $contact['name']; ?></td>
                                <td><?= $contact['designation']; ?></td>
                                <td>
                                    <?php if (!empty($contact['contact_no'])): ?>
                                        <i class="fa-solid fa-phone text-base-color me-5px"></i>

                                        <a href="tel:<?= htmlspecialchars($contact['contact_no']); ?>">
                                            <?= htmlspecialchars($contact['contact_no']); ?>
                                        </a>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
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