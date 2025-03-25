<?php $this->load->view('widgets/page-title'); ?>

<section class="pt-60px pb-60px contain-background background-no-repeat background-position-right"
    style="background-image: url(<?= cdn_url(); ?>assets/images/bg/officer-details-bg.png);background-size:200px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center justify-content-center align-content-center text-lg-start mb-60px">
                <p class="fs-16 fw-400 text-black mb-5px">
                    ஆணையர் தாம்பரம் மாநகராட்சியின் நிர்வாகத் தலைவர் மற்றும் தலைமைச் செயலாளராக உள்ளார். நகர பொறியியலாளர்,
                    நகர சுகாதார அதிகாரி, வார்டு அலுவலகங்களின் உதவி ஆணையர்கள், நிர்வாகப் பொறியியலாளர் (திட்டமிடல்), உதவி
                    ஆணையர் (தொழிலாளர் நியமனம்), உதவி ஆணையர் (வருவாய்) மற்றும் உதவி ஆணையர் (கணக்குகள்) ஆகியோர் ஆணையருக்கு
                    உதவுகின்றனர்.
                </p>
                <p class="fs-16 fw-400 text-black mb-5px">
                    தொழில்நுட்பப் பிரிவு மாநகராட்சியின் பொது நிர்வாகத்தை கவனித்து, பணியாளர்களின் நியமனம், இடமாற்றம்,
                    சம்பளம் மற்றும் கொடுப்பனவுகள், வீடமைப்பு, ஊழியர் நலத்திட்டங்கள் உள்ளிட்டவைகளை நிர்வகிக்கிறது.
                    மேலும், அரசாங்கத்துடனான தொடர்புகள், பிற துறைகளுடன் ஒத்துழைப்புகள், பொதுமக்கள் குறைகளுக்கான
                    தீர்வுகள், சட்ட விவகாரங்கள் மற்றும் வழக்குகள், அலுவலக நிர்வாகம் உள்ளிட்ட அனைத்து செயல்பாடுகளையும்
                    மேற்கொள்கிறது.
                </p>
                <p class="fs-16 fw-400 text-black mb-5px">
                    நிர்வாக வசதிக்காக, மாநகராட்சி ஐந்து மண்டலங்களாக பிரிக்கப்பட்டுள்ளது.ஒவ்வொரு மண்டலமும் ஒரு உதவி
                    ஆணையர் தலைமையில் நிர்வகிக்கப்படுகிறது.
                </p>
            </div>
            <div class="col tab-style-01">
                <ul class="nav nav-tabs justify-content-center border-0 text-center fs-18 alt-font fw-600">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#main_off"> தலைமை அலுவலகம்</a></li>
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
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($general as $contact): ?>
                                        <?php if ($contact['zone'] === 'Main office'): ?>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($general as $contact): ?>
                                        <?php if ($contact['zone'] === 'Zone 1'): ?>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($general as $contact): ?>
                                        <?php if ($contact['zone'] === 'Zone 2'): ?>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($general as $contact): ?>
                                        <?php if ($contact['zone'] === 'Zone 3'): ?>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($general as $contact): ?>
                                        <?php if ($contact['zone'] === 'Zone 4'): ?>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1;
                                    foreach ($general as $contact): ?>
                                        <?php if ($contact['zone'] === 'Zone 5'): ?>
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