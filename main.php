<main>
    <section> 
        <img src="<?= $poster_url ?>" width="325" alt="Poster de <?= $title ?>" 
        style="border-radius: 16px"/>
    </section>

     <hgroup>
        <h3><?= $title ?> - <?= $until_message ?>, en <?= $days_until ?> días</h3>
        <p>Fecha de estreno: <?= $release_date ?></p>
        <p>Tipo de producción: <?= $type ?></p>
        <p>Siguiente estreno de Marvel: <a href="second.php"> <?= $following_production["title"]; ?> </a></p>
     </hgroup>
</main>