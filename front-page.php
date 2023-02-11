<?php
get_header()
?>
<main>
    <code>front-page.php</code>
    <?php 
    if (have_posts()):?>
        <div class="conteneur-front-page">
        <?php while(have_posts()): the_post();?>
            <section class="informations">
            <h1><a href="<?php the_permalink();?>"><?= get_the_title()?></a></h1>
            
            <?php echo wp_trim_words( get_the_excerpt(), 4);?>
            <!-- wp_trim_words requiert un echo car il retourne une chaîne de caractères, get_the_excerpt fait un return, the_excerpt fait un echo par lui-même,d'où le get_the_excerpt -->
            </section>
        <?php endwhile;?>
        </div>
    <?php endif;?>
</main>

<?php
get_footer()
?>