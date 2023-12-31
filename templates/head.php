<head>
    <?php include get_template('meta.php', common: true) ?>

    <link rel="preload" as="image" media="(max-width: 600px)" href="<?= get_webp('/assets/hero-mobile.jpg') ?>">
    <link rel="preload" as="image" media="(min-width: 600.1px)" imagesrcset="<?= get_srcset('/assets/hero.jpg') ?>">
    <link rel="preload" as="style" href="/variants/implant/style.css">
    <link rel="stylesheet" href="/variants/implant/style.css">
    <?php get_preload_style('/commons/styles/intl-tel-input.min.css'); ?>
    <link rel="stylesheet" href="/commons/styles/swiper-bundle.min.css"/>
    <link rel="icon" type="image/x-icon" href="/assets/ico-favicon.svg">
    <style>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/variants/implant/critic.css') ?>
    </style>

    <?php include get_script('gtm.php', common: true) ?>
    <?php include get_script('hotjar.php', common: true) ?>
</head>
