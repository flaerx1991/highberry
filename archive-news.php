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
        'news_heading' => get_field('news_heading','option'),


        'banner_info' => get_field('events_banner_info', 'option'),
        'banner_tabs_items' => get_field('events_banner_tabs_items', 'option'),
        'picture_classes' => get_field('events_picture_classes', 'option'),
        'desktop_image' => get_field('events_desktop_image', 'option'),
        'tablet_image' => get_field('events_tablet_image', 'option'),
        'mobile_image' => get_field('events_mobile_image', 'option'),

    ]
);

$template->render();

global $wp_query;
$items = $wp_query->posts;
$ids = array();
foreach ($items as $item){
    array_push($ids, $item->ID);
}

$items = (new \HIGH\Lib\Utils\PreparePostData)($ids, 'news');

$template = new App\ACF\BaseTemplate(
    'posts_grid_without_cat',
    [
        'items' => $items,
        'post_type' => 'news',
    ]
);
$template->render();
?>

<?php
get_footer();
