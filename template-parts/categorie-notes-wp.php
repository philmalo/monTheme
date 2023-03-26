<?php
    /**
     * template-part qui permettra d'afficher un bloc d'articles dans la classe liste-articles
     */
    $titre = get_the_title();
    $titreFormattage = str_replace("-", " ", $titre);
    $titrePropre = substr($titreFormattage, 3);
?>

<article>
    <code>categorie-notes-wp.php</code>
    <h5><?= ucfirst($titrePropre) ?></h5>
    <p><?= wp_trim_words( get_the_excerpt(), 8); ?></p>
    <a href="<?php the_permalink();?>">Consulter &#9758;<?= $titrePropre; ?></a>
</article>