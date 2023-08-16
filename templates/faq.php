<section id="faq">
    <div class="container">
        <div class="faq-wrapper">
            <h2 class="section-title"><?= TR['faq_title'] ?></h2>
            <ul class="accordion">
                <?php foreach (TR['faq'] as $index => $key_value_pair): ?>
                    <li class="accordion-item">
                        <div class="accordion-header <?= $index ? '' : 'expanded' ?>">
                            <h3 class="accordion-title"><?= $key_value_pair[0] ?></h3>
                            <img class="accordion-sign" src="/assets/ico-chevron.svg" alt="toggle"
                                 width="15" height="7" loading="lazy">
                        </div>
                        <p class="accordion-content" style="<?= $index ? '' : 'display:block;' ?>">
                            <?= $key_value_pair[1] ?>
                        </p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php get_img(src: 'faq.jpg', alt: 'dental treatment', retina: true) ?>
    </div>
</section>
