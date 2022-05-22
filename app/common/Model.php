<?php
namespace app\common;

Interface Model {

    public function find();
    public function save();
    public function update($id, $params);
    public function delete($id);
    public function all();
    public function one();
    public function getProperties();

}