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

class Model
{

    public function __construct()
    {
        try
        {
            $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            
            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE); 
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        } catch (PDOException $Exception)
        {
            die('<h1>System Error</h1><hr />Could not connect to database, error code:<br/> ' . $Exception->getMessage());
        }
    }

    public function render($model)
    {
        $path = APP_PATH . 'models/' . $model . '.php';

        if (file_exists($path))
        {
            require $path;

            $this->handler = new $model;
        }
        else
        {
            die("<h1>System Error</h1><hr />Could not load the $model model.");
        }
    }

}
