<header>
    <div class="container">
        <?php if ($_SERVER['HTTP_HOST'] === 'dentaltreatmentsturkey'): ?>
        <img src="/assets/logo-2.svg" width="153" height="39" alt="logo" />
        <?php else: ?>
        <img src="/assets/dentfix-logo-1.svg" width="153" height="39" alt="logo" />
        <?php endif; ?>
        <nav>
            <?php foreach (TR['nav_menu'] as $key => $value): ?>
            <a href="#<?= $key ?>"><?= $value ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>