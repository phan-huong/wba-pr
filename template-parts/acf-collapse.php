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
                    $button_oder_text = get_sub_field('button_oder_text'); 
                    $index = get_row_index(); ?>

                    <div class="collapse__item<?php echo ($index == 1) ? ' collapse_active' : null ?>">
                        <img src="<?php echo $bkg_img ?>" alt="<?php echo $item_titel ?>">
                        <div class="collapse__item__content<?php echo ($button_oder_text == 'button') ? null : ' with_text' ?>">
                            <h2><?php echo $item_titel ?></h2>
                            <?php if ($button_oder_text == 'button') : 
                                $button_text = get_sub_field('button_text'); 
                                $button_link = get_sub_field('button_link'); ?>
                                <button class="btn_arrow" onclick="window.open('<?php echo $button_link ?>')">
                                    <?php echo $button_text ?>
                                </button>
                            <?php elseif ($button_oder_text == 'text') : 
                                $text = get_sub_field('text');  ?>
                                <div class="collapse__item__content__text">
                                    <?php echo $text ?>
                                </div>
                            <?php else : null; endif; ?>
                        </div>
                    </div>

                <?php endwhile;
            endif; ?>
        </div>
    </section>
<?php endif; ?>