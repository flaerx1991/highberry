<?php

defined( 'ABSPATH' ) || exit;

if ( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page( array(
        'menu_title'  => 'Site Options',
        'menu_slug'   => 'site-options',
        'capability'  => 'edit_posts',
        'redirect'    => true
    ));

    acf_add_options_sub_page( array(
        'page_title'  => 'General',
        'menu_title'  => 'General',
        'parent_slug' => 'site-options'
    ));

    acf_add_options_sub_page( array(
        'page_title'  => 'Preloader',
        'menu_title'  => 'Preloader',
        'parent_slug' => 'site-options'
    ));

    acf_add_options_sub_page( array(
        'page_title'  => 'Header Menu',
        'menu_title'  => 'Header Menu',
        'parent_slug' => 'site-options'
    ));

    acf_add_options_sub_page( array(
        'page_title'  => 'Footer Menu',
        'menu_title'  => 'Footer Menu',
        'parent_slug' => 'site-options'
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'News Settings',
        'parent_slug' => 'edit.php?post_type=news',
        'capability'  => 'edit_posts'
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Article Settings',
        'parent_slug' => 'edit.php?post_type=article',
        'capability'  => 'edit_posts'
    ));

    acf_add_options_sub_page(array(
        'page_title'  => 'Products Settings',
        'parent_slug' => 'edit.php?post_type=products',
        'capability'  => 'edit_posts'
    ));


}