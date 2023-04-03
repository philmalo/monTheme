<?php
/**
 * Template name: Evenement
 *
 */
?>

<?php get_header(); ?>
<main class="site__main">
    <section class="carte-information">
        <?php if ( have_posts() ) : the_post(); ?>
        <h1><?= get_the_title(); ?></h1>
        <?php the_content();?>
        <p>L'adresse de l'evénement: <?php the_field('adresse'); ?></p>
        <p>La date et l'heure de l'événement: <?php the_field('date_de_levenement'); echo ", "; the_field('heure');?></p>
        <?php the_post_thumbnail('medium_large'); ?>
        <?php endif;?>
    </section>
</main><!-- #main -->
<?php
get_footer();