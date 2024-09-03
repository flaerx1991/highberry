<?php

namespace HIGH\Lib\Taxonomies;

class Products extends BaseTaxonomy
{
    public string $label = 'Categories';
    public string $slug = 'products-category';
    public string $domain = 'highberry';
    public array $post_types = ['products'];

    public function __construct()
    {
        parent::__construct($this->label, $this->slug, $this->post_types, $this->domain);
    }
}