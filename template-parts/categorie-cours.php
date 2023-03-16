<?php
    /**
     * template-part qui permettra d'afficher un bloc d'articles dans la classe liste-articles
     */
    //TODO améliorer le code, notamment $duree et $titrelong pour enlever la durée
    $titre = get_the_title();
    $sigle = substr($titre, 0,7);
    $titreLong = substr($titre, 7, -5);
    if(preg_match('/\((.*?)\)/', $titre, $temps) == 1){
        $duree = $temps[1];
    }
?>

<article>
    <h5><?= $titreLong?></h5>
    <p><?=wp_trim_words( get_the_excerpt(), 8);?></p>
    <h6><?=$duree;?></h6>
    <a href="<?php the_permalink();?>">Consulter &#9758;<?= $sigle?></a>
</article>