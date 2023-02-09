<?php
/**
 * modele index.php représente le modèle par défaut
 */
get_header()
?>
<main>
    <h3>index.php</h3>
    <?php 
    if (have_posts()):
        while(have_posts()): the_post();
            the_title('<h1>', '</h1>');
            //the_content(); //le contenu
            //the_excerpt(); // un résumé
            echo wp_trim_words( get_the_excerpt(), 4); //wp_trim_words requiert un echo, get_the excerpt fait un return, the_excerpt fait un echo,d'où le get_the_excerpt
        endwhile;
    endif;
    ?>
</main>

<?php
get_footer()
?>