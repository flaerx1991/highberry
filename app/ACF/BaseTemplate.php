<?php

namespace App\ACF;

use Jenssegers\Blade\Blade;

class BaseTemplate
{
    /**
     * Contain data from ACF fields
     *
     * @var array
     */
    public array $data = [];

    /**
     * Contains the name of the field group of one block of the ACF plugin.
     * It is also used to connect the template if the names match.
     * For example, if the value of this property is 'hero' and the template is called 'hero.blade.php'
     *
     * @var string
     */
    public string $templateName;

    /**
     * Construct
     *
     * @param  string  $name
     * @param  array  $data
     */
    public function __construct(string $name, array $data)
    {
        $this->templateName = $name;
        $this->data = $data;
        //$this->setupDefaultVariables();
    }

    /**
     * Get fields from the database and set that data to an array $data
     *
     * @return array
     */
    protected function getFields(): array
    {
        return get_field('');
    }

    /**
     * Checks for the presence of the desired template in the file system and displays this template
     *
     * @return void
     */
    public function render(): void
    {
        $views = __DIR__ . '/Template';

        $cache = __DIR__ . '/Cache';

        if (file_exists($views . '/' . $this->templateName . '.blade.php')) {
            $blade = new Blade($views, $cache);
            echo $blade->render($this->templateName, $this->data);
        }
    }
}