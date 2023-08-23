<section id="why">
    <div class="container">
        <div id="contact" class="form-box">
            <h2 class="section-title"><?= TR['form_title'] ?></h2>
            <p><?= TR['form_description'] ?></p>
            <?php include get_template('form.php', common: true) ?>
        </div>

        <section class="why">
            <h2 class="section-title"><?= TR['why_title'] ?></h2>
            <ul>
                <?php foreach (TR['why'] as $index => $item): ?>
                    <li>
                        <span><?= $item ?></span>
                        <span><?= TR['why_descriptions'][$index] ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </div>
</section>