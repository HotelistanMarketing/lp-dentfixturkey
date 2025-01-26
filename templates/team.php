<section id="team">
    <div class="container">
        <h2 class="section-title"><?= TR['team_title'] ?></h2>

        <div class="team-wrapper">
            <?php foreach (TR['team_details'] as $member): ?>
            <div class="team-card">
                <img src="<?= $member[1] ?>" alt="<?= $member[0] ?>" loading="lazy" class="team-photo">
                <h3 class="team-name"><?= $member[0] ?></h3>
                <?php if (isset($member[2])): ?>
                <p class="team-position"><?= $member[2] ?></p>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
#team {
    padding: 40px 0;
}

.team-wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    row-gap: 20px;
    column-gap: 18px;
}

@media (max-width: 768px) {
    .team-wrapper {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .team-wrapper {
        grid-template-columns: repeat(1, 1fr);
    }
}

.team-card {
    text-align: center;
    background-color: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.team-card:hover {
    transform: translateY(-10px);
}

.team-photo {
    width: 100%;
    max-width: 150px;
    height: auto;
    margin: 0 auto 15px;
    border-radius: 50%;
    border: 4px solid #f3f3f3;
}

.team-name {
    font-size: 18px;
    font-weight: bold;
    color: #333;
}

.team-position {
    font-size: 14px;
    color: #666;
    margin-top: 5px;
}

/* Slider navigasyon butonlarının görünümünü iyileştirme */
.swiper-button-prev,
.swiper-button-next {
    color: #333;
    transition: color 0.3s ease;
}

.swiper-button-prev:hover,
.swiper-button-next:hover {
    color: #000;
}

.swiper-pagination-bullet-active {
    background: #333;
}
</style>