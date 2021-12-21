<?php

namespace app\controllers;

use app\models\User;

class ProfileController extends AppController
{
    public function indexAction(){
    }
    public function profileAction()
    {
        $model = new User;
        $id = $_SESSION['user']['id'];
        $data = $_POST;

        if ( isset($data['change_name']))
        {
            $findName = \R::findOne('users', 'id = ?', [$id]);
            $findName->name = $data['name'] ;
            \R::store($findName);
            redirect('/profile');
        }

        if ( isset($data['change_login']))
        {
            $findLogin = \R::findOne('users', 'id = ?', [$id]);
            $findLogin->login = $data['login'] ;
            \R::store($findLogin);
            redirect('/profile');

        }
        if ( isset($data['change_email']))
        {
            $findEmail = \R::findOne('users', 'id = ?', [$id]);
            $findEmail->email = $data['email'] ;
            \R::store($findEmail);
            redirect('/profile');

        }
        if ( isset($data['change_password']))
        {
            $findPassword = \R::findOne('users', 'id = ?', [$id]);
            $findPassword->password = password_hash($data['password'], PASSWORD_DEFAULT);
            \R::store($findPassword);
            redirect('/profile');

        }
        if ( isset($data['change_avatar']))
        {
            $findAvatar = \R::findOne('users', 'id = ?', [$id]);
            $ava = $_FILES['avatar']['name'];
            $avaTmp = $_FILES['avatar']['tmp_name'];
            $path = "uploads/" . $ava;
            $findAvatar->avatar = $ava;
            if (move_uploaded_file($avaTmp, $path))
            {

            }
            \R::store($findAvatar);
            redirect('/profile');


        }

    }
    public function logoutAction(){
        if(isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect('/');
    }

}