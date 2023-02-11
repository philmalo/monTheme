<?php
get_header()
?>
<main>
    <code>single.php</code>
    <?php 
    if (have_posts()):
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
</main>

<?php
get_footer()
?>