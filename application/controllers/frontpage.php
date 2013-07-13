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

class Frontpage extends Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->model->render('frontpage_model');
        $this->view->render('frontpage');
    }

}