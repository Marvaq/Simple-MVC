<?php

if(!defined('IN_INDEX')) { die('<em>We are sorry, but you don\'t have access to this page.</em>'); }

/*
 * Marvaq v1.0
 * ---------------------------
 * @author  Stan
 * @author  Frank
 * @date    20/05/2013
 * ---------------------------
 */

class Bootstrap
{

    public $controller, $method;

    public function __construct()
    {
        require APP_PATH . 'core.php';

        $this->url = $this->_getUrl();
    }

    public function run()
    {
        $this->url = rtrim($this->url, '/');

        $url = explode('/', $this->url);

        if (isset($url[1]))
        {
            $this->controller = $url[0];
            $this->method = $url[1];
        }
        else
        {
            $this->controller = $url[0];
        }

        $path = APP_PATH . '/controllers/' . $this->controller . '.php';

        if (file_exists($path))
        {
            require $path;

            $this->app = new $this->controller;

            if (isset($this->method))
            {
                if (method_exists($this->controller, $this->method))
                {
                    $this->app->{$this->method}();
                }
            }
        }
        else
        {
            $error = APP_PATH . '/controllers/error.php';

            if (file_exists($error))
            {
                require $error;

                $this->app = new Error();
            }
            else
            {
                die('<h1>System Error</h1><hr />Could not find the error controller.');
            }
        }
    }

    private function _getUrl()
    {
        $url = empty($_GET['url']) ? 'frontpage' : $_GET['url'];

        return filter_var($url, FILTER_SANITIZE_URL);
    }

}