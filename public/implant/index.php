<?php
spl_autoload_extensions(".php");
spl_autoload_register();

include 'config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/i18n/implant-en.php';
include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/data.php';
?>

<!DOCTYPE HTML>
<html lang="en">
<?php include get_template('head.php') ?>
<body>
<main>
    <?php include get_template('hero.php') ?>
    <?php include get_template('why.php') ?>
</main>
<?php include get_template('footer.php') ?>
<?php include get_template('whatsapp-fab.php') ?>
<?php include get_template('body-end.php') ?>
</body>
</html>
