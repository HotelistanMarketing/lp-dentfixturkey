<section id="hero" class="parallax">
    <?php include get_template('header.php') ?>

    <div class="container">
        <div class="hero-content">
            <h1><?= TR["hero_title"] ?></h1>
            <span class="hero-subtitle"><?= TR["hero_subtitle"] ?></span>
            <?php get_wp_button(TR['hero_button']) ?>
        </div>
        <div id="org-section">
            <picture>
                <source media="(min-width:992px)" srcset="/assets/ico-logo-nobel-lg.svg" width="126" height="41">
                <img src="/assets/ico-logo-nobel.svg" width="76" height="25" alt="Nobel Biocare" loading="lazy">
            </picture>
            <picture>
                <source media="(min-width:992px)" srcset="/assets/ico-logo-straumann-lg.svg" width="146" height="19">
                <img src="/assets/ico-logo-straumann.svg" width="90" height="12" alt="Straumann" loading="lazy">
            </picture>
            <picture>
                <source media="(min-width:992px)" srcset="/assets/ico-logo-ejd-lg.svg" width="130" height="47">
                <img src="/assets/ico-logo-ejd.svg" width="84" height="31" alt="EJD" loading="lazy">
            </picture>
            <picture>
                <source media="(min-width:992px)" srcset="/assets/ico-logo-ivoclar-lg.svg" width="130" height="47">
                <img src="/assets/ico-logo-ivoclar.svg" width="84" height="31" alt="Ivoclar Vivadent" loading="lazy">
            </picture>
        </div>
    </div>
</section>
