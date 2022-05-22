<?php
namespace app\controllers;

use app\common\Controller;
use app\models\Users;

class ProfileController extends Controller {

    public function actionIndex() {

        $this->render('index');

    }

    public function actionChange() {
        if(isset($_SESSION['user']['id'])){
            if(isset($_POST['submit'])){
                $user = new Users();
                $user->load($_POST['user']);
                if(empty($user->password)){
                    unset($user->password);
                } else {
                    $user->password = md5($user->password);
                }
                if($user->email != $_SESSION['user']['email']){
                    $user->verification_token = md5($user->username . $user->email);
                    $user->status = 0;
                }
                if($user->save()) $_SESSION['user'] = $user->getProperties();

                $this->redirect('/profile');
            } else $this->redirect('/profile');
        } else $this->redirect('/');
    }

}