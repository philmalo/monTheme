<?php
/**
 * modele index.php représente le modèle par défaut
 */
get_header()
?>
<main class="site__main">
    <code>index.php</code>
        <?php 
        if (have_posts()):
            while(have_posts()): the_post();?>
                <h1><a href="<?php the_permalink();?>"><?= get_the_title();?></a></h1>
                <!-- the_content(); le contenu
                the_excerpt(); un résumé -->
                <?php echo wp_trim_words( get_the_excerpt(), 4);?>
                <!-- wp_trim_words requiert un echo car il retourne une chaîne de caractères, get_the_excerpt fait un return, the_excerpt fait un echo par lui-même,d'où le get_the_excerpt -->
            <?php endwhile;
        endif;
        ?>
</main>

<?php
get_footer()
?>