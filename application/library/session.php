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

class Session
{

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        if (isset($_SESSION[$key]))
        {
            return $_SESSION[$key];
        }
        else
        {
            return false;
        }
    }

    public static function destroy()
    {
        session_destroy();
    }

}