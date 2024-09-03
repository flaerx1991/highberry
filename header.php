<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> sections and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package silverstone
 */
?>

<?php
//PAGE CONTENT
$views = dirname(__DIR__). '/highberry/app/ACF/Template';
$cache = dirname(__DIR__). '/highberry/app/ACF/Cache';

$main_page_logo = get_field('main_page_logo_image', 'option');
$secondary_pages_logo = get_field('secondary_page_logo_image', 'option');
$logo_link = get_field('logo_link', 'option');

$catalog_file = get_field('header_catalog_file', 'option');
$catalog_file_link_action = get_field('header_catalog_file_link_action', 'option');
$catalog_text = get_field('header_catalog_text', 'option');
$catalog_icon = get_field('header_catalog_icon', 'option');
$navigation = get_field('main_menu', 'option');
$nav_contacts = get_field('menu_contacts', 'option');

$blade = new Jenssegers\Blade\Blade( $views, $cache );
// echo $blade->render('Static.header'); //, compact()

echo $blade->render('Static.header', compact('main_page_logo', 'secondary_pages_logo', 'logo_link', 'catalog_file', 'catalog_text', 'catalog_icon',
                                                            'catalog_file_link_action', 'navigation', 'nav_contacts'));