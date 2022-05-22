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

}
