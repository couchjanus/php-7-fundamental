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
}
