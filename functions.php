<?php

function get_wp_link(string $number, string $keyword = ''): string
{
    $text = urlencode(sprintf(TRC["wp_message"], $keyword ?: TR['whatsapp_main_keyword']));
    return sprintf('https://api.whatsapp.com/send?phone=+905496807408&text=%s', $number, $text);
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

function get_srcset(string $src): string
{
    return get_webp($src) . ' 1x, ' . get_webp(get_2x_src($src)) . ' 2x';
}
