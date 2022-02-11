<?php if( get_row_layout() == 'image_slider' ) : 
    $slider_id = 'slider__'.rand_id(); ?>

    <section class="splide image_slider" id="<?php echo $slider_id ?>">
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
                <?php if( have_rows('slide') ) :
                    while ( have_rows('slide') ) : the_row(); 
                        $bild = get_sub_field('bild'); ?>

                            <li class="splide__slide">
                                <div class="splide__slide__container">
                                    <div class="splide__slide__left">
                                        <img src="<?php echo $bild ?>" alt="">
                                    </div>
                                    <?php if( have_rows('inhalte_rechts') ) :
                                        while ( have_rows('inhalte_rechts') ) : the_row(); 
                                            $slide_headline = get_sub_field('slide_headline'); 
                                            $texte = get_sub_field('texte'); 
                                            $hat_link = get_sub_field('hat_link'); ?>

                                            <div class="splide__slide__right">
                                                <div class="splide__slide__right__content">
                                                    <h2><?php echo $slide_headline ?></h2>
                                                    <div class="splide__slide__right__text">
                                                        <?php echo $texte; 
                                                        if ($hat_link) :
                                                            $link_text = get_sub_field('link_text');
                                                            $link_url = get_sub_field('link_url'); ?>

                                                            <a href="><?php echo $link_url ?>"><?php echo $link_text ?></a>

                                                        <?php else : null; endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; 
                                    endif; ?>

                                </div>
                            </li>

                    <?php endwhile; 
                endif; ?>
            </ul>
        </div>
    </section>

    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
            var image_slider = new Splide( '#<?php echo $slider_id ?>', {
                type   : 'fade',
                speed : '1000',
                pagination: false
            } );

            image_slider.mount();

            image_slider.on ('load move', () => {
                console.log(image_slider.index + 1);

                const current_slider = document.getElementById('<?php echo $slider_id ?>')
                const actives = Array.from(current_slider.getElementsByClassName('slider__active'));
                actives.forEach(active => {
                    active.innerHTML = String(image_slider.index + 1);
                });
            })

            const items = Array.from(document.getElementsByClassName('slider__length'));
            items.forEach(item => {
                item.innerHTML = String(image_slider.length);
            });
        } );
    </script>
<?php endif; ?>