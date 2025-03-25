<?php
// Must be at the very beginning, before any HTML output
setcookie("example", "value", [
  'secure' => true,      // Ensures the cookie is sent over HTTPS only
  'httponly' => true,    // Prevents JavaScript access
  'samesite' => 'Strict' // Helps prevent CSRF
]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambaram City Municipal Corporation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/images/logo/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/css/vendors.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/css/icon.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/ta/assets/css/tambaram.css">

    <link rel="stylesheet" href="<?= base_url('../assets/css/custom.css'); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css" />

</head>

<body id="zoom-text">
    <header class="header-with-topbar">
        <div class="header-top-bar top-bar-dark bg-white border disable-fixed position-relative">
            <div class="container-fluid">
                <div class="row h-35px align-items-center">
                    <div class="col-12 text-end justify-content-center">
                        <button class="zoom-control p-5px" id="zoom-in"
                            style="background: var(--Gray-6, #F2F2F2) !important;">A+</button>
                        <button class="zoom-control p-5px" id="default-size"
                            style="background: var(--Gray-6, #F2F2F2) !important;">A</button>
                        <button class="zoom-control p-5px" id="zoom-out"
                            style="background: var(--Gray-6, #F2F2F2) !important;">A-</button>
                        <a href="screen-reader" target="_blank" class="zoom-control p-5px ms-20px"
                            style="background: var(--Gray-6, #F2F2F2) !important;">
                            <img src="<?= cdn_url(); ?>assets/images/icons/screen-reader.png" class="w-20px" />
                        </a>
                        <div class="language-toggle">
                            <span>English</span>
                            <label class="switch">
                                <input type="checkbox" id="languageSwitch">
                                <span class="slider"></span>
                            </label>
                            <span>Tamil</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="main-header h-170px background-no-repeat position-relative z-index-9"
        style="background-image:url('<?= cdn_url(); ?>assets/images/nav-bg.png');">
        <div
            class="container pt-10px pb-10px position-relative z-index-3  header-top d-flex justify-content-between align-items-center">
            <div class="">
                <a href="<?= base_url(); ?>">
                    <img src="<?= cdn_url(); ?>assets/images/logo/logo-english.png" alt="Tambaram Corporation"
                        class="w-auto h-100px" />
                </a>
            </div>
            <div class="">
                <a href="<?= base_url(); ?>"><img src="<?= cdn_url(); ?>assets/images/logo/tamilnadu.png"
                        alt="Tamil Nadu Government " class="logo w-100px" /></a>
            </div>
            <div class="">
                <img src="<?= cdn_url(); ?>assets/images/logo/chief-minister.png" alt="Chief Minister of Tamil Nadu"
                    class="cm-img me-20px w-100px" />
                <img src="<?= cdn_url(); ?>assets/images/logo/deputy-chief-minister.png"
                    alt="Deputy Chief Minister of Tamil Nadu" class="cm-img me-20px w-100px" />
                <img src="<?= cdn_url(); ?>assets/images/logo/minister.png" alt="Minister" class="cm-img w-100px" />
            </div>
        </div>
        <nav class="container navbar navbar-expand-lg header-light border-radius-20px p-15px d-block bg-base-color">
            <div class="col-auto menu-order center-nav">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center d-flex" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link no-wrap text-white fs-13"><i
                                    class="d-inline fa-solid fa-house"></i>&nbsp;முகப்பு</a>
                        </li>
                        <?php foreach ($menus as $menu): ?>
                            <?php if (!empty($menu['submenus'])): ?>
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0);" class="nav-link no-wrap text-white ps-10p fs-13">
                                        <?= $menu['menu']; ?>&nbsp;<i class="d-inline fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu border-radius-10px border border-color-transparent-base-color">
                                        <?php foreach ($menu['submenus'] as $submenu): ?>
                                            <li>
                                                <a href="<?= $submenu['slug']; ?>"
                                                    class="border-bottom text-black ps-5px pe-5px pt-5px pb-10px">
                                                    <?= $submenu['submenu']; ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a href="<?= $menu['slug']; ?>" class="nav-link no-wrap text-white fs-13"><?= $menu['menu']; ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="d-flex mt-10px bg-white border-radius-20px">
                    <div class="fs-14 d-flex text-black ps-5px pe-5px me-10px"
                        style="border-radius: 20px 0% 0% 20px;background: #E2E1E1;">
                        <p class="text-center w-150px my-0">
                            அறிவிப்பு:</p>
                        </p>
    
                    </div>
                    <div class="fs-12 d-flex ps-5px pe-5px w-100">
                        <marquee scrollamount="5">
                            <img src="<?= cdn_url(); ?>assets/images/new.gif" />&nbsp;
                            <?php foreach ($marquees as $marquee): ?><a href="<?= $marquee['link']; ?>" target="_blank"
                                    class="text-black"><?= $marquee['content']; ?></a>&nbsp;|&nbsp;<?php endforeach; ?>
                        </marquee>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <?php $this->load->view($viewpgae); ?>



    <footer class="footer"
        style="background: #EFEFEF url('<?= cdn_url(); ?>assets/images/vector-bg-2.png') no-repeat right bottom;background-size: 300px">
        <div class="container">
            <div class="row d-flex footer-content" style="height: 100%;">
                <div
                    class="col-md-4 col-lg-4 footer-section logo-description pb-20px border-color-transparent-base-color border-bottom">
                    <img src="<?= cdn_url(); ?>assets/images/logo/logo-tamil.png" alt="" class="mb-20px footer-logo"
                        style="width: 340px" />
                    <p class="fs-16 fw-400 footer-description w-100 ">
                        அனைத்து நகர்ப்புற உள்ளாட்சி அமைப்பு சேவைகளையும் பல்வேறு சேவை வழங்கும் நிலையங்கள் மூலம் எங்கிருந்தும், எந்த நேரத்திலும் சாமானிய மக்களுக்கு அணுகக்கூடியதாக மாற்றுதல் மற்றும் அத்தகைய சேவைகளின் செயல்திறன், துல்லியம், வெளிப்படைத்தன்மை, விரைவான மற்றும் நம்பகத்தன்மையை உறுதி செய்தல்,
                    </p>
                    <div class="footer-social-icons">
                        <a href="https://www.facebook.com/tncma" target="_blank" class="pe-10px"><svg
                                xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M28.9999 16C28.9959 19.1772 27.8301 22.2433 25.7223 24.6208C23.6145 26.9982 20.7101 28.5228 17.5562 28.9075C17.486 28.9154 17.4149 28.9084 17.3475 28.8869C17.2802 28.8653 17.2182 28.8297 17.1657 28.7825C17.1131 28.7353 17.0712 28.6774 17.0426 28.6128C17.014 28.5481 16.9995 28.4781 16.9999 28.4075V19H19.9999C20.137 19.0003 20.2727 18.9724 20.3986 18.918C20.5244 18.8637 20.6378 18.784 20.7315 18.6841C20.8253 18.5841 20.8975 18.4659 20.9437 18.3368C20.9899 18.2077 21.009 18.0705 20.9999 17.9337C20.9779 17.6766 20.8592 17.4373 20.6679 17.2641C20.4766 17.0909 20.2268 16.9965 19.9687 17H16.9999V14C16.9999 13.4695 17.2107 12.9608 17.5857 12.5858C17.9608 12.2107 18.4695 12 18.9999 12H20.9999C21.137 12.0003 21.2727 11.9724 21.3986 11.918C21.5244 11.8637 21.6378 11.784 21.7315 11.6841C21.8253 11.5841 21.8975 11.4659 21.9437 11.3368C21.9899 11.2077 22.009 11.0705 21.9999 10.9337C21.9778 10.6761 21.8588 10.4365 21.667 10.2632C21.4751 10.0899 21.2247 9.99586 20.9662 9.99997H18.9999C17.9391 9.99997 16.9217 10.4214 16.1715 11.1715C15.4214 11.9217 14.9999 12.9391 14.9999 14V17H11.9999C11.8629 16.9997 11.7272 17.0276 11.6013 17.0819C11.4755 17.1362 11.3621 17.2159 11.2683 17.3159C11.1746 17.4159 11.1023 17.5341 11.0562 17.6632C11.01 17.7922 10.9909 17.9294 10.9999 18.0662C11.0221 18.3238 11.141 18.5634 11.3329 18.7367C11.5248 18.91 11.7752 19.0041 12.0337 19H14.9999V28.41C15.0004 28.4805 14.9859 28.5504 14.9574 28.6149C14.9289 28.6795 14.887 28.7373 14.8346 28.7845C14.7822 28.8317 14.7204 28.8673 14.6532 28.8889C14.5861 28.9106 14.5151 28.9177 14.4449 28.91C11.2066 28.5156 8.2344 26.9198 6.11654 24.4386C3.99867 21.9573 2.88955 18.7713 3.00869 15.5112C3.25869 8.76122 8.72619 3.27372 15.4812 3.01122C17.2301 2.94348 18.9746 3.22916 20.6105 3.85117C22.2464 4.47319 23.7401 5.41877 25.0021 6.63134C26.2642 7.84391 27.2687 9.29857 27.9556 10.9083C28.6425 12.5181 28.9977 14.2498 28.9999 16Z"
                                    fill="#4F4F4F" />
                            </svg>
                        </a>
                        <a href="https://x.com/CMAChennai?mx=2" target="_blank" class="pe-10px"><svg
                                xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28"
                                fill="none">
                                <path
                                    d="M23.5157 24.0461C23.4403 24.1833 23.3296 24.2978 23.1949 24.3777C23.0602 24.4575 22.9066 24.4998 22.7501 24.5H17.5001C17.3528 24.5 17.2079 24.4627 17.0789 24.3918C16.9498 24.3209 16.8407 24.2185 16.7618 24.0942L12.3332 17.1347L5.89756 24.2134C5.74067 24.382 5.52369 24.4819 5.29364 24.4915C5.06359 24.5011 4.83903 24.4196 4.66864 24.2648C4.49824 24.1099 4.39575 23.8942 4.38338 23.6642C4.37101 23.4343 4.44976 23.2088 4.60256 23.0366L11.3587 15.5991L4.51178 4.84531C4.42745 4.71302 4.38025 4.56048 4.3751 4.40368C4.36996 4.24688 4.40707 4.09158 4.48255 3.95404C4.55803 3.8165 4.6691 3.70179 4.80412 3.62191C4.93915 3.54203 5.09317 3.49992 5.25006 3.5H10.5001C10.6473 3.50005 10.7922 3.53726 10.9212 3.60819C11.0503 3.67912 11.1594 3.78148 11.2383 3.90578L15.6669 10.8653L22.1026 3.78656C22.2594 3.61804 22.4764 3.51814 22.7065 3.50853C22.9365 3.49892 23.1611 3.58037 23.3315 3.73522C23.5019 3.89007 23.6044 4.10584 23.6167 4.33576C23.6291 4.56567 23.5504 4.7912 23.3976 4.96344L16.6415 12.3955L23.4883 23.1558C23.5722 23.2881 23.619 23.4406 23.6238 23.5972C23.6286 23.7538 23.5913 23.9088 23.5157 24.0461Z"
                                    fill="#4F4F4F" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/tambaram_corporation" target="_blank" class="pe-10px"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" viewBox="0 0 30 30" fill="none">
                                <path
                                    d="M20.625 2.8125H9.375C7.63509 2.81436 5.96697 3.50636 4.73667 4.73667C3.50636 5.96697 2.81436 7.63509 2.8125 9.375V20.625C2.81436 22.3649 3.50636 24.033 4.73667 25.2633C5.96697 26.4936 7.63509 27.1856 9.375 27.1875H20.625C22.3649 27.1856 24.033 26.4936 25.2633 25.2633C26.4936 24.033 27.1856 22.3649 27.1875 20.625V9.375C27.1856 7.63509 26.4936 5.96697 25.2633 4.73667C24.033 3.50636 22.3649 2.81436 20.625 2.8125ZM15 20.625C13.8875 20.625 12.7999 20.2951 11.8749 19.677C10.9499 19.0589 10.2289 18.1804 9.80318 17.1526C9.37744 16.1248 9.26604 14.9938 9.48308 13.9026C9.70013 12.8115 10.2359 11.8092 11.0225 11.0225C11.8092 10.2359 12.8115 9.70013 13.9026 9.48308C14.9938 9.26604 16.1248 9.37744 17.1526 9.80318C18.1804 10.2289 19.0589 10.9499 19.677 11.8749C20.2951 12.7999 20.625 13.8875 20.625 15C20.6234 16.4914 20.0303 17.9212 18.9758 18.9758C17.9212 20.0303 16.4914 20.6234 15 20.625ZM22.0312 9.375C21.7531 9.375 21.4812 9.29253 21.25 9.138C21.0187 8.98348 20.8385 8.76386 20.732 8.5069C20.6256 8.24994 20.5978 7.96719 20.652 7.6944C20.7063 7.42162 20.8402 7.17105 21.0369 6.97438C21.2335 6.77771 21.4841 6.64378 21.7569 6.58952C22.0297 6.53526 22.3124 6.56311 22.5694 6.66954C22.8264 6.77598 23.046 6.95622 23.2005 7.18748C23.355 7.41874 23.4375 7.69062 23.4375 7.96875C23.4375 8.34171 23.2893 8.6994 23.0256 8.96312C22.7619 9.22684 22.4042 9.375 22.0312 9.375ZM18.75 15C18.75 15.7417 18.5301 16.4667 18.118 17.0834C17.706 17.7001 17.1203 18.1807 16.4351 18.4645C15.7498 18.7484 14.9958 18.8226 14.2684 18.6779C13.541 18.5333 12.8728 18.1761 12.3483 17.6516C11.8239 17.1272 11.4667 16.459 11.3221 15.7316C11.1774 15.0042 11.2516 14.2502 11.5355 13.5649C11.8193 12.8797 12.2999 12.294 12.9166 11.882C13.5333 11.4699 14.2583 11.25 15 11.25C15.9946 11.25 16.9484 11.6451 17.6516 12.3483C18.3549 13.0516 18.75 14.0054 18.75 15Z"
                                    fill="#4F4F4F" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCZ8YHeDTxSIsVA8KjAv9vCQ/videos" target="_blank"
                            class="pe-10px"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32" fill="none">
                                <path
                                    d="M29.2913 8.69C29.1735 8.22919 28.9478 7.80298 28.6329 7.44654C28.318 7.09011 27.9228 6.81366 27.48 6.64C23.195 4.985 16.375 5 16 5C15.625 5 8.805 4.985 4.52 6.64C4.0772 6.81366 3.68204 7.09011 3.36712 7.44654C3.05219 7.80298 2.82653 8.22919 2.70875 8.69C2.385 9.9375 2 12.2175 2 16C2 19.7825 2.385 22.0625 2.70875 23.31C2.82636 23.771 3.05194 24.1975 3.36687 24.5542C3.68181 24.9108 4.07706 25.1875 4.52 25.3613C8.625 26.945 15.05 27 15.9175 27H16.0825C16.95 27 23.3787 26.945 27.48 25.3613C27.9229 25.1875 28.3182 24.9108 28.6331 24.5542C28.9481 24.1975 29.1736 23.771 29.2913 23.31C29.615 22.06 30 19.7825 30 16C30 12.2175 29.615 9.9375 29.2913 8.69ZM20.0737 16.815L15.0737 20.315C14.9242 20.4198 14.7488 20.4816 14.5666 20.4938C14.3844 20.5059 14.2023 20.4679 14.0401 20.384C13.878 20.3 13.7419 20.1732 13.6467 20.0174C13.5515 19.8615 13.5007 19.6826 13.5 19.5V12.5C13.5001 12.3171 13.5503 12.1377 13.6452 11.9813C13.7402 11.8249 13.8762 11.6976 14.0385 11.6132C14.2008 11.5287 14.3831 11.4904 14.5656 11.5024C14.7482 11.5144 14.9239 11.5763 15.0737 11.6813L20.0737 15.1813C20.2053 15.2735 20.3126 15.396 20.3868 15.5386C20.4609 15.6811 20.4996 15.8394 20.4996 16C20.4996 16.1606 20.4609 16.3189 20.3868 16.4614C20.3126 16.604 20.2053 16.7265 20.0737 16.8188V16.815Z"
                                    fill="#4F4F4F" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="col-md-8 col-lg-8 d-flex align-items-stretch border-color-transparent-base-color border-bottom">
                    <div class="row">
                        <div class="col-md-8 col-lg-8 footer-section information">
                            <h5 class="fs-20 fw-700 text-base-color mb-5px">தகவல்</h5>
                            <hr class="footer-separator" />
                            <div class="row">
                                <?php
                                $informationLinks = array_filter($footer, fn($link) => $link['filter'] === 'information');

                                $chunks = array_chunk($informationLinks, ceil(count($informationLinks) / 2));
                                ?>

                                <div class="col-md-6 col-lg-6">
                                    <div class="info-columns">
                                        <ul class="fs-16 fw-400" style="color: var(--Gray-2, #4F4F4F);">
                                            <?php foreach ($chunks[0] as $link): ?>
                                                <li class="d-flex align-items-center">
                                                    <i class="fa-solid fa-angles-right text-base-color me-10px"></i>
                                                    <a href="<?= $link['slug']; ?>"
                                                        target="<?= (str_contains($link['slug'], 'https://') || str_contains($link['slug'], 'assets/download')) ? '_blank' : '_self'; ?>">
                                                        <?= $link['title']; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6">
                                    <div class="info-columns">
                                        <ul class="fs-16 fw-400" style="color: var(--Gray-2, #4F4F4F);">
                                            <?php foreach ($chunks[1] as $link): ?>
                                                <li class="d-flex align-items-center">
                                                    <i class="fa-solid fa-angles-right text-base-color me-10px"></i>
                                                    <a href="<?= $link['slug']; ?>"
                                                        target="<?= (str_contains($link['slug'], 'https://') || str_contains($link['slug'], 'assets/download')) ? '_blank' : '_self'; ?>">
                                                        <?= $link['title']; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 col-lg-4 footer-section downloads">
                            <h5 class="fs-20 fw-700 text-base-color mb-5px">பதிவிறக்கங்கள்</h5>
                            <hr class="footer-separator" />
                            <ul class="fs-16 fw-400" style="color: var(--Gray-2, #4F4F4F);">
                                <?php foreach ($footer as $link): ?>
                                    <?php if ($link['filter'] === 'downloads'): ?>
                                        <li class="d-flex align-items-center">
                                            <i class="fa-solid fa-angles-right text-base-color me-10px"></i>
                                            <a href="<?= $link['slug']; ?>"
                                                target="<?= (str_contains($link['slug'], 'https://') || str_contains($link['slug'], 'assets/download')) ? '_blank' : '_self'; ?>">
                                                <?= $link['title']; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4  pt-20px">
                    <div class="footer-app-download">
                        <p class="text-black fw-500 fs-14 m-0">எங்கள் பயன்பாட்டைப் பதிவிறக்கவும்</p>
                        <h5 class="text-black mb-5px fs-20 fw-700">TN Urban Esevai</h5>
                        <a href="#"><img src="<?= cdn_url(); ?>assets/images/andriod.png" alt="Google Play" /></a>
                        <!-- <a href="#"><img src="<?= cdn_url(); ?>assets/images/ios.png" alt="App Store" /></a> -->
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 pt-20px">
                    <div class="footer-section visitor-count">
                        <h5 class="mb-5px fs-20 fw-700 text-black">Visitors Count</h5>
                        <div id="visitorCounter" class="count-display">
                            <?php
                            $visitor_count = isset($visitor_count) ? $visitor_count : 'Visitor count not set';
                            if (is_numeric($visitor_count) && $visitor_count !== 'Visitor count not set') {
                                $visitor_count_digits = str_split($visitor_count);
                                foreach ($visitor_count_digits as $digit) {
                                    echo "<span>$digit</span>";
                                }
                            } else {
                                echo "<span>Visitor count not set</span>";
                            }
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/js/jquery.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/js/vendors.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/tambaramcorporation/tcmc@main/assets/js/main.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script>
        var BASE_URL = "<?= base_url(); ?>";
    </script>

    <script src="<?= base_url('../assets/js/custom.js'); ?>"></script>  

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsnuLzhOMeLMWhAoM8KawCxbChGVv5NqU&libraries=places,marker&callback=initMap&v=beta&loading=async" async defer></script>

    <script type="text/javascript">
        new DataTable('#example', {
            "ordering": false, // Disable sorting
            initComplete: function() {
                let table = this.api(); // DataTable API instance
                let thead = table.table().header(); // Get the table header

                // Create a new row for search inputs above the header
                let searchRow = document.createElement('tr');

                table.columns().every(function() {
                    let column = this;

                    // Create a new cell for each column's search input
                    let th = document.createElement('th');
                    let input = document.createElement('input');

                    input.placeholder = `${column.header().textContent.trim()}`; // Set placeholder text
                    input.style.width = '100%'; // Consistent input width

                    // Add event listener for search functionality
                    input.addEventListener('keyup', function() {
                        column.search(this.value).draw();
                    });

                    th.appendChild(input); // Append the input to the new cell
                    searchRow.appendChild(th); // Append the cell to the new row
                });

                // Insert the search row into the header
                thead.parentNode.insertBefore(searchRow, thead);
            }
        });
    </script>


    

</body>

</html>