<?php

function markotheme_enqueue_scripts () {
    //register style
    wp_register_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', [] , filemtime (get_template_directory() .'/assets/css/main.css'));
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css', [] );
    //register script
    wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [] , filemtime (get_template_directory() .'/assets/js/main.js'),true);
    
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.js', ['jquery'] , filemtime (get_template_directory() .'/assets/bootstrap/js/bootstrap.js'),true);

    
    
    //enqueue style
    wp_enqueue_style( 'main-css');
    wp_enqueue_style( 'bootstrap-css');
    //enqueue style
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts','markotheme_enqueue_scripts');

?>