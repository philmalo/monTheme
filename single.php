<?php
get_header()
?>

<main class="site__main">
    <code>single.php</code>
    <section class="item-unitaire">
            <?php $mon_single = "cours";
            if(in_category('notes-wp')){$mon_single = "notes";}
            get_template_part("template-parts/single", $mon_single); ?>
    </section>
</main>

<?php
get_footer()
?>