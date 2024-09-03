<?php

namespace App\ACF;

class App
{
    /**
     * Contains records of all templates
     *
     * @var array
     */
    private static array $templatesRegistry;

    /**
     * Creating a registry of all templates
     *
     * @return void
     */
    public static function initTemplatesRegistry()
    {
        self::createCacheDir();
        $classes = glob(__DIR__ . '/Template/*.blade.php');

        foreach ($classes as $class) {
            $className = str_replace(__DIR__ . '/Template/', '', $class);
            if (stripos($className, 'blade.php') === false) {
                continue;
            }

            $className = str_replace('.blade.php', '', $className);
            self::$templatesRegistry[$className] = $className;
            unset($className);
        }
    }

    /**
     * @return array
     */
    public static function getTemplatesRegistry()
    {
        return self::$templatesRegistry;
    }

    /**
     * Creates a cache view directory
     *
     * @return void
     */
    private static function createCacheDir()
    {
        //for old cache path in /themes/bugcrowd/app/ACF/Cache/
        if (! is_dir(__DIR__ . '/Cache')) {
            //for cache path in /wp-content/uploads/Cache
            //if (! is_dir( wp_get_upload_dir()["basedir"].'/Cache')) {
            @ mkdir('Cache', 0775);
        }
    }
}