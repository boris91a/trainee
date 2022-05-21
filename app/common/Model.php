<?php
namespace app\common;

abstract class Model {

    protected $connection;
    protected $query;

    abstract public function find();
    abstract public function update($id, $params);
    abstract public function delete($id);
    abstract public function one();
    abstract public function all();

}