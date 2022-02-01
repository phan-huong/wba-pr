<?php if( get_row_layout() == 'cards' ) : 
    $headline_S = get_sub_field('headline_S');
    $headline_L = get_sub_field('headline_L');
    $cards_nr_1 = get_sub_field('cards_nr_1');
    $cards_nr_2 = get_sub_field('cards_nr_2'); ?>

    <section class="cards__wrapper">
        <div class="cards__headlines">
            <h3><?php echo $headline_S ?></h3>
            <h2><?php echo $headline_L ?></h2>
        </div>
        <div class="cards">
            <!-- Start - Erste Reihe -->
            <div class="cards__first_row">
                <style>
                    .cards__first_row {
                        grid-template-columns: repeat(<?php echo $cards_nr_1 ?>, 1fr);
                    }
                    .cards__first_row > div {
                        width: calc(100vw / <?php echo $cards_nr_1 ?>);
                    }
                    @media screen and (max-width: 540px) {
                        .cards__first_row {
                            grid-template-columns: 1fr;
                        }
                        .cards__first_row > div {
                            width: 100vw;
                        }
                    }
                </style>
                <?php if( have_rows('card_items_1') ) : 
                    while ( have_rows('card_items_1') ) : the_row(); 
                        $bkg_img = get_sub_field('bkg_img'); 
                        $markenlogo = get_sub_field('markenlogo');
                        $hat_button = get_sub_field('hat_button'); 
                        $button_text = get_sub_field('button_text'); 
                        $hover_headline = get_sub_field('hover_headline'); 
                        $hover_texte = get_sub_field('hover_texte');
                        $index = get_row_index(); ?>

                        <div class="cards__item" id="card_1_<?php echo $index ?>">
                            <img src="<?php echo $markenlogo ?>">
                            <div class="cards__item__hover">
                                <h4><?php echo $hover_headline ?></h4>
                                <?php echo $hover_texte ?>
                            </div>
                            <?php if($hat_button) : ?>
                                <button class="btn_arrow" onclick="window.open('<?php echo $button_link ?>')">
                                    <?php echo $button_text ?>
                                </button>
                            <?php endif; ?>
                        </div>

                        <style>
                            <?php echo '#card_1_'.$index ?> {
                                background: linear-gradient(
                                    to bottom,
                                    rgba(0, 0, 0, 0.2),
                                    rgba(0, 0, 0, 0.5)
                                ), url(<?php echo $bkg_img ?>);
                                background-size: 100% 100%;
                                background-position: center;
                                transition: 1s;
                            }
                            <?php echo '#card_1_'.$index ?>:hover {
                                background: linear-gradient(
                                    to bottom,
                                    rgba(0, 0, 0, 0.8),
                                    rgba(0, 0, 0, 0.8)
                                ), url(<?php echo $bkg_img ?>);
                                background-size: 120% 120%;
                                background-position: center;
                            }
                        </style>

                    <?php endwhile;
                endif; ?>
            </div>
            <!-- End - Erste Reihe -->

            <!-- Start - Zweite Reihe -->
            <div class="cards__second_row">
                <style>
                    .cards__second_row {
                        grid-template-columns: repeat(<?php echo $cards_nr_2 ?>, 1fr);
                    }
                    .cards__second_row > div {
                        width: calc(100vw / <?php echo $cards_nr_2 ?>);
                    }

                    @media screen and (max-width: 540px) {
                        .cards__second_row {
                            grid-template-columns: 1fr;
                        }
                        .cards__second_row > div {
                            width: 100vw;
                        }
                    }
                </style>
                <?php if( have_rows('card_items_2') ) : 
                    while ( have_rows('card_items_2') ) : the_row(); 
                        $bkg_img = get_sub_field('bkg_img'); 
                        $markenlogo = get_sub_field('markenlogo');
                        $hat_button = get_sub_field('hat_button'); 
                        $button_text = get_sub_field('button_text'); 
                        $hover_headline = get_sub_field('hover_headline'); 
                        $hover_texte = get_sub_field('hover_texte');
                        $index = get_row_index(); ?>

                        <div class="cards__item" id="card_2_<?php echo $index ?>">
                            <img src="<?php echo $markenlogo ?>">
                            <div class="cards__item__hover">
                                <h4><?php echo $hover_headline ?></h4>
                                <?php echo $hover_texte ?>
                            </div>
                            <?php if($hat_button) : ?>
                                <button class="btn_arrow" onclick="window.open('<?php echo $button_link ?>')">
                                    <?php echo $button_text ?>
                                </button>
                            <?php endif; ?>
                        </div>

                        <style>
                            <?php echo '#card_2_'.$index ?> {
                                background: linear-gradient(
                                    to bottom,
                                    rgba(0, 0, 0, 0.2),
                                    rgba(0, 0, 0, 0.5)
                                ), url(<?php echo $bkg_img ?>);
                                background-size: 100% 100%;
                                background-position: center;
                                transition: 1s;
                            }
                            <?php echo '#card_2_'.$index ?>:hover {
                                background: linear-gradient(
                                    to bottom,
                                    rgba(0, 0, 0, 0.8),
                                    rgba(0, 0, 0, 0.8)
                                ), url(<?php echo $bkg_img ?>);
                                background-size: 120% 120%;
                                background-position: center;
                            }
                        </style>

                    <?php endwhile;
                endif; ?>
            </div>
            <!-- End - Zweite Reihe -->
        </div>
    </section>
<?php endif; ?>