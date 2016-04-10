<?php
/**
 * Created by PhpStorm.
 * User: Tobias
 * Date: 28.03.2016
 * Time: 21:45
 * deddeded
 */

namespace id;

// Security Feature
if (!defined('_isScript')) exit();

class Core
{
    public static function mres($value)
    {
        $search = array("\\",  "\x00", "\n",  "\r",  "'",  '"', "\x1a");
        $replace = array("\\\\","\\0","\\n", "\\r", "\'", '\"', "\\Z");

        return str_replace($search, $replace, $value);
    }

    public static function GetSiteName() {
        return "TestSite";
    }
    public static function IsMaintained() {
        return false;
    }
    public static function GetLanguage() {

    }
}