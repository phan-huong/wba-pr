<?php 
    get_header();
?>

<main>
    <?php
        if( have_rows('main_blocks') ):
            while ( have_rows('main_blocks') ) : the_row();
                $layout = get_row_layout();
                get_template_part('template-parts/acf', $layout);
            endwhile;
        else : null;
        endif;
    ?>
</main>

<?php get_footer(); ?>