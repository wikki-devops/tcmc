<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row">
            <div class="col tab-style-01">
                <ul class="nav nav-tabs justify-content-center border-0 text-center fs-18 alt-font fw-600">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#zone_1">மண்டலம் 1</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_2">மண்டலம் 2</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_3">மண்டலம் 3</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_4">மண்டலம் 4</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_5">மண்டலம் 5</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active show" id="zone_1">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="mt-30px border-radius-20px overflow-hidden w-100">
                                <thead>
                                    <tr>
                                        <th><strong>வ.எண்</strong></th>
                                        <th><strong>ஆண்</strong></th>
                                        <th><strong>பெண்</strong></th>
                                        <th><strong>மாற்றுத்திறனாளி</strong></th>
                                        <th><strong>குழந்தைகள் இருக்கை</strong></th>
                                        <th><strong>திருநங்கை இருக்கை</strong></th>
                                        <th><strong>மொத்தம்</strong></th>
                                        <th><strong>இடம்</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($toilets as $toilet): ?>
                                        <?php if ($toilet['zone'] === 'Zone 1'): ?>
                                            <tr>
                                                <td><?= $sno++; ?></td>
                                                <td><?= $toilet['male']; ?></td>
                                                <td><?= $toilet['female']; ?></td>
                                                <td><?= $toilet['differently_abled']; ?></td>
                                                <td><?= $toilet['child_seats']; ?></td>
                                                <td><?= $toilet['transgender_seats']; ?></td>
                                                <td><?= $toilet['total']; ?></td>
                                                <td><?= $toilet['location']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade in show" id="zone_2">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="mt-30px border-radius-20px overflow-hidden w-100">
                                <thead>
                                    <tr>
                                        <th><strong>வ.எண்</strong></th>
                                        <th><strong>ஆண்</strong></th>
                                        <th><strong>பெண்</strong></th>
                                        <th><strong>மாற்றுத்திறனாளி</strong></th>
                                        <th><strong>குழந்தைகள் இருக்கை</strong></th>
                                        <th><strong>திருநங்கை இருக்கை</strong></th>
                                        <th><strong>மொத்தம்</strong></th>
                                        <th><strong>இடம்</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($toilets as $toilet): ?>
                                        <?php if ($toilet['zone'] === 'Zone 2'): ?>
                                            <tr>
                                                <td><?= $sno++; ?></td>
                                                <td><?= $toilet['male']; ?></td>
                                                <td><?= $toilet['female']; ?></td>
                                                <td><?= $toilet['differently_abled']; ?></td>
                                                <td><?= $toilet['child_seats']; ?></td>
                                                <td><?= $toilet['transgender_seats']; ?></td>
                                                <td><?= $toilet['total']; ?></td>
                                                <td><?= $toilet['location']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="tab-pane fade in show" id="zone_3">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="mt-30px border-radius-20px overflow-hidden w-100">
                                <thead>
                                    <tr>
                                        <th><strong>வ.எண்</strong></th>
                                        <th><strong>ஆண்</strong></th>
                                        <th><strong>பெண்</strong></th>
                                        <th><strong>மாற்றுத்திறனாளி</strong></th>
                                        <th><strong>குழந்தைகள் இருக்கை</strong></th>
                                        <th><strong>திருநங்கை இருக்கை</strong></th>
                                        <th><strong>மொத்தம்</strong></th>
                                        <th><strong>இடம்</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($toilets as $toilet): ?>
                                        <?php if ($toilet['zone'] === 'Zone 3'): ?>
                                            <tr>
                                                <td><?= $sno++; ?></td>
                                                <td><?= $toilet['male']; ?></td>
                                                <td><?= $toilet['female']; ?></td>
                                                <td><?= $toilet['differently_abled']; ?></td>
                                                <td><?= $toilet['child_seats']; ?></td>
                                                <td><?= $toilet['transgender_seats']; ?></td>
                                                <td><?= $toilet['total']; ?></td>
                                                <td><?= $toilet['location']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade in show" id="zone_4">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="mt-30px border-radius-20px overflow-hidden w-100">
                                <thead>
                                    <tr>
                                        <th><strong>வ.எண்</strong></th>
                                        <th><strong>ஆண்</strong></th>
                                        <th><strong>பெண்</strong></th>
                                        <th><strong>மாற்றுத்திறனாளி</strong></th>
                                        <th><strong>குழந்தைகள் இருக்கை</strong></th>
                                        <th><strong>திருநங்கை இருக்கை</strong></th>
                                        <th><strong>மொத்தம்</strong></th>
                                        <th><strong>இடம்</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($toilets as $toilet): ?>
                                        <?php if ($toilet['zone'] === 'Zone 4'): ?>
                                            <tr>
                                                <td><?= $sno++; ?></td>
                                                <td><?= $toilet['male']; ?></td>
                                                <td><?= $toilet['female']; ?></td>
                                                <td><?= $toilet['differently_abled']; ?></td>
                                                <td><?= $toilet['child_seats']; ?></td>
                                                <td><?= $toilet['transgender_seats']; ?></td>
                                                <td><?= $toilet['total']; ?></td>
                                                <td><?= $toilet['location']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade in show" id="zone_5">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="mt-30px border-radius-20px overflow-hidden w-100">
                                <thead>
                                    <tr>
                                        <th><strong>வ.எண்</strong></th>
                                        <th><strong>ஆண்</strong></th>
                                        <th><strong>பெண்</strong></th>
                                        <th><strong>மாற்றுத்திறனாளி</strong></th>
                                        <th><strong>குழந்தைகள் இருக்கை</strong></th>
                                        <th><strong>திருநங்கை இருக்கை</strong></th>
                                        <th><strong>மொத்தம்</strong></th>
                                        <th><strong>இடம்</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($toilets as $toilet): ?>
                                        <?php if ($toilet['zone'] === 'Zone 5'): ?>
                                            <tr>
                                                <td><?= $sno++; ?></td>
                                                <td><?= $toilet['male']; ?></td>
                                                <td><?= $toilet['female']; ?></td>
                                                <td><?= $toilet['differently_abled']; ?></td>
                                                <td><?= $toilet['child_seats']; ?></td>
                                                <td><?= $toilet['transgender_seats']; ?></td>
                                                <td><?= $toilet['total']; ?></td>
                                                <td><?= $toilet['location']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>