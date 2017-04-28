<?php

namespace App\Controller;

class DemoController extends AppController{

    public function index(){
        require ROOT . '/Query.php';
        echo \Query::select('id', 'titre', 'contenu',image_id)
            ->from('articles', 'Post')
            ->where('Post.category_id = 1')
            ->where('Post.date > NOW()');
    }

}