<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package silverstone
 */

get_header();
?>

<?php

$template = new App\ACF\BaseTemplate(
    'secondary_pages_banner',
    [
        'article_heading' => get_field('article_heading','option'),
        
        'banner_info' => get_field('article_banner_info', 'option'),
        'banner_tabs_items' => get_field('article_banner_tabs_items', 'option'),
        'picture_classes' => get_field('article_picture_classes', 'option'),
        'desktop_image' => get_field('article_desktop_image', 'option'),
        'tablet_image' => get_field('article_tablet_image', 'option'),
        'mobile_image' => get_field('article_mobile_image', 'option'),
    ]
);

$template->render();

global $wp_query;
$items = $wp_query->posts;
$ids = array();
foreach ($items as $item){
    array_push($ids, $item->ID);
}

$items = (new \HIGH\Lib\Utils\PreparePostData)($ids, 'article');

$template = new App\ACF\BaseTemplate(
    'posts_grid_without_cat',
    [
        'items' => $items,
        'post_type' => 'article',
    ]
);
$template->render();
?>

<?php
get_footer();
