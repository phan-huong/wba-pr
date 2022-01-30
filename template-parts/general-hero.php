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
                $infobox_titel_L = get_sub_field('infobox_titel_L'); 
                $hat_button = get_sub_field('hat_button'); ?>

                <div class="hero_infobox<?php echo ($hat_button) ? null : ' no_btn' ?>">
                    <div class="hero_infobox__inner">
                        <h2><?php echo $infobox_titel_S ?></h2>
                        <h1><?php echo $infobox_titel_L ?></h1>

                        <?php if ($hat_button) : 
                            $button_text = get_sub_field('button_text');
                            $button_link = get_sub_field('button_link'); ?>
                            
                            <div class="btn_icon_animated_wrapper">
                                <div class="btn_icon_animated_wrap1"></div>
                                <div class="btn_icon_animated_wrap2">
                                    <button class="btn_icon_animated" onclick="window.open('<?php echo $button_link ?>')">
                                        <?php echo $button_text ?>
                                    </button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile;
        endif; 
    endif; ?>
</section>