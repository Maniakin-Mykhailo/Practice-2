<?php

namespace app\controllers;

use app\models\Post;

class PostController extends AppController
{
    public function indexAction(){
        $posts = \R::findAll('posts');
        $this->set(compact('posts'));
    }

}