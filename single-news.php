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
        'post_item_img' => get_field('post_item_img', get_the_ID(), 'news'),
        'picture_classes' => get_field('picture_classes',get_the_ID(), 'news'),
        'desktop_image' => get_field('desktop_image', get_the_ID(), 'news'),
        'tablet_image' => get_field('tablet_image', get_the_ID(), 'news'),
        'mobile_image' => get_field('mobile_image', get_the_ID(), 'news'),
    ]

);
$template->render();

$template = new App\ACF\BaseTemplate('Static/post_breadcrumbs',[]);
$template->render();

$template = new App\ACF\BaseTemplate(
    'post_without_cat_single',
    [
        'heading' => get_the_title(),
        'post_description' => get_field('post_description', get_the_ID(), 'news'),
        'post_item_img' => get_field('post_item_img', get_the_ID(), 'news'),
        'post_list_items' => get_field('post_list_items', get_the_ID(), 'news'),
        
    ]
);
$template->render();

?>

<?php
get_footer();
