<?php
/*
Theme Name: Yunxiu Guo's web170 wordpress theme
Author: Yunxiu Guo
Author URI: http://www.gyunxiu.com/
Description: This is my assignment theme for the web170 class.
Version: 1.0
*/

//register menu location
register_nav_menus(array(
    'main-menu' => __('Main Menu'),
));
//create post thumbnails
add_theme_support( 'post-thumbnails' ); 
//register my sidebar
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));
?>