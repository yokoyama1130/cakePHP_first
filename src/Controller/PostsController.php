<?php
namespace App\Controller;

class PostsController extends AppController {
    public $autoRender = false;

    public function index()
    {
        echo "Posts Index";
    }

    public function view()
    {
        echo "Posts View";
    }

}