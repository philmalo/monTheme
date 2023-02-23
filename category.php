<?php
/**
 * modele category.php permet d'afficher une archive par catégorie d'article
 */
get_header()?>
<main>
    <code>category.php</code>
    <section class="blocflex">

        <?php 
        if (have_posts()):
            while(have_posts()): the_post();?>
            <article>
                <h5><a href="<?php the_permalink();?>"><?= get_the_title()?></a></h5>

                <p><?=wp_trim_words( get_the_excerpt(), 10);?></p>
                <!-- wp_trim_words requiert un echo car il retourne une chaîne de caractères, get_the_excerpt fait un return, the_excerpt fait un echo par lui-même,d'où le get_the_excerpt -->
                </article>
                <?php endwhile;
                    endif;
                ?>
    </section>
</main>

<?php
get_footer()
?>