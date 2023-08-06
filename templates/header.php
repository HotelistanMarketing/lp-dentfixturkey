<header>
    <div class="container">
        <img src="/assets/ico-logo.svg" width="236" height="59" alt="logo"/>
        <nav>
            <?php foreach (TR['nav_menu'] as $key => $value): ?>
                <a href="#<?= $key ?>"><?= $value ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>