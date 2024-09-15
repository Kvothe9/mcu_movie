<main>
    <section> 
        <img src="<?= $following_production["poster_url"] ?>" width="325" alt="Poster de <?= $title ?>" 
        style="border-radius: 16px"/>
    </section>

     <hgroup>
        <h3><?= $following_production["title"] ?> - <?= $until_message ?></h3>
        <p>Fecha de estreno: <?= $following_production["release_date"] ?></p>
        <p>Tipo de producción: <?= $following_production["type"] ?></p>
        <p> <----  <a href="index.php"> <?= $data["title"]; ?></p>
     </hgroup>
</main>