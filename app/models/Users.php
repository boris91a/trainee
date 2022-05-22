<?php

namespace app\models;

use app\common\MysqlModel;

class Users extends MysqlModel {

    protected function tablename() {

        return "users";
    }

}