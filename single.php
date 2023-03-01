<?php
get_header()
?>
<main class="site__main">
    <code>single.php</code>
    <section class="item-unitaire">
        <?php if (have_posts()):
            while(have_posts()): the_post();?>
            <article class="carte-information">
                <?php the_title('<h1>', '</h1>');?>
                <div>
                    <?php the_content(); //le contenu ?>
                </div>
            </article>
            <?php
            endwhile;
        endif;
        ?>
    </section>
</main>

<?php
get_footer()
?>