<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-40px pb-40px">
    <div class="container" style="background: linear-gradient(90deg, #FDFCFB 0%, rgba(255, 234, 217, 0.50) 100%);">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <img src="<?= cdn_url(); ?>assets/images/contact/contact.png" alt="" class="border-radius-20px">
            </div>
            <div class="col-lg-6 align-content-center border-radius-20px"
                style="background-image: url('<?= cdn_url(); ?>assets/images/bg/e-governance-bg.png');background-repeat: no-repeat;background-position: top right;background-size: contain;"
                data-anime='{ "el": "childs", "willchange": "transform", "opacity": [0, 1], "rotateY": [-90, 0], "rotateZ": [-10, 0], "translateY": [80, 0], "translateZ": [50, 0], "staggervalue": 200, "duration": 600, "delay": 100, "easing": "easeOutCirc" }'>
                <?php foreach ($commissioner as $new): ?>
                    <?php if ($new['id'] === '3'): ?>
                        <div class="card-body">
                            <h5 class="card-title fs-20 fw-700 text-base-color"><?= $new['name']; ?></h5>
                            <p class="fs-16 fw-700 mb-5px">
                                <?= $new['designation']; ?>
                            </p>
                            <div class="row">
                                <p class="fs-16 fw-400 mb-5px">
                                    <i class="fa-solid fa-location-dot text-base-color me-5px"></i>
                                    <?= $new['address']; ?>
                                </p>
                                <p class="fs-16 fw-400 mb-5px">
                                    <i class="fa-solid fa-phone text-base-color me-5px"></i>
                                    <a href="tel:<?= $new['contact_no']; ?>" class="text-black">
                                        <?= $new['contact_no']; ?></a>
                                </p>
                                <p class="fs-16 fw-400 mb-5px">
                                    <i class="fa-solid fa-envelope text-base-color me-5px"></i>
                                    <a href="mailto:<?= $new['email_id']; ?>" class="text-black">
                                        <?= $new['email_id']; ?></a>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="pt-40px pb-40px">
    <div class="container">
        <div class="row">
            <div class="col tab-style-01">
                <ul class="nav nav-tabs justify-content-center border-0 text-center fs-18 alt-font fw-600">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#main_off">தலைமை
                            அலுவலகம்</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_1">மண்டலம் 1</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_2">மண்டலம் 2</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_3">மண்டலம் 3</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_4">மண்டலம் 4</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#zone_5">மண்டலம் 5</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active show" id="main_off">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="w-100 mt-30px border-radius-20px overflow-hidden">
                                <thead>
                                    <tr>
                                        <th><strong>வ.எண்</strong></th>
                                        <th><strong>பெயர்</strong></th>
                                        <th><strong>பதவி</strong></th>
                                        <th><strong>தொலைபேசி எண்</strong></th>
                                        <th><strong>பிரிவு</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($contacts as $contact): ?>
                                        <?php if ($contact['zone'] === 'தலைமை அலுவலகம்'): ?>
                                            <tr>
                                                <td><?= $sno++; ?></td>
                                                <td><?= $contact['name']; ?></td>
                                                <td><?= $contact['designation']; ?></td>
                                                <td><i class="fa-solid fa-phone text-base-color me-5px"></i>
                                                    <a
                                                        href="tel:<?= $contact['phone_number']; ?>"><?= $contact['phone_number']; ?></a>
                                                </td>
                                                <td><?= $contact['section']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade in show" id="zone_1">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="w-100 mt-30px border-radius-20px overflow-hidden">
                                <thead>
                                    <tr>
                                        <th><strong>வ.எண்</strong></th>
                                        <th><strong>பெயர்</strong></th>
                                        <th><strong>பதவி</strong></th>
                                        <th><strong>தொலைபேசி எண்</strong></th>
                                        <th><strong>பிரிவு</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($contacts as $contact): ?>
                                        <?php if ($contact['zone'] === 'மண்டலம் 1'): ?>
                                            <tr>
                                                <td><?= $sno++; ?></td>
                                                <td><?= $contact['name']; ?></td>
                                                <td><?= $contact['designation']; ?></td>
                                                <td><i class="fa-solid fa-phone text-base-color me-5px"></i>
                                                    <a
                                                        href="tel:<?= $contact['phone_number']; ?>"><?= $contact['phone_number']; ?></a>
                                                </td>
                                                <td><?= $contact['section']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade in show" id="zone_2">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="w-100 mt-30px border-radius-20px overflow-hidden">
                                <thead>
                                    <tr>
                                        <th><strong>வ.எண்</strong></th>
                                        <th><strong>பெயர்</strong></th>
                                        <th><strong>பதவி</strong></th>
                                        <th><strong>தொலைபேசி எண்</strong></th>
                                        <th><strong>பிரிவு</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($contacts as $contact): ?>
                                        <?php if ($contact['zone'] === 'மண்டலம் 2'): ?>
                                            <tr>
                                                <td><?= $sno++; ?></td>
                                                <td><?= $contact['name']; ?></td>
                                                <td><?= $contact['designation']; ?></td>
                                                <td><i class="fa-solid fa-phone text-base-color me-5px"></i>
                                                    <a
                                                        href="tel:<?= $contact['phone_number']; ?>"><?= $contact['phone_number']; ?></a>
                                                </td>
                                                <td><?= $contact['section']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade in show" id="zone_3">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="w-100 mt-30px border-radius-20px overflow-hidden">
                                <thead>
                                    <tr>
                                        <th><strong>வ.எண்</strong></th>
                                        <th><strong>பெயர்</strong></th>
                                        <th><strong>பதவி</strong></th>
                                        <th><strong>தொலைபேசி எண்</strong></th>
                                        <th><strong>பிரிவு</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($contacts as $contact): ?>
                                        <?php if ($contact['zone'] === 'மண்டலம் 3'): ?>
                                            <tr>
                                                <td><?= $sno++; ?></td>
                                                <td><?= $contact['name']; ?></td>
                                                <td><?= $contact['designation']; ?></td>
                                                <td><i class="fa-solid fa-phone text-base-color me-5px"></i>
                                                    <a
                                                        href="tel:<?= $contact['phone_number']; ?>"><?= $contact['phone_number']; ?></a>
                                                </td>
                                                <td><?= $contact['section']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade in show" id="zone_4">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="w-100 mt-30px border-radius-20px overflow-hidden">
                                <thead>
                                    <tr>
                                        <th><strong>வ.எண்</strong></th>
                                        <th><strong>பெயர்</strong></th>
                                        <th><strong>பதவி</strong></th>
                                        <th><strong>தொலைபேசி எண்</strong></th>
                                        <th><strong>பிரிவு</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($contacts as $contact): ?>
                                        <?php if ($contact['zone'] === 'மண்டலம் 4'): ?>
                                            <tr>
                                                <td><?= $sno++; ?></td>
                                                <td><?= $contact['name']; ?></td>
                                                <td><?= $contact['designation']; ?></td>
                                                <td><i class="fa-solid fa-phone text-base-color me-5px"></i>
                                                    <a
                                                        href="tel:<?= $contact['phone_number']; ?>"><?= $contact['phone_number']; ?></a>
                                                </td>
                                                <td><?= $contact['section']; ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade in show" id="zone_5">
                        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center">
                            <table class="w-100 mt-30px border-radius-20px overflow-hidden">
                                <thead>
                                    <tr>
                                        <th><strong>வ.எண்</strong></th>
                                        <th><strong>பெயர்</strong></th>
                                        <th><strong>பதவி</strong></th>
                                        <th><strong>தொலைபேசி எண்</strong></th>
                                        <th><strong>பிரிவு</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($contacts as $contact): ?>
                                        <?php if ($contact['zone'] === 'மண்டலம் 5'): ?>
                                            <tr>
                                                <td><?= $sno++; ?></td>
                                                <td><?= $contact['name']; ?></td>
                                                <td><?= $contact['designation']; ?></td>
                                                <td><i class="fa-solid fa-phone text-base-color me-5px"></i>
                                                    <a
                                                        href="tel:<?= $contact['phone_number']; ?>"><?= $contact['phone_number']; ?></a>
                                                </td>
                                                <td><?= $contact['section']; ?></td>
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