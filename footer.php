<?php
/**
 * template footer.php
 */
?>

<footer class="site__footer">
    <code>pied de page</code>
    <?php 
        wp_footer();
        wp_nav_menu(array(
            "menu" => "menu-footer",
            "container" => "nav"
        ));
    ?>
</footer>
</body>
</html>