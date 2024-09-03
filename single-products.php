<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package silverstone
 */

get_header();
?>

<?php

$template = new App\ACF\BaseTemplate(
    'post_banner',
    [
        'heading' => get_the_title(),
        'picture_classes' => get_field('picture_classes',get_the_ID(), 'products'),
        'desktop_image' => get_field('desktop_image', get_the_ID(), 'products'),
        'tablet_image' => get_field('tablet_image', get_the_ID(), 'products'),
        'mobile_image' => get_field('mobile_image', get_the_ID(), 'products'),
    ]

);
$template->render();

$categoryHelper = new \HIGH\Lib\Utils\CategoryHelper();

$zero_level_categories = get_terms('products-category', array('hide_empty' => false, 'parent' => 0, 'order' => 'DESC' ));

$categoryHelper->renderFilters($zero_level_categories);

$template = new App\ACF\BaseTemplate(
    'product_card',
    [
        'heading' => get_the_title(), 
        'product_images_slider' => get_field('product_images_slider', get_the_ID(), 'products'),
        'product_card_additional_info_items' => get_field('product_card_additional_info_items',  get_the_ID(), 'products'),
        'product_card_description' => get_field('product_card_description',  get_the_ID(), 'products'),
        'additional_products_slider_title' => get_field('additional_products_slider_title',  get_the_ID(), 'products'),
        'relative_products' => (new \HIGH\Lib\Utils\PreparePostData)(get_field('relative_products', get_the_ID(), 'products'), 'products'),
        'activate_product_url' => get_field('activate_product_url',  get_the_ID(), 'products')
    ]
);
$template->render();

?>

<?php
get_footer();
