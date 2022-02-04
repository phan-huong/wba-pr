<section class="page_hero">
    <?php 
    if( have_rows('kunden_archive_header', 'options') ): 
        while ( have_rows('kunden_archive_header', 'options') ) : the_row(); 
            $bkg_img = get_sub_field('bkg_img', 'options');
            $hat_infobox = get_sub_field('hat_infobox', 'options'); ?>
                
                <img class="page_hero__img" src="<?php echo $bkg_img ?>" alt="">

                <?php if ($hat_infobox) :
                    if( have_rows('infobox') ): 
                        while ( have_rows('infobox') ) : the_row(); 
                            $headline_S = get_sub_field('headline_S');
                            $headline_L = get_sub_field('headline_L'); ?>

                            <div class="hero_infobox">
                                <div class="hero_infobox__inner">
                                    <h2><?php echo $headline_S ?></h2>
                                    <h1><?php echo $headline_L ?></h1>
                                </div>
                            </div>
                        <?php endwhile;
                    endif; 
                endif; ?>

        <?php endwhile;
    endif; ?>
</section>