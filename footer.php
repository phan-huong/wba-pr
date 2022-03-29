        <footer>
            <div class="footer__wrapper__outer" id="footer_outer"></div>
            <div class="footer__wrapper__inner" id="footer_inner">
                <div class="footer__social_media">
                    <p>Social Media</p>
                    <ul class="footer__social_media__items">
                        <li><img src="<?php echo ThemeURL ?>/assets/icon/instagram.svg"></li>
                        <li><img src="<?php echo ThemeURL ?>/assets/icon/facebook.svg"></li>
                        <li><img src="<?php echo ThemeURL ?>/assets/icon/twitter.svg"></li>
                    </ul>
                </div>
                <div class="footer__info">
                    <div class="footer__info__phone">
                        <p>Phone</p>
                        <a href="tel:026449457155">+49 (0) 26 44. 9 45 71 55</a>
                    </div>
                    <div class="footer__info__email">
                        <p>E-Mail</p>
                        <a href="mailto:pr@wbapr.de">pr@wbapr.de</a>
                    </div>
                    <div class="footer__info__sitemap">
                        <p>Sitemap</p>
                        <?php if (has_nav_menu('footer')) {
                            wp_nav_menu( array( 
                                'theme_location' => 'footer', 
                                'container' => '',
                                'items_wrap' => '<ul class="footer__info__sitemap__items">%3$s</ul>'
                                ) 
                            );
                        } ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer_copyright">
                <p>&copy; <?php echo date("Y") ?> WeberBenAmmar PR</p>
            </div>

            <!-- Start automatic footer of WP -->
            <?php wp_footer(); ?>
            <!-- End automatic footer of WP -->
        </footer>
    </body>
</html>