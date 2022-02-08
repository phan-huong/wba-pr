<?php get_header(); ?>

<section class="kunden">
    <div class="kunden__wrapper">
        <?php
            $kunden = new WP_Query( array(
                'post_type' => 'kunden',
                'orderby' => 'date',
                'post_status' => 'publish',
                // 'paged' => 1,
                // 'posts_per_page' => 4
                )
            );
            if( $kunden->have_posts() ) : while( $kunden->have_posts() ) : $kunden->the_post(); ?>
                <div class="kunden__item">
                    <?php the_post_thumbnail(); ?>
                    <!-- <div class="kunden__item__logo"> -->
                        <img class="kunden__item__logo" src="<?php the_field('kundenlogo') ?>" alt="<?php the_title() ?>">
                    <!-- </div> -->
                    <div class="kunden__item__link">
                        <a onclick="window.open('<?php the_permalink() ?>')">
                            <?php echo (get_locale() == 'en_US') ? 'Learn more' : 'Mehr erfahren' ?>
                        </a>
                    </div>
                    <div class="kunden__item__border"></div>
                </div>
            <?php endwhile; endif;
        ?>
    </div>
</section>

<?php
    if( have_rows('main_blocks') ):
        while ( have_rows('main_blocks') ) : the_row();
            $layout = get_row_layout();
            get_template_part('template-parts/acf', $layout);
        endwhile;
    else : null;
    endif;
?>

<?php get_footer(); ?>