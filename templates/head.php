<head>
    <?php include get_template('meta.php', common: true) ?>

    <link rel="preload" as="image" media="(max-width: 600px)" href="<?= get_webp('/assets/hero-mobile.jpg') ?>">
    <link rel="preload" as="image" media="(min-width: 600.1px)" imagesrcset="<?= get_srcset('/assets/hero.jpg') ?>">
    <link rel="preload" as="style" href="/variants/implant/style.css">
    <link rel="stylesheet" href="/variants/implant/style.css">
    <?php get_preload_style('/commons/styles/intl-tel-input.min.css'); ?>
    <link rel="stylesheet" href="/commons/styles/swiper-bundle.min.css"/>
    <link rel="icon" type="image/x-icon" href="/assets/ico-favicon.svg">
    <style>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/variants/implant/critic.css') ?>
    </style>

        <!-- AdRoll Script -->
    <script type="text/javascript">
        adroll_adv_id = "NFZ4NEVM5ZB2LKBJVIJWBC";
        adroll_pix_id = "2TZY7DSFABC63G577EXSKC";
        adroll_version = "2.0";

        (function(w, d, e, o, a) {
            w.__adroll_loaded = true;
            w.adroll = w.adroll || [];
            w.adroll.f = [ 'setProperties', 'identify', 'track', 'identify_email', 'get_cookie' ];
            var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id + "/roundtrip.js";
            for (a = 0; a < w.adroll.f.length; a++) {
                w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
                    return function() {
                        w.adroll.push([ n, arguments ])
                    }
                })(w.adroll.f[a])
            }

            e = d.createElement('script');
            o = d.getElementsByTagName('script')[0];
            e.async = 1;
            e.src = roundtripUrl;
            o.parentNode.insertBefore(e, o);
        })(window, document);

        adroll.track("pageView");
    </script>
    <!-- End AdRoll Script -->

    <?php include get_script('gtm.php', common: true) ?>
    <?php include get_script('hotjar.php', common: true) ?>
    <?php include get_script('logs.php', common: true) ?>
</head>
