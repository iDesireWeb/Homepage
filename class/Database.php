<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 28.03.2016
 * Time: 21:31
 */

namespace id;

// Security Feature
if (!defined('_isScript')) exit();

class Database
{
    public $db = null;
    private $settings;
    
    public function __construct($settings)
    {
        $this->settings = $settings;

        try
        {
            $this->db = new mysqli(
                $this->settings['db_host'],
                $this->settings['db_username'],
                $this->settings['db_password'],
                $this->settings['db_name']);

            echo 'Database is running....';
        }
        catch($e)
        {
            die("MySQL Fehler: ".$this->db->connect_error."(".$this->db->connect_errno.")".$e);
        }
    }
}