<?php

namespace app\controllers;

use app\models\Post;

class PostController extends AppController
{
    public function indexAction(){
        $model = new Post;
        $posts = $model->data;
        $this->set(compact( 'posts'));

    }

}