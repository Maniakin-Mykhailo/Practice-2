<?php

namespace app\controllers;

use app\models\User;

class RegistrationController extends AppController
{
    public function indexAction(){

    }
    public function signupAction(){
        if(!empty($_POST)){
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if(!$user->validate($data) || !$user->checkUnique()){
                $user->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }
            $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            if($user->save('users')){
                redirect('/login');
            }else{
                redirect('/signup');
                $_SESSION['error'] = 'Ошибка! Попробуйте позже';
            }

        }
    }

}