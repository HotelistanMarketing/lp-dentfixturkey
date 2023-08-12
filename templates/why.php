<section class="why">
    <div class="container">
        <div id="contact" class="form-box">
            <h2 class="section-title"><?= TR['form_title'] ?></h2>
            <p><?= TR['form_description'] ?></p>

            <form id="contactForm" action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads4841144000105221001
                  method='POST'
                  onSubmit='javascript:document.charset="UTF-8"; return formFieldCheck()'
                  accept-charset='UTF-8'>
                <?= include get_template('form.php') ?>
            </form>
        </div>

        <section class="content">
            <h2 class="section-title"><?= TR['why_title'] ?></h2>
            <ul>
                <?php foreach (TR['why'] as $item): ?>
                    <li>
                        <p><?= $item ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </div>
</section>