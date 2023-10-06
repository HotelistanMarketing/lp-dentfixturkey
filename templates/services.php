<section id="services">
    <div class="container">
        <h2 class="section-title"><?= TR['package_title'] ?></h2>
        <?php // TODO wrap in slider ?>
        <div class="card-container">
            <?php foreach (TR['package_details'] as $i => $key_val_pair): ?>
                <div class="card">
                    <img src="/assets/ico-pkg-<?= $i + 1 ?>.svg" alt="" loading="lazy">
                    <h2 class="card-title"><strong><?= $key_val_pair[0] ?></strong></h2>
                    <p class="card-text"><?= $key_val_pair[1] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <?php get_wp_button(TR['service_card_button']) ?>
    </div>
</section>
