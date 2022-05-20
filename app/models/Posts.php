<?php
namespace app\models;

use app\common\Model;

class Posts {

    protected $datafile;

    function __construct() {
        $this->datafile = "app\data\posts.txt";
    }

    public function getData() {
        return unserialize(file_get_contents($this->datafile));
    }
}
