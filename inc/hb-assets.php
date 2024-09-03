<?php
defined( 'ABSPATH' ) || exit;

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

function highberry_scripts() {

    // styles
    wp_enqueue_style( 'highberry-style', asset_uri('css/style.css'), array(), _S_VERSION );
    wp_enqueue_style( 'keen-css', get_template_directory_uri() .'/node_modules/keen-slider/keen-slider.min.css', array(), _S_VERSION );

    // scripts
    wp_enqueue_script( 'app', asset_uri( 'js/app.js' ), array('jquery'), _S_VERSION, true );
    wp_enqueue_script( 'keen-js', get_template_directory_uri() . '/node_modules/keen-slider/keen-slider.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'highberry_scripts' );

function asset_uri( $file ) {
    return get_template_directory_uri() . '/assets/' . $file;
}