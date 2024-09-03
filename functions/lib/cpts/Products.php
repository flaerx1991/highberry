<?php

namespace HIGH\Lib\Cpts;

class Products
{
    function __construct(){
        add_action('init', [$this,'register']);

        // Posts per page ( Archive )
        // add_action( 'pre_get_posts', [$this,'per_page'] );

        // Change title for Product Categories Archive page
        add_filter( 'pre_get_document_title', [$this,'filter_title'], 9999 );
    }

    function filter_title($title) {
        if( ! is_admin()
            && is_post_type_archive('products')
        ) {
            return 'Products | Highberry';
        }
        return $title;
    }

    // function per_page($query) {
    //     if( ! is_admin()
    //         && $query->is_post_type_archive( 'products' )
    //         && $query->is_main_query() ){
    //         $query->set( 'posts_per_page', -1 );
    //     }
    // }
   

    
    function register() {
        register_post_type( 'products',
            // CPT Options
            
            array(
                'labels' => array(
                    'name' => __( 'Products' ),
                    'singular_name' => __( 'Products' )
                ),
                'public' => true,
                'has_archive' => true,
                'supports' => array( 'page-attributes', 'title', 'editor', 'excerpt', 'custom-fields','thumbnail' ),
                'rewrite' => array('slug' => 'products', 'with_front' => false),
                'show_in_rest' => true,
            )
        );
    }
}