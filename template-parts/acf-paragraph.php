<?php
if( get_row_layout() == 'paragraph' ) : 
    $para_image = get_sub_field('para_image');
    $layout = get_sub_field('layout');
    
    if( have_rows('inhalte') ) : 
        while ( have_rows('inhalte') ) : the_row(); 
            $position = get_sub_field('position');
            $headline_S = get_sub_field('headline_S'); 
            $headline_L = get_sub_field('headline_L'); 
            $texte = get_sub_field('texte'); 
            $hat_button = get_sub_field('hat_button'); 
            $section_id = generate_id($headline_L) ?>

            <section class="paragraph <?php echo ($position == 'oben') ? 'paragraph_high' : 'paragraph_low'?><?php echo ($layout == 'img_links') ? '' : ' para_reverse'?>" id="<?php echo $section_id ?>">
                <div class="paragraph__left" id="left">
                    <img src="<?php echo $para_image ?>" alt="<?php echo $headline_L ?>">
                </div>
                <div class="paragraph__right" id="right">
                    <div class="paragraph__right__inner">
                        <div class="paragraph__headlines">
                            <h3><?php echo $headline_S ?></h3>
                            <h2><?php echo $headline_L ?></h2>
                        </div>
                        <div class="paragraph__content">
                            <?php echo $texte ?>
                        </div>
                        <?php if ($hat_button) :
                            $button_text = get_sub_field('button_text'); 
                            $button_link = get_sub_field('button_link'); ?>   
                            
                            <div class="btn_icon_fade_wrapper">
                                <div class="btn_icon_fade_wrap1"></div>
                                <div class="btn_icon_fade_wrap2">
                                    <button class="btn_icon_fade" onclick="window.open('<?php echo $button_link ?>')">
                                        <?php echo $button_text ?>
                                    </button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        
        <?php endwhile;
    endif; ?>

<?php endif; ?>