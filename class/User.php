<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 28.03.2016
 * Time: 20:04
 */

namespace id;

// Security Feature
if (!defined('_isScript')) exit();

class User
{
    //Name des Users
    public $UserName;
    //ID des Users
    public $UserID;
    //Rang des Users
    public $UserRank;
    //Avatar (url) des Users
    public $UserAvatar;

    public $SteamID;


    public function __construct($name, $id, $rank, $avatar, $steam)
    {
        $this->UserName = $name;
        $this->UserID = $id;
        $this->UserRank = $rank;
        $this->UserAvatar = $avatar;
        $this->SteamID = $steam;
    }
}

