<?php

namespace HIGH\Lib\Services;

class PreparePostDataService
{
    
    public function news($id) : array{
        $type = 'news';
        $item = array();
        $item['post_icon'] = get_field('post_icon', $id, $type);
        $item['post_item_img'] = get_field('post_item_img', $id, $type);
        $item['post_list_items'] = get_field('post_list_items', $id, $type);
        $item['post_description'] = get_field('post_description', $id, $type);
        $item['link_text'] = get_field('link_text', $id, $type);
        $item = array_merge($item, self::defaultCase($id, $type, $item));
       
        return $item;
    }
    
    public function article($id) : array{
        $type = 'article';
        $item = array();
        $item['post_icon'] = get_field('post_icon', $id, $type);
        $item['post_item_img'] = get_field('post_item_img', $id, $type);
        $item['post_list_items'] = get_field('post_list_items', $id, $type);
        $item['post_description'] = get_field('post_description', $id, $type);
        $item['link_text'] = get_field('link_text', $id, $type);
        $item = array_merge($item, self::defaultCase($id, $type, $item));
        
        return $item;
    }

    public function products($id) : array{
        $type = 'products';
        $item = array();
        $category = get_the_terms($id, 'products-category');
        $item['category'] = $category;
        $item['product_tab_square_image'] = get_field('product_tab_square_image', $id, $type);
        $item['activate_product_url'] = get_field('activate_product_url',  $id, $type);
        $item = array_merge($item, self::defaultCase($id, $type, $item));

        return $item;
    }

    public function defaultCase($id, $type, $item) {
        $item['link'] = get_permalink($id);
        $item['title'] = get_the_title($id);
        $item['picture_classes'] = get_field('picture_classes', $id, $type);
        $item['mobile_image'] = get_field('mobile_image', $id, $type);
        $item['tablet_image'] = get_field('tablet_image', $id, $type);
        $item['desktop_image'] = get_field('desktop_image', $id, $type);

        return $item;
    }

}