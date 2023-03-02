<?php
    /**
     * template-part qui permettra d'afficher un bloc d'articles dans la classe liste-articles
     */

    $titre = get_the_title();
    // if(substr($titre, 0, 1) == "0"){}
?>

<article>
    <h5><a href="<?php the_permalink();?>"><?= $titre?></a></h5>
    <p><?=wp_trim_words( get_the_excerpt(), 8);?></p>
    <a href="<?php the_permalink();?>">En savoir plus sur &#9758;<?= $sigle;?></a>
</article>