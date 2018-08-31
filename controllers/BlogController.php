<?php

require_once realpath(MODELS.'Post.php');

class BlogController extends Controller
{
    public function index()
    {
        $data = Post::selectAll();
        $data['title'] = 'Blog Post Page';
        $this->_view->render('blog/index', $data);
    }
}
