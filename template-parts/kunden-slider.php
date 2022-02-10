<section class="kunden_hero">
    <?php if( have_rows('kunden_slider') ) : ?>
        <div class="splide text_slider">
            <div class="splide__arrows">
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
            <div class="splide__track">
                <ul class="splide__list">
                    <?php while ( have_rows('kunden_slider') ) : the_row(); 
                        $headline_S = get_sub_field('headline_S');
                        $headline_L = get_sub_field('headline_L');
                        $texte = get_sub_field('texte'); ?>

                        <li class="splide__slide">
                            <div class="splide__slide__container">
                                <h3><?php echo $headline_S ?></h3>
                                <h2><?php echo $headline_L ?></h2>
                                <div class="text_slider__content"><?php echo $texte ?></div>
                                <div class="text_slider__btn">
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
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>

        <div class="kunden_hero__logo">
            <img src="<?php the_field('kundenlogo') ?>" alt="">
        </div>

        <script>
            document.addEventListener( 'DOMContentLoaded', function() {
                var text_slider = new Splide( '.text_slider', {
                    type   : 'loop',
                    speed : '1000',
                    pagination: false
                } );

                text_slider.mount();

                text_slider.on ('move', () => {
                    console.log(text_slider.index + 1);

                    const actives = Array.from(document.getElementsByClassName('slider__active'));
                    actives.forEach(active => {
                        active.innerHTML = String(text_slider.index + 1);
                    });
                })

                const items = Array.from(document.getElementsByClassName('slider__length'));
                items.forEach(item => {
                    item.innerHTML = String(text_slider.length);
                });

            } );
        </script>
    <?php endif; ?>
</section>