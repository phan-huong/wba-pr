<?php if( get_row_layout() == 'news_archive' ) :
    $news_anzeigen = get_sub_field('news_anzeigen');
    $news_nr = get_sub_field('news_nr'); ?>

    <section class="news">
        <?php
            $news = new WP_Query( array(
                'post_type' => 'news',
                // 'orderby' => 'date',
                'order' => 'asc',
                'post_status' => 'publish',
                'paged' => 1,
                'posts_per_page' => $news_nr
                )
            );
            if( $news->have_posts() ) : while( $news->have_posts() ) : $news->the_post(); ?>
                <div class="news__item">
                    <?php the_post_thumbnail('post-thumbnail', ''); ?>
                    <div class="news__item__link">
                        <a onclick="window.open('<?php the_field('link_mailchimp') ?>')">
                            <?php the_field('text') ?>
                        </a>
                    </div>
                </div>
            <?php endwhile; endif;
        ?>
    </section>

<?php endif; ?>