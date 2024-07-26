<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/minireset.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class('body'); ?>>

<header class="header" style="background-image: url('<?php the_field('home__header_wallpaper', get_option('page_on_front')); ?>')">
    <h1 class="header__title"><?php the_field('home__header_title', get_option('page_on_front')   ); ?></h1>
    <p class="header__subtitle"><?php the_field('home__header_subtitle',  get_option('page_on_front')   ); ?></p>

     

</header>
    
