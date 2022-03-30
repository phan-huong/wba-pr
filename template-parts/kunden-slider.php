<section class="page_hero">
    <?php $images = get_field('kunden_slider');
    if( $images ): ?>
        <div class="splide kunden_slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach( $images as $image ): ?>
                        <li class="splide__slide">
                            <img class="page_hero__img" src="<?php echo esc_url($image['url']); ?>" alt="">
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="splide__arrows" id="arrows">
                <button class="splide__arrow splide__arrow--prev">
                    <img src="<?php echo ThemeURL ?>/assets/icon/arrow-left-gold.svg" alt="">
                </button>
                <button class="splide__arrow splide__arrow--next">
                    <img src="<?php echo ThemeURL ?>/assets/icon/arrow-right-gold.svg" alt="">
                </button>
                <div class="slider__pagination">
                    <p><span class="slider__active">1</span> / <span class="slider__length">null</span></p>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="kunden_hero" id="kunden_hero">
        <?php if( have_rows('kunden_infobox') ) : ?>
            <div class="kunden_infobox">
                <?php while ( have_rows('kunden_infobox') ) : the_row(); 
                    $headline_S = get_sub_field('headline_S');
                    $headline_L = get_sub_field('headline_L');
                    $texte = get_sub_field('texte'); ?>

                    <div class="kunden_infobox__outer" id="infobox_outer">
                        <div class="kunden_infobox__inner">
                            <h3><?php echo $headline_S ?></h3>
                            <h2><?php echo $headline_L ?></h2>
                            <div class="kunden_infobox__inner__content"><?php echo $texte ?></div>
                            <div class="kunden_infobox__inner__btn">
                                <?php if( have_rows('button_links') ) :
                                    while ( have_rows('button_links') ) : the_row(); 
                                        $button_text = get_sub_field('button_text');
                                        $button_link = get_sub_field('button_link'); ?>

                                        <div class="btn_icon_animated_wrapper">
                                            <div class="btn_icon_animated_wrap1"></div>
                                            <div class="btn_icon_animated_wrap2">
                                                <button class="btn_icon_animated" onclick="window.open('<?php echo $button_link ?>')"><?php echo $button_text ?></button>
                                            </div>
                                        </div>
                                    <?php endwhile; 
                                endif; ?>

                                <?php if( have_rows('button_rechts') ) :
                                    while ( have_rows('button_rechts') ) : the_row(); 
                                        $button_text = get_sub_field('button_text');
                                        $button_link = get_sub_field('button_link'); ?>

                                        <div class="btn_icon_animated_wrapper">
                                            <div class="btn_icon_animated_wrap1"></div>
                                            <div class="btn_icon_animated_wrap2">
                                                <button class="btn_icon_animated" onclick="window.open('<?php echo $button_link ?>')"><?php echo $button_text ?></button>
                                            </div>
                                        </div>
                                    <?php endwhile; 
                                endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="kunden_hero__logo">
                <img src="<?php the_field('kundenlogo') ?>" alt="">
            </div>

            <script>
                document.addEventListener( 'DOMContentLoaded', function() {
                    var kunden_slider = new Splide( '.kunden_slider', {
                        type   : 'loop',
                        speed : '1000',
                        pagination: false
                    } );

                    kunden_slider.mount();

                    kunden_slider.on ('move', () => {
                        console.log(kunden_slider.index + 1);

                        const actives = Array.from(document.getElementsByClassName('slider__active'));
                        actives.forEach(active => {
                            active.innerHTML = String(kunden_slider.index + 1);
                        });
                    })

                    const items = Array.from(document.getElementsByClassName('slider__length'));
                    items.forEach(item => {
                        item.innerHTML = String(kunden_slider.length);
                    });

                } );
            </script>
        <?php endif; ?>
    </div>
</section>

