<?php
define('_isScript', 1);
session_start();
echo '<html>';

include('template/header.php');

require_once("class/Core.php");
require_once("class/UserSystem.php");
require_once("class/User.php");
if(id\Core::IsMaintained()) {
    include('template/maintaince.php');
    die();
}


//USER DEMO!!!!!!!
//$usersys = new \id\UserSystem();
//$userl = $usersys->getUserByName("tobi");

//echo "Username: " .$userl->UserName ."<br>";
//echo "SteamID: " .$userl->SteamID ."<br>";
//END USER DEMO!!!!!!


if(!isset($_GET['site'])){
    header('Location: index.php?site=index');
}else {
    switch ($_GET['site']) {
        case "index":
        {
            define('current_site', 'index');
            break;
        }
        case "login":
        {
            define('current_site', 'login');
            break;
        }
        case "forum":
        {
            if(defined('thread')){

            }
            define('current_site', 'forum_overview');
            break;
        }
        default:
        {
            define('current_site', '404');
            break;
        }
    }
}
include('template/navbar.php');

include('template/'. constant('current_site') .'.php');

 echo '</html>';