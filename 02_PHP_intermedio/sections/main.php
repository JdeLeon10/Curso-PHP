<main>
    <section>
        <img 
            src="<?= $data["poster_url"];?>" width="300" alt="Poster de <?= $data["title"];?>"
            title="Poster de <?= $data["title"];?>" loading="lazy" style="border-radius: 16px"
        />
    </section>
    <hgroup>
        <h1><?= $data["title"];?> - <?=$untilMessage ?></h1>
        <p> Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p> La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>