<?php

function markotheme_enqueue_scripts () {
    wp_register_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', [] , filemtime (get_template_directory() .'/assets/css/main.css'));
    wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [] , filemtime (get_template_directory() .'/assets/js/main.js'));

    wp_enqueue_style( 'main-css');
    wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts','markotheme_enqueue_scripts');

?>