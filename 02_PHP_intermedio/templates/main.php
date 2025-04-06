<main>
    <section>
        <img 
            src="<?= $poster_url?>" width="300" alt="Poster de <?= $title;?>"
            title="Poster de <?= $data["title"];?>" loading="lazy" style="border-radius: 16px"
        />
    </section>
    <hgroup>
        <h1><?= $title?> - <?=$untilMessage ?></h1>
        <p> Fecha de estreno: <?= $release_date?></p>
        <p> La siguiente es: <?= $following_production["title"]; ?></p>
    </hgroup>
</main>