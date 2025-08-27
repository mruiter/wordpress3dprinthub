<?php
/**
 * PrintHub 3D functions and definitions
 *
 * @package PrintHub_3D
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'printhub_3d_setup' ) ) {
    function printhub_3d_setup() {
        load_theme_textdomain( 'printhub-3d', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        register_nav_menus( array(
            'menu-1' => __( 'Primary Menu', 'printhub-3d' ),
        ) );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ) );
        add_theme_support( 'woocommerce' );
    }
}
add_action( 'after_setup_theme', 'printhub_3d_setup' );

function printhub_3d_scripts() {
    wp_enqueue_style( 'printhub-3d-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_script( 'printhub-3d-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'printhub_3d_scripts' );

/* WooCommerce customization */
function printhub_3d_woocommerce_support() {
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
    add_action( 'woocommerce_single_product_summary', 'printhub_3d_product_title', 5 );
}
add_action( 'after_setup_theme', 'printhub_3d_woocommerce_support' );

function printhub_3d_product_title() {
    echo '<h1 class="product-title" style="color:var(--accent-color);">' . get_the_title() . '</h1>';
}

/* 3DPrint Lite integration */
function printhub_3d_quote_shortcode() {
    if ( shortcode_exists( '3dprint-lite' ) ) {
        return do_shortcode( '[3dprint-lite]' );
    }
    return '<p>' . esc_html__( '3D print request form is unavailable. Please ensure the 3DPrint Lite plugin is installed and activated.', 'printhub-3d' ) . '</p>';
}
add_shortcode( 'printhub-3d-quote', 'printhub_3d_quote_shortcode' );
