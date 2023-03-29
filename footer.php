<?php
/**
 * template footer.php
 */
?>

<footer class="site__footer">
    <code>pied de page</code>
    <section class="widgets">
        <div><?php dynamic_sidebar( 'pied-page-1' ); ?></div>

        <div><?php dynamic_sidebar( 'pied-page-2' ); ?></div>
        <div><?php dynamic_sidebar( 'pied-page-3' ); ?></div>
    </section>
    <section>

    </section>
    <section class="navFooter">
        <?php 
        wp_nav_menu(array(
            "menu" => "menu-footer",
            "container" => "nav"
        ));
        ?>
    </section>
    <?php wp_footer(); ?>
</footer>
</body>
</html>