<?php
define('_isScript', 1);
error_reporting(E_ALL);
require_once ("class/Core.php");
require_once("class/UserSystem.php");
require_once("class/User.php");
if(id\Core::IsMaintained()) {
    echo "Wartungsarbeiten!!!";
    die();
}


//USER DEMO!!!!!!!
$usersys = new \id\UserSystem();
$userl = $usersys->getUserByName("tobi");

echo "Username:" .$userl->UserName;
echo "SteamID: " .$userl->SteamID;

//END USER DEMO!!!!!!


if(!isset($_GET['site'])){
    header('Location: index.php?site=index');
}else {
    switch ($_GET['site']) {
        case "index":
        {
            echo "Hallo index";
            break;
        }
        case "login":
        {
            echo "Hallo login";
            break;
        }
        default:
        {
            echo "404";
            break;
        }
    }
}