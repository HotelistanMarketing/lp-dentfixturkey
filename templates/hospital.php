<section id="hospital">
    <div class="container">
        <h2 class="section-title"><?= TR["hospital_title"] ?></h2>
        <div class="gallery">
            <?php for ($i = 1; $i < 6; $i++): ?>
                <picture>
                    <?php get_pic_source_mq(src: 'hospital-desktop-' . $i . '.jpg', bp: '600px'); ?>
                    <?php get_img(src: 'hospital-' . $i . '.jpg', alt: 'hospital'); ?>
                </picture>
            <?php endfor ?>
        </div>
    </div>
</section>
