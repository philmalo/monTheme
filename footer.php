<?php
/**
 * template footer.php
 */
?>

<footer class="site__footer">
    <code>pied de page</code>
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