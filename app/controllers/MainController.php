<?php

namespace app\controllers;

use app\common\Controller;

class MainController extends Controller {

    public function actionIndex() {
        $this->render('index');

    }

    public function actionLogin() {
        $this->render('login');
    }

    public function actionRegistration(){
        $this->render('registration');
    }
}