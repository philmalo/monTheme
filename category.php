<?php
/**
 * modele category.php permet d'afficher une archive par catégorie d'article
 */
get_header()?>

<main>
<code>category.php</code>
    <section class="liste-articles">
        <?php
        $category = get_queried_object();
        $args = array(
            'category_name' => $category->slug,
            'orderby' => 'title',
            'order' => 'ASC'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>
            <article>
            <h3><?= get_the_title();?></h3>
            <p><?php echo wp_trim_words( get_the_excerpt(), 8);?></p>
            <a href="<?php the_permalink();?>">En savoir plus&#9758;</a>
            </article>
        <?php endwhile; ?>
        <?php endif;
        wp_reset_postdata();?>
    </section>
</main>
<?php
get_footer()
?>