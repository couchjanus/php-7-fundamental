<?php
/**
 * Контроллер для управления категориями
 */

require_once realpath(MODELS.'Category.php');

class CategoriesController extends Controller
{
    /**
     * Главная страница управления категориями
     *
     * @return bool
     */
    public function index()
    {
        $data = Category::selectAll();
        $data['title'] = 'Admin Category List Page ';
        $this->_view->render('admin/categories/index', $data);
    }

    /**
     * Добавление категории
     *
     * @return bool
     */
    public function create()
    {
        if (isset($_POST) and !empty($_POST)) {
            // sql
            $stmt = $this->_pdo->prepare("INSERT INTO categories (name, status) VALUES (?, ?)");

            // Повторяющиеся вставки в базу с использованием подготовленных запросов
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $status);

            // вставим одну строку
            $name = trim(strip_tags($_POST['name']));
            $status = trim(strip_tags($_POST['status']));

            $stmt->execute();
            header('Location: /admin/categories');
        }

        $data['title'] = 'Admin Category Add New Category ';
        $this->_view->render('admin/categories/create', $data);

    }
}
