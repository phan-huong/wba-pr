<?php if( get_row_layout() == 'collapse' ) : 
    $headline_S = get_sub_field('headline_S');
    $headline_L = get_sub_field('headline_L'); ?>

    <section class="collapse_wrapper">
        <div class="collapse_headlines">
            <h3><?php echo $headline_S ?></h3>
            <h2><?php echo $headline_L ?></h2>
        </div>
        <div class="collapse">
            <?php if( have_rows('collapse_items') ) : 
                while ( have_rows('collapse_items') ) : the_row(); 
                    $item_titel = get_sub_field('item_titel');
                    $bkg_img = get_sub_field('bkg_img'); 
                    $button_text = get_sub_field('button_text'); 
                    $button_link = get_sub_field('button_link'); 
                    $index = get_row_index(); ?>

                    <div class="collapse__item<?php echo ($index == 1) ? ' collapse_active' : null ?>">
                        <img src="<?php echo $bkg_img ?>" alt="<?php echo $item_titel ?>">
                        <div class="collapse__item__content">
                            <h2><?php echo $item_titel ?></h2>
                            <button class="btn_arrow" onclick="window.open('<?php echo $button_link ?>')">
                                <?php echo $button_text ?>
                            </button>
                        </div>
                    </div>

                <?php endwhile;
            endif; ?>
        </div>
    </section>
<?php endif; ?>