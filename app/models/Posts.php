<?php
namespace app\models;

use app\common\MysqlModel;

class Posts extends MysqlModel {

    protected function tablename(){

        return "posts";
    }

}
