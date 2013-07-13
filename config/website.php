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

/*
 *  @name Website Name
 *  @desc The name of your website.
 */
define('SITE_NAME', 'MySystem');

/*
 *  @name Website URL
 *  @desc The full path to your website.
 *        Does not end with a /
 */
define('SITE_URL', 'http://website.com');

/*
 *  @name Website Theme
 *  @desc The theme of your website, located in the views folder.
 */
define('SITE_THEME', 'default');

/*
 *  @name Website Security Key
 *  @desc Only change when there aren't any users registered
 */
define('SITE_SALT', 'arJSAmVLCKzdZ9s');