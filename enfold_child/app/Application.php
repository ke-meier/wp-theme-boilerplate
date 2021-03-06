<?php

namespace ThemeApp;

use WPAppKit\WordpressBridge;

class Application
{
    /**
     * @var WordpressBridge
     */
    protected $wordpressBridge;

    public function __construct()
    {

        require_once __DIR__ . '/../vendor/autoload.php';
        require_once 'Registry.php';

        Registry::setConfig(require_once('config.php'));
        Registry::setVersion('0.1');
        Registry::setBaseUrl(get_stylesheet_directory_uri());
        Registry::setBasePath(get_stylesheet_directory());

        // autoload files
        spl_autoload_register(function ($cls) {
            $tmpCls = ltrim($cls, '\\');
            if (strpos($tmpCls, __NAMESPACE__) !== 0) {
                return;
            }

            $dir = rtrim(get_stylesheet_directory() . '/app', '/');

            $cls = str_replace(__NAMESPACE__, '', $tmpCls);

            $path = $dir . str_replace('\\', DIRECTORY_SEPARATOR, $cls) . '.php';

            require_once($path);
        });

        $this->wordpressBridge = new WordpressBridge();
    }

    public function run()
    {
        // init modules
        new MainModule\Module($this->wordpressBridge);

        $this->wordpressBridge->perform();
    }
}
