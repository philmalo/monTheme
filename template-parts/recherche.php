<article>
    <code>recherche.php</code>
    <h5><?= get_the_title()?></h5>
    <?=wp_trim_words( get_the_excerpt(), 30);?>
    <a href="<?php the_permalink();?>">En savoir plus&#9758;</a>
    <!-- wp_trim_words requiert un echo car il retourne une chaîne de caractères, get_the_excerpt fait un return, the_excerpt fait un echo par lui-même,d'où le get_the_excerpt -->
</article>