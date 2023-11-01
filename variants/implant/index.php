<?php
header('Expires: ' . gmdate('r', time() + (60 * 60))); // 1 hour
ob_start("ob_gzhandler");

include 'config.php';
include $_SERVER['DOCUMENT_ROOT'] . '/i18n/implant-' . LANG_CODE . '.php';
include $_SERVER['DOCUMENT_ROOT'] . '/commons/i18n/commons-' . LANG_CODE . '.php';
include $_SERVER['DOCUMENT_ROOT'] . '/commons/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
include $_SERVER['DOCUMENT_ROOT'] . '/data.php';

syslog(LOG_INFO, 'logging test... IP is: ');
syslog(LOG_INFO, GetRealUserIp());
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
<?php include get_template('wp-form.php', common: true) ?>
<?php include get_template('body-end.php') ?>
<a class="debug" style="display: none">
    <?= GetRealUserIp() ?>
    <?php
    $ch = curl_init();
    $post_data = [
        "ip" => "string",
        "project" => "dentfixturkey"
    ];

    curl_setopt($ch, CURLOPT_URL, "https://projects-logs.vercel.app/api/logs");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
//    curl_setopt($ch, CURLOPT_HEADER, "Content-Type: application/json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($ch);

    curl_close($ch);

    echo "test...";
    if ($server_output) {
        echo "success";
    } else {
        echo "failed";
    }
    echo `<h1>$server_output</h2>`;
    ?>
</a>
</body>
</html>
