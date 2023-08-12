<?php

$WEBP_SUPPORT = str_contains($_SERVER['HTTP_ACCEPT'], 'image/webp');

function trim_number(string $readable_number): string
{
    return preg_replace('/[\s()]/', '', $readable_number);
}

function generate_wp_link(string $number, string $keyword = ''): string
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

function get_img(string $source, string $alt = '', string $loading = 'lazy', bool $variant = false): void
{
    $path = ($variant ? '/assets/' . VARIANT . '/' : '/assets/') . $source;
    $img_size = getimagesize($_SERVER['DOCUMENT_ROOT'] . $path);
    ?>
    <img src="<?= get_webp($path) ?>"
         alt="<?= $alt ?>"
         width="<?= $img_size[0] ?>"
         height="<?= $img_size[1] ?>"
         loading="<?= $loading ?>">
    <?php
}

// TODO implement 2x images for high res screens
function get_desktop_pic(string $source, bool $variant = false): void
{
    $source = ($variant ? '/assets/' . VARIANT . '/' : '/assets/') . $source;
    $img_info = getimagesize($_SERVER['DOCUMENT_ROOT'] .$source);

    ?>
    <source media="(min-width:992px)"
            srcset="<?= get_webp($source) ?>"
            width="<?= $img_info[0] ?>"
            height="<?= $img_info[1] ?>">
    <?php
}

function get_img_path(string $source): string
{
    return get_webp('/assets/' . VARIANT . '/' . $source);
}

function get_template(string $templateName): string
{
    return $_SERVER['DOCUMENT_ROOT'] . '/templates/' . $templateName;
}
