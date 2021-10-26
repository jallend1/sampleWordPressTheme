<?php 

function customStyles() {
    wp_enqueue_style('localStyles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'customStyles');

?>