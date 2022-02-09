<section class="page_hero">
    <?php 
    $bkg_img = get_field('bkg_img_kunden_archive', 'options');
    $hat_infobox = get_field('hat_infobox_kunden_archive', 'options'); ?>
        
    <img class="page_hero__img" src="<?php echo $bkg_img ?>" alt="">

    <?php if ($hat_infobox) :
        if( have_rows('infobox_kunden_archive', 'options' ) ): 
            while ( have_rows('infobox_kunden_archive', 'options') ) : the_row(); 
                $headline_S = get_sub_field('headline_S', 'options');
                $headline_L = get_sub_field('headline_L', 'options'); ?>

                <div class="hero_infobox">
                    <div class="hero_infobox__inner">
                        <h2><?php echo $headline_S ?></h2>
                        <h1><?php echo $headline_L ?></h1>
                    </div>
                </div>
            <?php endwhile;
        endif; 
    endif; ?>
</section>