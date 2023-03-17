<?php
/**
 * template footer.php
 */
?>

<footer class="site__footer">
    <code>pied de page</code>
    <?php 
        wp_footer();
        $leMenu = "menu-footer";
        wp_nav_menu(array(
            "menu" => $leMenu,
            "container" => "nav"
        ));
    ?>
</footer>
</body>
</html>