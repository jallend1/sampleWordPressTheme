<?php 

function libraryUnionFeatures(){
    add_theme_support('title-tag');
    register_nav_menu('headerMenu', 'Header Menu');
    register_nav_menu('footerOne', 'Footer Location 1');
    register_nav_menu('footerTwo', 'Footer Location 2');
}

function libraryUnionStyles() {
    wp_enqueue_style('fontAwesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('googleFonts', "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style('localStyles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'libraryUnionStyles');
add_action('after_setup_theme', 'libraryUnionFeatures');

?>