<section id="hospital">
    <div class="container">
        <h2 class="section-title"><?= TR["hospital_title"] ?></h2>
        <div class="gallery">
            <?php for ($i = 1; $i < 6; $i++): ?>
                <picture>
                    <?php get_desktop_pic(src: 'hospital-desktop-' . $i . '.jpg'); ?>
                    <?php get_img(src: 'hospital-' . $i . '.jpg', alt: 'hospital'); ?>
                </picture>
            <?php endfor ?>
        </div>
    </div>
</section>
