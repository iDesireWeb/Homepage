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
    /**
     * @param string $param_userName
     * @return User
     */
    function getUserByName($param_userName) {
        $db = new Database();
        $localPDO = $db->mysqlPDO;
        $sql = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $data = $localPDO->prepare($sql);
        $data->execute(array(':username' => $param_userName));
        $lUser = $data->fetch();
        $returnUser = new User($lUser['username'],$lUser['username'],$lUser['username'],$lUser['username'],$lUser['steamid']);
        return $returnUser;
    }

    function existsUser($param_userName) {

    }

    /**
     * @param string $param_userName
     * @param string $param_userPassword
     * @return bool
     */
    function isPasswordOk($param_userName, $param_userPassword) {
        $db = new Database();
        $localPDO = $db->mysqlPDO;
        $sql = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $data = $localPDO->prepare($sql);
        $data->execute(array(':username' => $param_userName));
        $lUser = $data->fetch();
        if($lUser == md5($param_userPassword)) {
            return true;
        } else {
            return false;
        }

    }

}