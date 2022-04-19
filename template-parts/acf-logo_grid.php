<?php if( get_row_layout() == 'logo_grid' ) : ?>
    <section class="logo_grid">
        <div class="logo_grid__first_row">
            <?php if( have_rows('logos_first_row') ) : 
                while ( have_rows('logos_first_row') ) : the_row(); 
                    $logo = get_sub_field('logo'); ?>

                    <div class="logo_grid__img">
                        <img src="<?php echo $logo ?>">
                    </div>

                <?php endwhile;
            endif; ?>
        </div>
        <div class="logo_grid__second_row">
            <?php if( have_rows('logos_second_row') ) : 
                while ( have_rows('logos_second_row') ) : the_row(); 
                    $logo = get_sub_field('logo'); ?>

                    <div class="logo_grid__img">
                        <img src="<?php echo $logo ?>">
                    </div>

                <?php endwhile;
            endif; ?>
        </div>
    </section>
<?php endif; ?>