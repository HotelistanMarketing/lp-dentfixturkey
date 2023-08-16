<section id="before-after">
    <div class="container">
        <h2 class="section-title"><?= TR['ba_title'] ?></h2>
        <div id="ba-swiper" class="swiper">
            <div class="swiper-wrapper gallery">
                <?php for ($i = 1; $i < 11; $i++): ?>
                    <div class="swiper-slide">
                        <?php get_img(src: 'ba-' . $i . '.jpeg', alt: 'before & after'); ?>
                    </div>
                <?php endfor ?>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <a class="button" href="<?= WHATSAPP_LINK ?>"><?= TR['ba_button'] ?></a>
    </div>
</section>