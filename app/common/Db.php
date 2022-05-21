<?php
namespace app\common;

use PDO;

class Db {

    protected $db;

    function __construct($params){
        extract($params);
        $this->db = new PDO("mysql://host=$host;dbname=$db_name;charset=utf8", $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function getConnection(){
        return $this->db;
    }

}
