<section id="before-after">
    <div class="container">
        <h2 class="section-title"><?= TR['ba_title'] ?></h2>
        <div id="ba-swiper" class="swiper">
            <div class="swiper-wrapper gallery">
                <?php for ($i = 1; $i < 14; $i++): ?>
                <div class="swiper-slide">
                    <img src="<?= '/assets/ba-' . $i . '.jpg' ?>" alt="before & after">
                </div>
                <?php endfor ?>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <?php get_wp_button(TR['ba_button']) ?>
    </div>
</section>