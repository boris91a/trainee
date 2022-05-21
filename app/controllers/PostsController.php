<?php

namespace app\controllers;

use app\common\Controller;
use app\models\Posts;

class PostsController extends Controller{

    public function actionIndex(){

        $model = new Posts;
        $posts = $model->find()->all();

        $this->render('index',["posts" => $posts]);
    }

    private function findOne($id){
        $model = new Posts;
        $model->find()->where(['id'=>$id])->one();

        return $model;
    }

}
