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
    'post_banner',
    [
        'products_heading' => get_field('products_archive_heading','option'),
        
        'picture_classes' => get_field('products_picture_classes', 'option'),
        'desktop_image' => get_field('products_desktop_image', 'option'),
        'tablet_image' => get_field('products_tablet_image', 'option'),
        'mobile_image' => get_field('products_mobile_image', 'option'),
    ]
);

$template->render();

$categoryHelper = new \HIGH\Lib\Utils\CategoryHelper();

/// get zero level category
$categories = get_terms('products-category', array('hide_empty' => false, 'parent' => 0, 'order' => 'DESC' ));

$categoryHelper->renderFilters($categories);

if($categories){

    foreach( $categories as $category){
        $category = (array)$category; //object to array
        $children = get_terms( 'products-category', array(
            'hide_empty' => false,
            'parent' => $category['term_id'],
            'order' => 'DESC' 
        ));//get all children categories

        if(count($children) > 0){ //render template with parent and children category
            
            $categoryHelper->getChildrenAndRenderTemplate($category, $children);

            continue;
        }
        
        $products = get_posts([
            'post_type' => 'products',
            'posts_per_page' => -1,
            'tax_query' => [
                [
                    'taxonomy' => 'products-category',
                    'terms' => $category,
                    'include_children' => false 
                ],
            ],
        ]);
        if(count($products) > 0){ //render template with parent category and product items
            $categoryHelper->getProductsAndRenderTemplate($category, $products);
            continue;
        }
    }
}


?>

<?php
get_footer();
