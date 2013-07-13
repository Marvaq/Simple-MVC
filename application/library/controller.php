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

class Controller
{

    public function __construct()
    {
        $this->model = new Model();
        $this->view = new View();
    }

}