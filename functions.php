<?php 

function libraryUnionFeatures(){
    add_theme_support('title-tag');
}

function libraryUnionStyles() {
    wp_enqueue_style('fontAwesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('googleFonts', "https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style('localStyles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'libraryUnionStyles');
add_action('init', 'libraryUnionFeatures');

?>