<?php

namespace HIGH\Lib\Taxonomies;

class BaseTaxonomy
{
    public string $domain = 'text-domain';
    public string $label = 'Taxonomy';
    public string $slug = 'taxonomy';
    public array $post_types = [];
    public string $plural = '';

    function __construct($label, $slug, $post_types = [], $domain = 'highberry') {
        $this->label = $label;
        $this->slug = $slug;
        $this->post_types = $post_types;
        $this->domain = $domain;

        $priority = apply_filters( 'high_taxonomy_' . $this->slug . '_priority', 0);

        add_action( 'init', [$this, 'create'], $priority );
    }

    function create() : void {
        // Add new taxonomy, make it hierarchical (like categories)
        $labels = array(
            'name'              => _x( $this->label . $this->plural, $this->label . 's', $this->domain ),
            'singular_name'     => _x( $this->label, $this->label, $this->domain ),
            'search_items'      => __( 'Search ' . $this->label, $this->domain ),
            'all_items'         => __( 'All ' . $this->label, $this->domain ),
            'parent_item'       => __( 'Parent ' . $this->label, $this->domain ),
            'parent_item_colon' => __( 'Parent ' . $this->label . ':', $this->domain ),
            'edit_item'         => __( 'Edit ' . $this->label, $this->domain ),
            'update_item'       => __( 'Update ' . $this->label, $this->domain ),
            'add_new_item'      => __( 'Add New ' . $this->label, $this->domain ),
            'new_item_name'     => __( 'New ' . $this->label . ' Name', $this->domain ),
            'menu_name'         => __( $this->label, $this->domain ),
        );

        // Filter labels
        $labels = apply_filters( 'high_taxonomy_' . $this->slug . '_labels', $labels);

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => $this->slug ),
        );

        // Filter args
        $args = apply_filters( 'high_taxonomy_' . $this->slug . '_args', $args);

        // Filter post types
        $this->post_types = apply_filters( 'high_taxonomy_' . $this->slug . '_post_types', $this->post_types);

        register_taxonomy( $this->slug, $this->post_types, $args );
    }
}