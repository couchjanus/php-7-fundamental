<?php

require_once realpath(MODELS.'Post.php');

class PostsController extends Controller
{


    // public function create()
    // {
    //     //Принимаем данные из формы
    //     if (isset($_POST) and !empty($_POST)) {
    //         $stmt = $this->_pdo->prepare("INSERT INTO posts (title, content, status) VALUES (?, ?, ?)");
    //         $stmt->bindParam(1, $title);
    //         $stmt->bindParam(2, $content);
    //         $stmt->bindParam(3, $status);

    //         $title = trim(strip_tags($_POST['title']));
    //         $content = trim($_POST['content']);
    //         $status = trim(strip_tags($_POST['status']));
    //         $stmt->execute();
    //         header('Location: /admin/posts');
    //     }
    //     $data['title'] = 'Admin Add Post ';
    //     $this->_view->render('admin/posts/create', $data);
    // }

    public function index()
    {
        $data = Post::selectAll();
     
        $data['title'] = 'Admin Posts Page ';
        $this->_view->render('admin/posts/index', $data);
    }

    public function store()
    {
        $opts['title'] = trim(strip_tags($_POST['title']));
        $opts['content'] = trim($_POST['content']);
        $opts['status'] = trim(strip_tags($_POST['status']));
        Post::store($opts);
        $this->redirect('/admin/posts');
    }

    public function create()
    {
      $data['title'] = 'Admin Add Post ';
      $this->_view->render('admin/posts/create', $data);
    }

    public function edit($vars)
    {
        extract($vars);
        $data['title'] = 'Admin Edit Post ';
        $data['post'] = Post::getPostById($id);
        $this->_view->render('admin/posts/edit', $data);
    }

    public function update($vars)
    {
        extract($vars);
        $options['title'] = trim(strip_tags($_POST['title']));
        $options['content'] = trim($_POST['content']);
        $options['status'] = trim(strip_tags($_POST['status']));
        Post::update($id, $options);
        $this->redirect('/admin/posts');
    }

    public function delete($vars)
    {
        extract($vars);
        if (isset($_POST['submit'])) {

            Post::destroy($id);
            $this->redirect('/admin/posts');
          
        } elseif (isset($_POST['reset'])) {
            $this->redirect('/admin/posts');            
        }

        $data['title'] = 'Admin Delete Post ';
        $data['post'] = Post::getPostById($id);
        $this->_view->render('admin/posts/delete', $data);
    }

    public function show($vars)
    {
        extract($vars);
        // var_dump($id);
        $data['title'] = 'Admin Show Post ';
        $data['post'] = Post::getPostById($id);
        $this->_view->render('admin/posts/show', $data);

    }
}
