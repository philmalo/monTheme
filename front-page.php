<?php
get_header()
?>
<main>
    <code>front-page.php</code>
    <section class="conteneur-front-page">
    <?php if (have_posts()):?>
        <?php while(have_posts()): the_post();?>
            <article class="informations">
                <h3><a href="<?php the_permalink();?>"><?= get_the_title()?></a></h3>
            
                <p><?php echo wp_trim_words( get_the_excerpt(), 4);?></p>
                <!-- wp_trim_words requiert un echo car il retourne une chaîne de caractères, get_the_excerpt fait un return, the_excerpt fait un echo par lui-même,d'où le get_the_excerpt -->
            </article>
        <?php endwhile;?>
    <?php endif;?>
    </section>
</main>

<?php
get_footer()
?>