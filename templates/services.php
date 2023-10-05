<section id="services">
    <div class="container">
        <h2 class="section-title"><?= TR['services_title'] ?></h2>
        <div class="card-container">
            <?php foreach (TR['services_details'] as $i => $details_arr): ?>
                <div class="card">
                    <div class="card-title-wrapper">
                        <?php get_img(src: 'service-' . $i + 1 . '.jpg'); ?>
                        <h2 class="card-title"><strong><?= $details_arr[0] ?></strong></h2>
                    </div>
                    <?php $arr_size = sizeof($details_arr); ?>
                    <?php if ($arr_size > 2): ?>
                        <strong class="card-subtitle"><?= $details_arr[1] ?></strong>
                        <ul class="card-list">
                            <?php for ($li = 2; $li < $arr_size; $li++): ?>
                                <li>
                                    <a href="<?= get_wp_link(WHATSAPP_NUMBER, $details_arr[$li]) ?>" target="_blank">
                                        <?= $details_arr[$li] ?>
                                    </a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    <?php else: ?>
                        <p class="card-text"><?= $details_arr[1] ?></p>
                    <?php endif ?>
                    <a class="button" href="<?= get_wp_link(WHATSAPP_NUMBER, $details_arr[0]) ?>" target="_blank">
                        <?= TR['service_card_button'] ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
