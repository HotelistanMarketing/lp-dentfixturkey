<?php
header('Expires: ' . gmdate('r', time() + (60 * 60))); // 1 hour
ob_start("ob_gzhandler");

include 'config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/i18n/implant-' . LANG_CODE . '.php';
include $_SERVER['DOCUMENT_ROOT'] . '/commons/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/data.php';
?>

<!DOCTYPE HTML>
<html lang="<?= LANG_CODE ?>">
<?php include get_template('head.php') ?>
<body class="<?= WEBP_CLASS ?>">
<main>
    <?php if (LANG_CODE == 'en'): ?>
        <?php include get_template('banner.php') ?>
    <?php endif ?>
    <?php include get_template('hero.php') ?>
    <?php include get_template('why.php') ?>
    <?php include get_template('before-after.php') ?>
    <?php include get_template('package.php') ?>
    <?php include get_template('services.php') ?>
    <?php include get_template('team.php') ?>
    <?php include get_template('cta.php') ?>
    <?php include get_template('hospital.php') ?>
    <?php include get_template('cta.php') ?>
    <?php include get_template('influencers.php') ?>
    <?php include get_template('faq.php') ?>
</main>
<?php include get_template('footer.php') ?>
<?php include get_template('whatsapp-fab.php', common: true) ?>
<?php include get_template('body-end.php') ?>
</body>
</html>
