<?php

function load_css(): void {
    wp_register_style("bootstrap", get_template_directory_uri() . "/assets/libs/bootstrap/css/bootstrap.min.css", [], false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style("main-style", get_template_directory_uri() . "/assets/css/style.css", [], false, 'all');
    wp_enqueue_style('main-style');
}

add_action('wp_enqueue_scripts', 'load_css');


function load_js(): void {
    wp_enqueue_script('jquery');
    wp_register_script("bootstrap-js", get_template_directory_uri() . "/assets/libs/bootstrap/js/bootstrap.min.js", ['jquery'], false, true);
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'load_js');