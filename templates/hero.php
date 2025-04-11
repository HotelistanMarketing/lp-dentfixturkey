<section id="hero">
    <?php include get_template('header.php') ?>
    <div class="container">
        <div class="hero-grid">
            <img src="/assets/ba-1.jpeg" loading="eager">
            <img src="/assets/ba-2.jpeg" loading="eager">
            <img src="/assets/ba-3.jpeg" loading="eager">
            <img src="/assets/ba-5.jpeg" loading="eager">
            <img src="/assets/ba-6.jpeg" loading="eager">
            <img src="/assets/ba-7.jpeg" loading="eager">
            <img src="/assets/ba-8.jpeg" loading="eager">
            <img src="/assets/ba-9.jpeg" loading="eager">
            <img src="/assets/ba-10.jpeg" loading="eager">
            <img src="/assets/ba-11.jpeg" loading="eager">
            <img src="/assets/ba-12.jpeg" loading="eager">
            <img src="/assets/ba-5.jpeg" loading="eager">
            <img src="/assets/ba-6.jpeg" loading="eager">
            <img src="/assets/ba-7.jpeg" loading="eager">
            <img src="/assets/ba-6.jpeg" loading="eager">
            <img src="/assets/ba-6.jpeg" loading="eager">
        </div>
        <div id="hero-content" class="hero-content">
            <h1><?= TR["hero_title"] ?></h1>
            <span class="hero-subtitle"><?= TR["hero_subtitle"] ?></span>
            <?php get_wp_button(TR['hero_button']) ?>
            <a href="#contact" class="ico-arrow">
                <img src="/assets/ico-arrow.svg" width="29" height="34" alt="" loading="eager">
            </a>
        </div>
    </div>

    <div id="org-section" class="section">
        <div class="container">
            <?php // TODO optimize these! ?>
            <picture>
                <source media="(min-width:992px)" srcset="/assets/logo-iso-desktop.png" width="194" height="69">
                <img src="/assets/logo-iso.png" width="138" height="47" alt="ISO">
            </picture>
            <picture>
                <source media="(min-width:992px)" srcset="/assets/logo-tcsb-desktop.png" width="79" height="79">
                <img src="/assets/logo-tcsb.png" width="56" height="57" alt="Ministry of Health">
            </picture>
            <picture>
                <source media="(min-width:992px)" srcset="/assets/logo-jci-desktop.png" width="202" height="110">
                <img src="/assets/logo-jci.png" width="144" height="41" alt="Joint Commission International">
            </picture>
        </div>
    </div>

    <script>
    const media_query_desktop = window.matchMedia("(min-width: 992px)")
    desktopMQLE(media_query_desktop)
    media_query_desktop.onchange = desktopMQLE

    function desktopMQLE(event) {
        // Update organization images' parent!
        const org_section = document.getElementById("org-section")

        if (event.matches)
            document.getElementById("hero-content").appendChild(org_section)
        else
            document.getElementById("hero").appendChild(org_section)
    }
    </script>
</section>