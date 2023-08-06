<section id="hero" class="hero">
    <?php include get_template('header.php') ?>

    <div class="container">
        <div id="hero-content" class="hero-content">
            <h1><?= TR["hero_title"] ?></h1>
            <h2><?= TR["hero_subtitle"] ?></h2>
            <a class="button" href="<?= WHATSAPP_LINK ?>" target="_blank">
                <?= TR["hero_button"] ?>
            </a>
        </div>
    </div>
    <div id="org-section" class="section">
        <div class="container">
            <picture>
                <source srcset="/assets/ico-logo-nobel-desktop.svg" width="126" height="41">
                <img src="/assets/ico-logo-nobel.svg" width="76" height="25" alt="Nobel Biocare" loading="lazy">
            </picture>
            <picture>
                <source srcset="/assets/ico-logo-straumann-desktop.svg" width="146" height="19">
                <img src="/assets/ico-logo-straumann.svg" width="90" height="12" alt="Straumann" loading="lazy">
            </picture>
            <picture>
                <source srcset="/assets/ico-logo-ejd-desktop.svg" width="130" height="47">
                <img src="/assets/ico-logo-ejd.svg" width="84" height="31" alt="EJD" loading="lazy">
            </picture>
            <picture>
                <source srcset="/assets/ico-logo-ivoclar-desktop.svg" width="130" height="47">
                <img src="/assets/ico-logo-ivoclar.svg" width="84" height="31" alt="Ivoclar Vivadent" loading="lazy">
            </picture>
        </div>
    </div>
</section>
