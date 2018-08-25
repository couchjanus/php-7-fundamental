<?php

class BlogController extends Controller
{
    // require_once MODELS.'Post.php';

    public function index()
    {  
        $title = 'Our <b>Cat Members</b>';
        $this->_view->render('blog/index', ['title'=>$title]);
    }
}
