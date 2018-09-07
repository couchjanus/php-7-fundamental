<?php
class Post
{
    public $id;
    public $title;
    public $content;
    public $created_at;

    public static function selectAll()
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $stmt = $pdo->query("SELECT * FROM posts");
        $data['rowCount'] = $stmt->rowCount();
        $data['posts'] = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $data;
    }

    public static function store($parameters)
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $statment=$pdo->prepare("INSERT INTO posts (title, content, status) VALUES (?, ?, ?)");
        $statment->bindParam(1, $title);
        $statment->bindParam(2, $content);
        $statment->bindParam(3, $status);
        $title = $parameters['title'];
        $content = $parameters['content'];
        $status = $parameters['status'];
        $statment->execute();
    }

    public static function getPostById($id) 
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $sql = "SELECT * FROM posts WHERE id = :id";
        $res = $pdo->prepare($sql);
        $res->bindParam(':id', $id, PDO::PARAM_INT);
        $res->execute();
        $post = $res->fetch(PDO::FETCH_ASSOC);
        return $post;
    }


    public static function getPostBySlug($slug) 
    {
        $con = Connection::dbFactory(include DB_CONFIG_FILE);
        $sql = "SELECT * FROM posts WHERE slug = :slug";
        $res = $con->prepare($sql);
        $res->bindParam(':slug', $slug, PDO::PARAM_STR);
        $res->execute();
        $post = $res->fetch(PDO::FETCH_ASSOC);
        return $post;
    }


    public static function destroy($id) 
    {
        $con = Connection::dbFactory(include DB_CONFIG_FILE);
        $sql = "DELETE FROM posts WHERE id = :id";
        $res = $con->prepare($sql);
        $res->bindParam(':id', $id, PDO::PARAM_INT);
        return $res->execute();
    }

    public static function update($id, $options) 
    {

        $con = Connection::dbFactory(include DB_CONFIG_FILE);

        $sql = "
                UPDATE posts
                SET
                    title = :title,
                    content = :content,
                    status = :status
                WHERE id = :id
                ";

        $res = $con->prepare($sql);
        $res->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $res->bindParam(':content', $options['content'], PDO::PARAM_STR);
        $res->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $res->bindParam(':id', $id, PDO::PARAM_INT);
        $res->execute();
    }


}
