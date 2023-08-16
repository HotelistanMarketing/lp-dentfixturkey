<?php

$WEBP_SUPPORT = str_contains($_SERVER['HTTP_ACCEPT'], 'image/webp');

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
    global $WEBP_SUPPORT;
    if ($WEBP_SUPPORT) {
        $dir = pathinfo($source, PATHINFO_DIRNAME);
        $name = pathinfo($source, PATHINFO_FILENAME);
        $destination = $dir . '/' . $name . '.webp';

        return file_exists($_SERVER['DOCUMENT_ROOT'] . $destination) ? $destination : $source;
    }

    return $source;
}

function get_img(string $src, string $alt = '', string $loading = 'lazy', bool $variant = false, bool $retina = false): void
{
    $path = ($variant ? '/assets/' . VARIANT . '/' : '/assets/') . $src;
    $img_size = getimagesize($_SERVER['DOCUMENT_ROOT'] . $path);
    ?>
    <img src="<?= get_webp($path) ?>"
        <?php if ($retina): ?>
            <?php
            $dir = pathinfo($path, PATHINFO_DIRNAME);
            $name = pathinfo($path, PATHINFO_FILENAME);
            $highResPath = $dir . '/' . $name . '@2x.' . pathinfo($src, PATHINFO_EXTENSION)
            ?>
            srcset="<?= get_webp($highResPath) ?> 2x"
        <?php endif ?>
         alt="<?= $alt ?>"
         width="<?= $img_size[0] ?>"
         height="<?= $img_size[1] ?>"
         loading="<?= $loading ?>">
    <?php
}

// TODO implement 2x images for high res screens
function get_pic_source_mq(string $src, bool $variant = false, string $bp = '992px'): void
{
    $src = ($variant ? '/assets/' . VARIANT . '/' : '/assets/') . $src;
    $img_info = getimagesize($_SERVER['DOCUMENT_ROOT'] . $src);

    ?>
    <source media="(min-width:<?= $bp ?>)"
            srcset="<?= get_webp($src) ?>"
            width="<?= $img_info[0] ?>"
            height="<?= $img_info[1] ?>">
    <?php
}

function get_img_src(string $source): string
{
    return get_webp('/assets/' . VARIANT . '/' . $source);
}

function get_template(string $template): string
{
    return $_SERVER['DOCUMENT_ROOT'] . '/templates/' . $template;
}

function get_script(string $script): string
{
    return $_SERVER['DOCUMENT_ROOT'] . '/scripts/' . $script;
}
