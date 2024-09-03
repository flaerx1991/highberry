<?php

namespace HIGH\Lib;

class App
{
    public function __construct()
    {
        // Register Custom Post Types
        $cpt_news = new Cpts\News();
        $cpt_article = new Cpts\Article();
        $cpt_products = new Cpts\Products();

        //Register Taxonomies
        $tax_products = new Taxonomies\Products();
    }
}