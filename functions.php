<?php

function bloggy_files() {
    wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', NULL, 1.0, true);
    wp_localize_script('main_js', 'magicalData', array(
        'nonce' => wp_create_nonce('wp_rest'),
        'siteURL' => get_site_url()
    ));
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap');
    wp_enqueue_style('font-awesome', '');
    wp_enqueue_style('bloggy_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'bloggy_files');