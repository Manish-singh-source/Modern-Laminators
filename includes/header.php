<?php
$pageTitle = $pageTitle ?? 'Modern Laminators Pvt. Ltd.';
$pageDescription = $pageDescription ?? 'Modern Laminators Pvt. Ltd. is a trusted manufacturer and exporter of flexible packaging solutions since 1972.';
$pageKeywords = $pageKeywords ?? 'Modern Laminators, flexible packaging, laminates, packaging manufacturer India';
$pageAuthor = $pageAuthor ?? 'Modern Laminators Pvt. Ltd.';
$currentPage = $currentPage ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?= htmlspecialchars($pageKeywords, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="author" content="<?= htmlspecialchars($pageAuthor, ENT_QUOTES, 'UTF-8'); ?>">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Space+Grotesk:wght@300..700&amp;display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/slicknav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link href="css/all.min.css" rel="stylesheet" media="screen">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/mousecursor.css">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="img/favicon.png" alt=""></div>
        </div>
    </div>

    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="topbar-contact-info">
                        <ul>
                            <li><img src="images/icon-phone-white.svg" alt=""> <a href="tel:+919868140163">+91 986 814 0163</a></li>
                            <li><img src="images/icon-mail-white.svg" alt=""> <a href="mailto:info@modernlaminatorsindia.com">info@modernlaminatorsindia.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="topbar-social-links">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/navbar.php'; ?>
