<?php

add_action('wp_enqueue_scripts', 'irescouk_enqueue_assets');

function irescouk_enqueue_assets()
{
    // Styles
    wp_enqueue_style('theme-main-style', get_stylesheet_uri());

    wp_enqueue_style('font-awesome',  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '1.0.0', 'all');

    wp_enqueue_style('bootstrap-icons',  'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', array(), '1.0.0', 'all');

    wp_enqueue_style('animate',  get_template_directory_uri() . '/assets/lib/animate/animate.min.css', array(), '1.0.0', 'all');

    wp_enqueue_style('owlCarousel',  get_template_directory_uri() . '/assets/lib/owlcarousel/assets/owl.carousel.min.css', array(), '1.0.0', 'all');

    wp_enqueue_style('lightbox',  get_template_directory_uri() . '/assets/lib/lightbox/css/lightbox.min.css', array(), '1.0.0', 'all');

    wp_enqueue_style('bootstrap',  get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');

    wp_enqueue_style('custom-style',  get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');

    // Scripts

    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), 1.0, true);

    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/lib/wow/wow.min.js', array('jquery'), 1.0, true);

    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array('jquery'), 1.0, true);

    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/lib/waypoints/waypoints.min.js', array('jquery'), 1.0, true);

    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/lib/owlcarousel/owl.carousel.min.js', array('jquery'), 1.0, true);

    wp_enqueue_script('lightBox', get_template_directory_uri() . '/assets/lib/lightbox/js/lightbox.min.js', array('jquery'), 1.0, true);

    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 1.0, true);
}
