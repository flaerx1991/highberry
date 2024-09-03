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

$banner_cat_image = get_queried_object();
$image = get_field('category_banner_image', $banner_cat_image);
$template = new App\ACF\BaseTemplate(
    'post_banner',
    [   
        'picture_classes' => $image['picture_classes'],
        'desktop_image' => $image['desktop_image'],
        'tablet_image' => $image['tablet_image'],
        'mobile_image' => $image['mobile_image']
    ]
);

$template->render();

$categoryHelper = new \HIGH\Lib\Utils\CategoryHelper();

$zero_level_categories = get_terms('products-category', array('hide_empty' => false, 'parent' => 0, 'order' => 'DESC' ));

$categoryHelper->renderFilters($zero_level_categories);

$categories = get_terms('products-category', array('hide_empty' => false, 'parent' => get_queried_object_id() ));



if($categories){ //render categories and it`s products if queried object has parent category 

    foreach( $categories as $category){
        $category = (array)$category;
        $children = get_terms( 'products-category', array(
            'hide_empty' => false,
            'parent' => $category['term_id'],
            'order' => 'DESC' 
        ));

        if(count($children) > 0){
            $category = $categoryHelper->getChildrenAndRenderTemplate($category, $children);
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

        if(count($products) > 0){
            $categoryHelper->getProductsAndRenderTemplate($category, $products);
            continue;
        }
    }
}
else{//render products if queried object don`t have parent category
    $current = get_term(get_queried_object_id());

    $current = (array)$current;

    $products = get_posts([
        'post_type' => 'products',
        'posts_per_page' => -1,
        'tax_query' => [
            [
                'taxonomy' => 'products-category',
                'terms' => $current,
                'include_children' => false 
            ],
        ],
    ]);

    if(count($products) > 0){
        $categoryHelper->getProductsAndRenderTemplate($current, $products);
    }
}

?>

<?php
get_footer();

