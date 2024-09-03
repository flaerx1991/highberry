<?php

namespace HIGH\Lib\Utils;

use HIGH\Lib\Services\CategoryHelperServices;
use App\ACF\BaseTemplate;
use \HIGH\Lib\Utils\PreparePostData;

class CategoryHelper
{
    // public $service;

    public function __construct()
    {
        // $this->service = new CategoryHelperServices();
    }

    public function renderFilters($categories)
    {

        $categories = self::createCategoriesTree($categories);

        $template = new BaseTemplate(
            'products_filter',
            [
                'categories' => $categories,
            ]
        );
        $template->render();
    }

    private function createCategoriesTree($categories){

        foreach($categories as $key => $category){
            $category = (array)$category;

            $children = get_terms( 'products-category', array(
                'hide_empty' => false,
                'parent' => $category['term_id'],
                'order' => 'DESC' 
            ));

            if(count($children) > 0){
                $children = self::createCategoriesTree($children);

                $category['children'] = $children;
            }

            

            $categories[$key] = $category;
        }

        return $categories;
    }

    public function getChildrenAndRenderTemplate($category, $children) : void
    {
        foreach($children as $key => $child){
            $child = (array)$child;
            
            $children[$key]  = [
                'image' => get_field('product_category_image', 'products-category_'.$child['term_id'] ),
                
                'data' => $child
            ];
        }

        $category['children'] = $children;

        $template = new BaseTemplate(
            'categories_products_grid',
            [
                'category' => $category,
            ]
        );
        $template->render();
    }

    public function getProductsAndRenderTemplate($category, $products) : void
    {
        $ids = array();
    
        foreach ($products as $product){
            array_push($ids, $product->ID);
        }
        
        $category['products'] = (new PreparePostData)($ids, 'products');

        $template = new BaseTemplate(
            'categories_products_grid',
            [
                'category' => $category,
            ]
        );
        $template->render();

    }


   
}