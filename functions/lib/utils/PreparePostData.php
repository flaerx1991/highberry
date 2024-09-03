<?php

namespace HIGH\Lib\Utils;

use HIGH\Lib\Services\PreparePostDataService;

class PreparePostData
{
    public $service;

    public function __construct()
    {
        $this->service = new PreparePostDataService();
    }

    public function __invoke($ids, $type = null)
    {
        $items = array();

        if($ids){
            foreach ($ids as $id) {
                if(!$type){
                    $type = get_post_type($id);
                }

                switch ($type){
                    case 'news':
                        array_push($items, $this->service->news($id));
                        break;
                    case 'article':
                        array_push($items, $this->service->article($id));
                        break;
                    case 'products':
                        array_push($items, $this->service->products($id));
                        break;
                    default:
                        $item = array();
                        array_push($items, $this->service->defaultCase($id, $type, $item));
                        break;
                }
            }
            return $items;
        }
        else{
            return null;
        }

    }
}