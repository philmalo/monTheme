<?php
get_header()
?>
<main class="site__main">
    <code>front-page.php</code>

    <section class="liste-articles">
    <?php if (have_posts()):
        while(have_posts()): the_post();?>
        <?php get_template_part("template-parts/categorie", "notes-wp");?>
        <?php endwhile;?>
    <?php endif;?>
    </section>
</main>

<?php
get_footer()
?>