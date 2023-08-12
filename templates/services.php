<section id="services">
    <div class="container">
        <h2 class="section-title"><?= TR['services_title'] ?></h2>
        <div class="card-container">
            <?php foreach (TR['services_details'] as $i => $key_value_pair): ?>
                <div class="card-wrapper">
                    <div class="card">
                        <div class="card-icon-container">
                            <img src="<?= get_img_path('ico-service-' . $i + 1 . '.svg') ?>" alt="" loading="lazy">
                            <?php // width="50" height="50" for bbl... ?>
                        </div>
                        <h2 class="card-title"><strong><?= $key_value_pair[0] ?></strong></h2>
                        <p class="card-text"><?= $key_value_pair[1] ?></p>
                    </div>
                    <a class="button black" href="<?= generate_wp_link(WHATSAPP_NUMBER, $key_value_pair[0]) ?>"
                       target="_blank">
                        <?= TR['service_card_button'] ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
