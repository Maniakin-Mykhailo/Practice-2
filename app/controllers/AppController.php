<?php

namespace app\controllers;

use applicationCore\core\base\Controller;

class AppController extends Controller{

    public $menu;
    public $meta = [];

    public function __construct($route) {
        parent::__construct($route);
        new \app\models\Post;
        $this->menu = \R::findAll('posts');
    }

    protected function setMeta($title = '', $desc = '', $keywords = ''){
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }

}
