<?php

require_once ("data/settings.php");

require_once ("class/Core.php");
require_once("class/UserSystem.php");

if(id\Core::IsMaintained()) {
    echo "Wartungsarbeiten!!!";
    die();
}