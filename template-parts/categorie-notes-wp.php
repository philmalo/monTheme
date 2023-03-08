<?php
    /**
     * template-part qui permettra d'afficher un bloc d'articles dans la classe liste-articles
     */
    //TODO LE SIGLE EST LAID 
    $titre = get_the_title();
    $sigle = substr($titre, 0,7);
    // if(substr($titre, 0, 1) == "0"){}
?>

<article>
    <h5><a href="<?php the_permalink();?>"><?= $titre?></a></h5>
    <p><?=wp_trim_words( get_the_excerpt(), 8);?></p>
    <a href="<?php the_permalink();?>">En savoir plus sur &#9758;<?= $sigle;?></a>
</article>