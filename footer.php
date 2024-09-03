<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package highberry
 */

?>

<?php
//PAGE CONTENT
$views = dirname(__DIR__). '/highberry/app/ACF/Template';
$cache = dirname(__DIR__). '/highberry/app/ACF/Cache';

$picture_classes = get_field('picture_classes', 'option');
$mobile_image = get_field('mobile_image', 'option');
$tablet_image = get_field('tablet_image', 'option');
$desktop_image = get_field('desktop_image', 'option');

$inputs = get_field('inputs', 'option');
$submit_title = get_field('submit_title', 'option');
$send_address = get_field('send_address', 'option');
$description = get_field('description', 'option');
$agree_check_title = get_field('agree_check_title', 'option');

$footer_logo = get_field('footer_logo', 'option');
$company_name = get_field('company_name', 'option');
$company_info = get_field('company_info', 'option');
$contacts_items = get_field('contacts_items', 'option');
$footer_menu = get_field('footer_menu', 'option');
$footer_catalog_file = get_field('footer_catalog_file', 'option');
$footer_catalog_file_link_action = get_field('footer_catalog_file_link_action', 'option');
$footer_catalog_text = get_field('footer_catalog_text', 'option');
$footer_catalog_icon = get_field('footer_catalog_icon', 'option');

$footer_company_credentials_name = get_field('footer_company_credentials_name', 'option');
$privacy_policy_file = get_field('privacy_policy_file', 'option');
$privacy_policy_link_action = get_field('privacy_policy_link_action', 'option');
$privacy_policy_text = get_field('privacy_policy_text', 'option');


















$blade = new Jenssegers\Blade\Blade( $views, $cache );

echo $blade->render('Static.footer', compact('picture_classes', 'mobile_image', 'tablet_image', 'desktop_image', 'inputs', 'submit_title', 'send_address', 'description', 'agree_check_title',
'footer_logo', 'company_name','company_info', 'contacts_items','footer_menu','footer_catalog_file', 'footer_catalog_file_link_action', 'footer_catalog_text', 'footer_catalog_icon', 
'footer_company_credentials_name', 'privacy_policy_file', 'privacy_policy_link_action','privacy_policy_text'


));