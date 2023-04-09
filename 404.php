<?php
/**
 * modele index.php représente le modèle par défaut
 */
get_header()
?>
<main class="site__main">
    <code>404.php</code>
    <?php get_template_part("template-parts/categorie", "erreur404");?>
</main>

<?php
get_footer()
?>