<?php

define('WEBP_SUPPORT', str_contains($_SERVER['HTTP_ACCEPT'], 'image/webp'));

function trim_number(string $readable_number): string
{
    return preg_replace('/[\s()]/', '', $readable_number);
}

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

function get_template(string $template, bool $common = false): string
{
    if ($common)
        return $_SERVER['DOCUMENT_ROOT'] . '/commons/templates/' . $template;
    else
        return $_SERVER['DOCUMENT_ROOT'] . '/templates/' . $template;
}

function get_script(string $script, bool $common = false): string
{
    if ($common)
        return $_SERVER['DOCUMENT_ROOT'] . '/commons/scripts/' . $script;
    else
        return $_SERVER['DOCUMENT_ROOT'] . '/scripts/' . $script;
}
