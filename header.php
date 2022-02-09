<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <title><?php the_field('company_name', 'options') ?> > <?php is_front_page() ? the_field('company_slogan', 'options') : wp_title(''); ?></title>
        <link rel="icon" href="<?php the_field('company_icon', 'options'); ?>">
        <!-- Main theme Min CSS -->
        <link rel="stylesheet" href="https://use.typekit.net/rvo1mtx.css">
        <link href="https://api.fontshare.com/css?f[]=switzer@100,101,200,201,300,301,400,401,500,501,600,601,700,701,800,801,900,901,1,2&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/build/main.css">
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Start automatic head of WP -->
        <?php wp_head(); ?>
        <!-- End automatic head of WP -->
    </head>
    <body class="main_body">
        <header>
            <!-- Navigation bar -->
            <?php get_template_part('template-parts/general', 'navigation'); ?>
            <!-- Page Hero -->
            <?php is_post_type_archive( 'kunden' ) ? get_template_part('template-parts/kunden', 'hero') : get_template_part('template-parts/general', 'hero'); ?>
        </header>