<?php
require_once ("class/Core.php");
require_once("class/UserSystem.php");
if(id\Core::IsMaintained()) {
    echo "Wartungsarbeiten!!!";
    die();
}
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