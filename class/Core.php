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
    public static function GetSiteName() {
        return "TestSite";
    }
    public static function IsMaintained() {
        return false;
    }
}