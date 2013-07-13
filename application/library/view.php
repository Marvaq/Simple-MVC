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

class View
{

    private $_vars = array();
    private $_ext = '.tpl';
	
    public $error;

    public function __construct()
    {
        $this->setVar('websiteName', SITE_NAME);
        $this->setVar('url', SITE_URL);
    }

    public function render($view)
    {
        $path = APP_PATH . '/views/' . SITE_THEME . '/' . $view . $this->_ext;

        if (file_exists($path))
        {
            $this->template = file_get_contents($path);

            if (count($this->_vars) > 0)
            {
                $this->_filter();
            }
        }
        else
        {
            die("<h1>System Error</h1><hr />Could not load the $view view.");
        }
    }

    public function setVar($key, $value)
    {
        $this->_vars[$key] = $value;
    }

    public function display()
    {
        eval(' ?>' . $this->template . '<?php ');
    }

    public function setError($error)
    {
        $this->error = $error;
    }

    private function _filter()
    {
        foreach ($this->_vars as $key => $value)
        {
            $this->template = str_replace('{$' . $key . '}', $value, $this->template);
        }
    }

}