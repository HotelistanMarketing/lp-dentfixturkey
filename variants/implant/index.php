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
        $url = "https://projects-logs.vercel.app/api/logs?";
        $post_data = [
            "ip" => GetRealUserIp(),
            "project" => "dentfix"
        ];

        curl_setopt($ch, CURLOPT_URL, $url . http_build_query($post_data));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close($ch);

        echo $server_output;
        if ($server_output == false) {
            echo 'Curl error: ' . curl_error($ch);
        } else {
            echo "success";
        }
    ?>
</a>
</body>
</html>
