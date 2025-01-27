<footer id="footer">
    <div class="container">
        <img class="logo" src="/assets/dentfix-logo-1.svg" width="206" height="52" alt="logo" loading="lazy" />
        <div class="footer-info">
            <div>
                <img class="icon" src="/assets/ico-location.svg" width="20" height="20" alt="address" loading="lazy">
                <address><a href="<?= MAP_URL ?>"><?= ADDRESS ?></a></address>
            </div>
            <div>
                <img class="icon" src="/assets/ico-phone.svg" width="20" height="20" alt="phone" loading="lazy">
                <a href="tel:<?= PHONE_NUMBER ?>"><?= READABLE_PHONE_NUMBER ?></a>
            </div>
        </div>
    </div>

    <div class="secondary">
        <div class="container">
            <nav>
                <?php foreach (TR['nav_menu'] as $key => $value): ?>
                <a href="#<?= $key ?>"><?= $value ?></a>
                <?php endforeach; ?>
            </nav>
            <span class="copyright-text"><?= sprintf(TR['footer_copyright'], date('Y')) ?></span>
        </div>
    </div>
</footer>