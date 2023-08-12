<footer id="footer">
    <div class="container">
        <img class="logo" src="/assets/ico-logo-white.svg" width="206" height="52" alt="logo" loading="lazy"/>
        <div class="footer-info">
            <div>
                <img class="icon" src="/assets/ico-location.svg" width="20" height="20" alt="address" loading="lazy">
                <address>
                    19 Mayıs Mah. Etfal Hastanesi Sok.<br>
                    Kent Apt. Blok No: 2 İç Kapı No: 78<br>
                    <strong>Şişli / İstanbul</strong>
                </address>
            </div>
            <div>
                <img class="icon" src="/assets/ico-phone.svg" width="20" height="20" alt="phone" loading="lazy">
                <a href="tel:<?= PHONE_NUMBER ?>"><?= READABLE_PHONE_NUMBER ?></a>
            </div>
            <div>
                <img class="icon" src="/assets/ico-mail.svg" width="20" height="20" alt="mail" loading="lazy">
                <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>
            </div>
        </div>
        <div class="footer-social">
            <h4>Our Social Media</h4>
            <div>
                <a href="<?= FACEBOOK_LINK ?>" target="_blank">
                    <img src="/assets/ico-facebook.svg" alt="facebook" width="44" height="44" loading="lazy">
                </a>
                <a href="<?= INSTAGRAM_LINK ?>" target="_blank">
                    <img src="/assets/ico-instagram.svg" alt="instagram" width="44" height="44" loading="lazy">
                </a>
                <a href="<?= TIKTOK_LINK ?>" target="_blank">
                    <img src="/assets/ico-tiktok.svg" alt="tiktok" width="45" height="44" loading="lazy">
                </a>
            </div>
        </div>
        <img class="bg-logo" src="/assets/ico-logo-bg.svg" width="281" height="335" alt="logo" loading="lazy">
    </div>

    <div class="secondary">
        <div class="container">
            <nav>
                <?php foreach (TR['nav_menu'] as $key => $value): ?>
                    <a href="#<?= $key ?>"><?= $value ?></a>
                <?php endforeach; ?>
            </nav>
            <span class="copyright-text"><?= TR['footer_copyright'] ?></span>
        </div>
    </div>
</footer>
