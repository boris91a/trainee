<?php
namespace app\controllers;

use app\common\Controller;

class ProfileController extends Controller {

    public function actionIndex() {

        $this->render('index');

    }

}