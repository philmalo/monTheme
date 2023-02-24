<?php
get_header()
?>
<main>
    <code>front-page.php</code>

    <section class="liste-articles">
    <?php if (have_posts()):
        while(have_posts()): the_post();?>
            <article>
                <h3><?= get_the_title();?></h3>
            
                <p><?php echo wp_trim_words( get_the_excerpt(), 15);?></p>
                <a href="<?php the_permalink();?>">En savoir plus&#9758;</a>
                <!-- wp_trim_words requiert un echo car il retourne une chaîne de caractères, get_the_excerpt fait un return, the_excerpt fait un echo par lui-même,d'où le get_the_excerpt -->
            </article>
        <?php endwhile;?>
    <?php endif;?>
    </section>
</main>

<?php
get_footer()
?>