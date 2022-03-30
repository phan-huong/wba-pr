<section class="page_hero">
    <?php
    $vid_or_img = get_field('vid_or_img');
    $hero_img = get_field('hero_img');
    $hero_video = get_field('hero_video');
    $hat_infobox = get_field('hat_infobox');

    if ($vid_or_img == 'img') : ?>
        <img class="page_hero__img" src="<?php echo $hero_img ?>" alt="">
    <?php elseif ($vid_or_img == 'vid') : ?>
        <video autoplay loop muted class="page_hero__video">
            <source type="video/mp4" src=<?php echo $hero_video ?>>
        </video> 
    <?php endif; ?>
    
    <?php if ($hat_infobox) :
        if( have_rows('hero_infobox') ): 
            while ( have_rows('hero_infobox') ) : the_row(); 
                $infobox_titel_S = get_sub_field('infobox_titel_S');
                $infobox_titel_L = get_sub_field('infobox_titel_L'); ?>

                <div class="hero_infobox">
                    <div class="hero_infobox__inner">
                        <h2><?php echo $infobox_titel_S ?></h2>
                        <h1><?php echo $infobox_titel_L ?></h1>
                    </div>
                </div>
            <?php endwhile;
        endif; 
    endif; ?>
</section>