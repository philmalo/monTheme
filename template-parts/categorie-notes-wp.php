<?php
    /**
     * template-part qui permettra d'afficher un bloc d'articles dans la classe liste-articles
     */
    //TODO LE SIGLE EST LAID 
    $titre = get_the_title();
    $titrePropre = substr($titre, 3);
    // $sigle = substr($titre, 0,2);
    // if(substr($titre, 0, 1) == "0"){}
?>

<article>
    <h5><a href="<?php the_permalink();?>"><?= $titrePropre?></a></h5>
    <p><?=wp_trim_words( get_the_excerpt(), 8);?></p>
    <a href="<?php the_permalink();?>">Consulter &#9758;<?= $titrePropre;?></a>
</article>