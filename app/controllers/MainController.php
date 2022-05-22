<?php

namespace app\controllers;

use app\common\Controller;
use app\models\Users;

class MainController extends Controller {

    public function actionIndex() {
        $this->render('index');
    }

    public function actionLogin() {
        if(isset($_SESSION['user']['id'])){
            $this->redirect('/');
        } else {
            if (isset($_POST['submit'])) {

                $user = $this->findOne($_POST['username']);
                if($user->password == md5($_POST['password']) & $user->status != 0){
                    if(is_null($user->avatar)) $user->avatar = 'avatar.png';
                    $_SESSION['user'] = $user->getProperties();
                    $this->redirect('/');
                } else $this->render('login');
            } else $this->render('login');
        }

    }

    public function actionRegistration(){
        //var_dump($_POST);
        if(isset($_SESSION['user']['id'])){
            $this->redirect('/');
        } else {
            if (isset($_POST['submit'])) {
            $user = new Users;
            if($_POST['password'] == $_POST['cpassword']){
                $user->username = $_POST['username'];
                $user->password = md5($_POST['password']);
                $user->email = $_POST['email'];
                $user->verification_token = hash('md5',$user->username . $user->password); //vefification for email(Not active)
                $user->status = 1; // Verification flag (Default NULL)
                if($user->save()){
                    $this->redirect("/");
                }
            }
            } else $this->render('registration');
        }
    }

    public function actionLogout() {
        if(isset($_SESSION['user']['id']))
            unset($_SESSION['user']);
        $this->render('index');
    }

    private function findOne($username){
        $model = new Users;
        return $model->find()->where(['username'=>$username])->one();
    }
}