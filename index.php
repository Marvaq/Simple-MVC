<?php

/*
 * Marvaq v1.0
 * ---------------------------
 * @author  Stan
 * @author  Frank
 * @date    20/05/2013
 * ---------------------------
 */
 
 /*
 * Security check
 */
 define('IN_INDEX', 1);
 
/*
 * Start sessions
 */
session_start();

/*
 * Define common constants
 */
define('APP_PATH', 'application/');
define('PUB_PATH', 'public/');

/*
 * Grab the bootstrap file
 */
require APP_PATH . 'library/bootstrap.php';

/*
 * Initialise the bootstrap object
 */
$mvc = new Bootstrap();

/*
 * Run the application
 */
$mvc->run();

/*
 * Display the view
 */
$mvc->app->view->display();