<?php
header('Expires: ' . gmdate('r', time() + (60 * 60))); // 1 hour
ob_start("ob_gzhandler");

include $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
include 'config.php';
include get_localization('implant', LANG_CODE);
include get_localization('commons', LANG_CODE, common: true);
include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/data.php';
?>

<!DOCTYPE HTML>
<html lang="<?= LANG_CODE ?>">

<head>
    <?php include get_template('meta.php', common: true) ?>

    <link rel="preload" as="image" media="(max-width: 600px)" href="<?= get_webp('/assets/fb/banner.jpg') ?>">
    <link rel="preload" as="image" media="(min-width: 600.1px)" href="<?= get_webp('/assets/fb/banner-desktop.jpg') ?>">
    <?php get_preload_style('/commons/styles/intl-tel-input.min.css'); ?>
    <link rel="icon" type="image/x-icon" href="/assets/ico-favicon.svg">
    <style>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/variants/fb/critic.css') ?>
    </style>
    <?php include get_script('gtm.php', common: true) ?>
    <?php include get_script('hotjar.php', common: true) ?>
</head>

<body class="preload">
    <main>
        <section class="fb">
            <div class="container">
                <picture>
                    <?php get_pic_source_mq(src: 'fb/banner-desktop.jpg', bp: '600px', retina: false); ?>
                    <?php get_img(src: 'fb/banner.jpg', alt: 'Dentfix Clinic team', retina: false); ?>
                </picture>
                <div id="contact" class="form-box">
                    <h2 class="section-title"><?= TR['form_title'] ?></h2>
                    <p><?= TR['form_description'] ?></p>
                    <?php include get_template('form.php', common: true) ?>
                </div>
            </div>
        </section>
    </main>
    <script src="/scripts/fb.min.js" defer></script>
    <?php get_form_analytics_script(FORM_ANAL_RID); ?>
</body>

</html>