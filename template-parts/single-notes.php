<article class="carte-information">
    <code>single-notes.php</code>
    <?php 
    $titre = get_the_title();
    $titreFormattage = str_replace("-", " ", $titre);
    $titrePropre = substr($titreFormattage, 3);
    ?>
    <h1><?= ucfirst($titrePropre); ?></h1>
    <div>
        <?php the_content(); //le contenu ?>
    </div>
</article>