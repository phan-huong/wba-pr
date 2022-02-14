<?php if( get_row_layout() == 'contact_form' ) : 
    $headline_L = get_sub_field('headline_L');
    $headline_S = get_sub_field('headline_S'); ?>
    <section class="contact_form">
        <div class="contact_form__headlines">
            <h2><?php echo $headline_L ?></h2>
            <h3><?php echo $headline_S ?></h3>
        </div>
        <?php echo get_sub_field( 'contact_form' ); ?>	
        <div class="contact_form__infos">
            <div class="contact_form__phone">
                <p>Phone</p>
                <a href="tel:+">+49 (0) 2644. 9 45 71 55</a>
            </div>
            <div class="contact_form__mail">
                <p>Mail</p>
                <a href="mailto:pr@wbapr.de">pr@wbapr.de</a>
            </div>
        </div>
    </section>
<?php endif; ?>	