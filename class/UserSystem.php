<?php
/**
 * Created by PhpStorm.
 * User: Tobias
 * Date: 28.03.2016
 * Time: 20:36
 */

namespace id;

// Security Feature
if (!defined('_isScript')) exit();

//Includes (require_once) ------------------------
require_once("User.php");
require_once("Database.php");
//End Includes -----------------------------------

class UserSystem
{

    function getUserByName($param_userName) {
        $db = new Database();
        $localPDO = $db->mysqlPDO;
        $sql = "SELECT * FROM users WHERE username = '". $param_userName ."'";
        $lUser = $localPDO->query($sql);
        $returnUser = new User($lUser['username'],$lUser['username'],$lUser['username'],$lUser['username'],$lUser['steamid']);
        return $returnUser;
    }

    function existsUser($param_userName) {

    }

}