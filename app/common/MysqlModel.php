<?php
namespace app\common;

use app\common\Model;
use app\common\Db;

abstract class MysqlModel extends Model {

    protected $prepare;

    abstract protected function tablename();

    function __construct() {
        $params = require "app\config\main.php";
        $this->connection = (new Db($params['db']))->getConnection();
    }

    public function find($params = ["*"]) {
        $params = implode(",", $params);
        $this->query = "SELECT ".$params." FROM {$this->tablename()}";

        return $this;
    }

    protected function my_array_map($array) {
        foreach ($array as $key => $value) {
            $array[$key] = "$key='$value'";
        }
        return $array;
    }

    public function where($condition = [], $operand = "AND"){
        $operand = " ".$operand." ";
        if(!empty($condition)) {
            $vars = implode($operand, $this->my_array_map($condition));
            if(!stripos($this->query, "WHERE")){
                $this->query .= " WHERE ".$vars;
            } else {
                $this->query .= "$operand".$vars;
            }
        }
        return $this;
    }

    public function orWhere($condition = []) {

            return $this->where($condition, "OR");
    }

    public function all(){
        $this->execute();

        return $this->prepare->fetchAll();
    }

    public function one(){
        $this->query .= " LIMIT 1";
        $this->execute();

        return $this->prepare->fetchAll();
    }

    protected function execute() {
        if(!empty($this->query)) {
            $this->prepare = $this->connection->prepare($this->query);
            $this->query = "";
            return $this->prepare->execute();
        }
        return false;
    }

    public function update($id, $params){
        $vars = implode(", ", $this->my_array_map($params));
        $this->query = "UPDATE ".$this->tablename()." SET ".$vars." WHERE id='$id'";

        return $this->execute();
    }

    public function delete($id) {
        $this->query = "DELETE FROM ".$this->tablename()." WHERE id='$id'";

        return $this->execute();
    }

    public function in($params = []){
        $key = array_keys($params)[0];
        $vars = implode(", ", array_map(function($e){return "'$e'";},$params[$key]));
        $this->query .=" WHERE $key IN ($vars)";

        return $this;
    }

    public function setQuery($query){
        $this->query = $query;

        return $this;
    }
}