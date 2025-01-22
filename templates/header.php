<header>
    <div class="container">
        <img src="/assets/dentfix-logo-1.svg" width="153" height="39" alt="logo" />
        <nav>
            <?php foreach (TR['nav_menu'] as $key => $value): ?>
            <a href="#<?= $key ?>"><?= $value ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>