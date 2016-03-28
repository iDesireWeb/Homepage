<?php
require_once ("class/Core.php");
require_once("class/UserSystem.php");
if(id\Core::IsMaintained()) {
    echo "Wartungsarbeiten!!!";
    die();
}