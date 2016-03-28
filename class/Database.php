<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 28.03.2016
 * Time: 21:31
 */

// Security Feature
if (!defined('_isScript')) exit();

public $db = null;
private $settings;

class Database
{
    public $db = null;

    public function __construct($settings)
    {
        $this->settings = $settings;

        try
        {
            $this->db = new PDO(
                "mysql:host=" . $this->settings['db_host'] . ";dbname=" . $this->settings['db_host'],
                $this->settings['db_username']
                $this->settings['db_password']
            )
        }
        catch(PDOException $e)
        {
            die ('<p>Failed to connect to MySQL.</p>');
        }
    }

    public
}