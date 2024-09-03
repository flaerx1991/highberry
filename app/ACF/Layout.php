<?php

namespace App\ACF;

use App\ACF\BaseTemplate;

class Layout
{
    public static function renderFlexBlocks($flexBlocks = null, $bread_crumbs = true)
    {
//        $section_with_relation = array(
//            'link_grid' => 'items',
//            'brands' => 'items',
//        );

        if (!function_exists('get_field')) {
            return null;
        }

        $registry = App::getTemplatesRegistry();
        if(!$flexBlocks){
            $flexBlocks = get_field('page_sections');
        }

        if(!is_front_page() && $bread_crumbs){
            $template = new BaseTemplate('static/breadcrumbs', []);
            $template->render();
        }

        if(is_array($flexBlocks)){

            foreach ($flexBlocks as $flexBlock) {

//                if(array_key_exists($registry[$flexBlock['acf_fc_layout']], $section_with_relation)){
//                    $flexBlock['items'] = (new \HIGH\Lib\Utils\PreparePostData)($flexBlock[ $section_with_relation[ $registry[ $flexBlock['acf_fc_layout'] ] ] ]);
//                }

                if (key_exists($flexBlock['acf_fc_layout'], $registry)) { //  && is_array($flexBlock)
                    $template = new BaseTemplate($registry[$flexBlock['acf_fc_layout']], $flexBlock);
                    $template->render();
//                    var_dump($template->render());
                }
            }
        }
        else{
            return null;
        }
    }
}