<?php
/**
* Irescouk's functions and definitions
*
* @package Irescouk
* @since Irescouk 1.0
*/


if ( ! function_exists( 'irescouk_setup' ) ) :

/**
* Sets up theme defaults and registers support for various
* WordPress features.
*
* Note that this function is hooked into the after_setup_theme
* hook, which runs before the init hook. The init hook is too late
* for some features, such as indicating support post thumbnails.
*/
function irescouk_setup() {

/**
* Make theme available for translation.
* Translations can be placed in the /languages/ directory.
*/
load_theme_textdomain( 'irescouk', get_template_directory() . '/languages' );

/**
* Add default posts and comments RSS feed links to <head>.
    */
    add_theme_support( 'automatic-feed-links' );

    /**
    * Enable support for post thumbnails and featured images.
    */
    add_theme_support( 'post-thumbnails' );

    /**
    * Add support for two custom navigation menus.
    */
    register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'irescouk' ),
    'secondary' => __( 'Secondary Menu', 'irescouk' ),
    ) );

    /**
    * Enable support for the following post formats:
    * aside, gallery, quote, image, and video
    */
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    // Header
        $args = array(
            'flex-width'    => true,
            'width'         => 200,
            'flex-height'   => true,
            'height'        => 200,
            'default-image' => get_template_directory_uri() . '/assets/img/logo.jpeg',
        );
        add_theme_support('custom-header', $args);
    }
    endif; // irescouk_setup
    add_action( 'after_setup_theme', 'irescouk_setup' );