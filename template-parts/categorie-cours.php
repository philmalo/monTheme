<?php
    /**
     * template-part qui permettra d'afficher un bloc d'articles dans la classe liste-articles
     */
    $titre = get_the_title();
    $sigle = substr($titre, 0,7);
    $titreLong = substr($titre, 7);
    if(preg_match('/(\(.*?\))/', $titre, $temps) == 1){
        $duree = str_replace(["(", ")"], ["", ""], $temps[1]);
        $titreLong = str_replace($temps[1], "", $titreLong);
    }

?>

<article>
    <code>categorie-cours.php</code>
    <h5><?= $titreLong?></h5>
    <p><?=wp_trim_words( get_the_excerpt(), 8);?></p>
    <p><?php the_field('professeur');?></p>
    <p><?php the_field('domaine');?></p>
    <h6><?=$duree;?></h6>
    <a href="<?php the_permalink();?>">Consulter &#9758;<?= $sigle?></a>
</article>