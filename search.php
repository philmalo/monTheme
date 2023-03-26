<?php
/**
 * modele search.php pour afficher les résultats de la recherche
 */
get_header()
?>
<main class="site__main">
    <code>search.php</code>
    <section class="resultats">
        <?php 
        if (have_posts()):
            while(have_posts()): the_post();?>
            <?php get_template_part("template-parts/recherche");?>
            <hr>
            <?php endwhile;
                endif;
            ?>
    </section>
</main>

<?php
get_footer()
?>