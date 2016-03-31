<?php
/**
 * Created by PhpStorm.
 * User: Marcel
 * Date: 28.03.2016
 * Time: 21:31
 */

namespace id;

// Security Feature


class Database
{
    public $mysqlPDO;

    public function __construct()
    {
        $this->mysqlPDO = new \PDO('mysql:host=127.0.0.1;port=3306;dbname=idesire', 'root', '');
    }

    public function getMysqlPDO() {
        return $this->mysqlPDO;
    }
}