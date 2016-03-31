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
        $this->mysqlPDO = new PDO('mysql:host=memento-mori-community.de;dbname=idesire', 'idesire', 'idesire2016');
    }

    public function getMysqlPDO() {
        return $this->mysqlPDO;
    }
}