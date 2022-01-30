<nav class="nav">
    <div class="nav__menu">
        <div class="nav__logo">
            <a href=<?php echo SiteURL ?>><img src=<?php the_field('company_logo', 'options') ?> alt=""></a>
        </div>
        <?php if (has_nav_menu('primary')) {
            wp_nav_menu( array( 
                'theme_location' => 'primary', 
                'container' => '',
                'items_wrap' => '<ul class="nav__wrapper">%3$s</ul>',
                'add_li_class' => 'nav__items'
                ) 
            );
        } ?>
    </div>
    <div class="nav__buttons">
        <ul class="pll_switcher">
            <?php pll_the_languages(array('hide_current'=>1)); ?>
        </ul>
        <button class="btn_gradient" onclick="window.open('<?php the_field('navi_button_link', 'options') ?>')">
            <?php the_field('navi_button_text', 'options') ?>
        </button>
    </div>
    <div class="nav_mobile__btn">
        <div class="nav_mobile__btn__bar menu"></div>
        <div class="nav_mobile__btn__bar menu"></div>
        <div class="nav_mobile__btn__bar menu"></div>
        <div class="nav_mobile__btn__bar close"></div>
        <div class="nav_mobile__btn__bar close"></div>
    </div>
    <div class="nav_mobile__content">
        <div class="background" id="background">
            <div class="portion"></div>
            <div class="portion"></div>
            <div class="portion"></div>
        </div>
        <div class="nav_mobile__menu" id="nav_mobile_menu">
            <div class="nav_mobile__top">
                <div class="nav_mobile__logo">
                    <a href=<?php echo SiteURL ?>><img src=<?php the_field('company_logo', 'options') ?> alt=""></a>
                </div>
                <ul class="pll_switcher">
                    <?php pll_the_languages(array('hide_current'=>1)); ?>
                </ul>
            </div>
            </ul>
            <div class="nav_mobile__body">
                <button class="btn_gradient">
                    Außenwirkung boosten
                </button>
                <?php if (has_nav_menu('primary')) {
                    wp_nav_menu( array( 
                        'theme_location' => 'primary', 
                        'container' => '',
                        'items_wrap' => '<ul class="nav_mobile__wrapper">%3$s</ul>',
                        'add_li_class' => 'nav_mobile__items'
                        ) 
                    );
                } ?>
            </div>
        </div>
    </div>
</nav>