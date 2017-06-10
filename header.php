<!DOCTYPE html>
<html>
    <head>
        <title><?php get_my_title_tag(); ?></title>
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/nav.css" type="text/css" media="all" />

    </head>

<body> 
    <!-- nav -->
    <nav>  
    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'nav', 'items_wrap' => '<ul id="main-nav" class="topnav">%3$s</ul>', ) ); ?>
    </nav>

    <!-- header -->
    <div id="header">
        <h1 id="logo"><a href="http://gyunxiu.com/web170/wordpress/"><img src="<?php bloginfo('template_directory'); ?>/imgs/logo.png" alt="Cantonese Opera Amateur Club" /></a></h1>
    </div>
    <!-- middle -->

    <div id="middle"> 