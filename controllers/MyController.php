<?php


namespace app\controllers;

class MyController extends AppController
{
    public function actionIndex($id)
    {
        $hi = 'Hello word!';
        $names = ['Ivanov', 'Petrov', 'Sidorov'];
        return $this->render('index', compact('hi', 'names', 'id'));
    }

    public function actionBlogPost()
    {
    //my/blog-post
        return'Blog Post';
    }
}