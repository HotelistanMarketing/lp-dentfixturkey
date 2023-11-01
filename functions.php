<?php

define('WEBP_SUPPORT', str_contains($_SERVER['HTTP_ACCEPT'], 'image/webp'));
const WEBP_CLASS = WEBP_SUPPORT ? 'webp' : 'no-webp';

function get_wp_link(string $number, string $keyword = ''): string
{
    $text = urlencode(sprintf(TR["whatsapp_message"], $keyword ?: TR['whatsapp_main_keyword']));
    return sprintf('https://api.whatsapp.com/send?phone=%s&text=%s', $number, $text);
}

/**
 * @return string webp version of the source if available, or the source itself.
 */
function get_webp(string $source): string
{
    if (WEBP_SUPPORT) {
        $dir = pathinfo($source, PATHINFO_DIRNAME);
        $name = pathinfo($source, PATHINFO_FILENAME);
        $destination = $dir . '/' . $name . '.webp';

        return file_exists($_SERVER['DOCUMENT_ROOT'] . $destination) ? $destination : $source;
    }

    return $source;
}

function get_img(string $src, string $alt = '', string $loading = 'lazy', bool $retina = true, bool $variant = false): void
{
    $path = ($variant ? '/assets/' . VARIANT . '/' : '/assets/') . $src;
    $img_size = getimagesize($_SERVER['DOCUMENT_ROOT'] . $path);
    ?>
    <img src="<?= get_webp($path) ?>"
        <?php if ($retina): ?>
            srcset="<?= get_webp(get_2x_src($path)) ?> 2x"
        <?php endif ?>
         alt="<?= $alt ?>"
         width="<?= $img_size[0] ?>"
         height="<?= $img_size[1] ?>"
         loading="<?= $loading ?>">
    <?php
}

function get_pic_source_mq(string $src, bool $variant = false, string $bp = '992px', bool $retina = true): void
{
    $src = ($variant ? '/assets/' . VARIANT . '/' : '/assets/') . $src;
    $srcset = get_webp($src) . ' 1x';

    if ($retina)
        $srcset .= ', ' . get_webp(get_2x_src($src)) . ' 2x'
    ?>
    <source media="(min-width:<?= $bp ?>)" srcset="<?= $srcset ?>">
    <?php
}

function get_2x_src(string $src): string
{
    $dir = pathinfo($src, PATHINFO_DIRNAME);
    $name = pathinfo($src, PATHINFO_FILENAME);
    return $dir . '/' . $name . '@2x.' . pathinfo($src, PATHINFO_EXTENSION);
}

function get_srcset(string $src): string
{
    return get_webp($src) . ' 1x, ' . get_webp(get_2x_src($src)) . ' 2x';
}


/**
 * Get real user ip
 *
 * Usage sample:
 * GetRealUserIp();
 * GetRealUserIp('ERROR',FILTER_FLAG_NO_RES_RANGE);
 *
 * @param string|null $default default return value if no valid ip found
 * @param int $filter_options filter options. default is FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE
 *
 * @return string real user ip
 */

function GetRealUserIp(string $default = NULL, int $filter_options = 12582912): string
{
    $HTTP_X_FORWARDED_FOR = $_SERVER["HTTP_X_FORWARDED_FOR"] ?? '';
    $HTTP_CLIENT_IP = $_SERVER["HTTP_CLIENT_IP"] ?? '';
    $HTTP_CF_CONNECTING_IP = $_SERVER["HTTP_CF_CONNECTING_IP"] ?? '';
    $REMOTE_ADDR = $_SERVER["REMOTE_ADDR"] ?? getenv('REMOTE_ADDR');

    $all_ips = explode(",", "$HTTP_X_FORWARDED_FOR,$HTTP_CLIENT_IP,$HTTP_CF_CONNECTING_IP,$REMOTE_ADDR");
    foreach ($all_ips as $ip) {
        if ($ip = filter_var($ip, FILTER_VALIDATE_IP, $filter_options))
            break;
    }

    return $ip ?? 'NULL';
}
