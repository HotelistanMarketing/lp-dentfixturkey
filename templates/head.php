<head>
    <?php include get_template('meta.php', common: true) ?>

    <?php get_google_font('Roboto', '300;400;700', display: 'swap') ?>
    <link rel="preload" as="image" media="(max-width: 600px)" href="<?= get_webp('/assets/hero-mobile.jpg') ?>">
    <link rel="preload" as="image" media="(min-width: 600.1px)" imagesrcset="<?= get_srcset('/assets/hero.jpg') ?>">
    <link rel="preload" as="style" href="/variants/implant/style.css">
    <link rel="stylesheet" href="/variants/implant/style.css">
    <?php get_preload_style('https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.min.css'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="icon" type="image/x-icon" href="/assets/ico-favicon.svg">
    <style><?php include($_SERVER['DOCUMENT_ROOT'] . '/variants/implant/critic.css') ?></style>

    <?php include get_script('gtm.php', common: true) ?>
    <?php include get_script('hotjar.php', common: true) ?>
</head>
