<section id="influencers">
    <div class="container">
        <h2 class="section-title"><?= TR['influencers_title'] ?></h2>
        <div class="videos">
            <?php
            $videos = ['9rYk4Pv8ZiY', 'YNL9oC2jx6k', 'EjzJmQbxmPY'];
            $names = ['Marwan', 'Daam', 'Almudna'];
            foreach ($videos as $index => $id): ?>
                <iframe src="https://www.youtube.com/embed/<?= $id ?>"
                        title="<?= $names[$index] ?>’s Experience with Dentfix Turkey"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                        gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                        loading="lazy">
                </iframe>
            <?php endforeach ?>
        </div>
    </div>
</section>