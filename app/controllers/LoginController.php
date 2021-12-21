<?php

namespace app\controllers;

use app\models\User;

class LoginController extends AppController
{
    public function indexAction(){

    }
    public function loginAction(){
        if(!empty($_POST)){
            $user = new User();
            if($user->login()){
                $_SESSION['success'] = 'Вы успешно авторизованы';
                redirect('/profile');
            }else{
                $_SESSION['error'] = 'Логин/пароль введены неверно';
                redirect('/login');
            }

        }
    }

}