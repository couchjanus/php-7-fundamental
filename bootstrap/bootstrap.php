<?php

// Общие настройки
declare(strict_types=1);

// Устанавливаем временную зону по умолчанию
if (function_exists('date_default_timezone_set')) {
    date_default_timezone_set('Europe/Kiev');    
}

// Ошибки и протоколирование
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL | E_NOTICE | E_STRICT | E_DEPRECATED);
ini_set('error_log', dirname(__FILE__) . '/../logs/errors.log');

require_once realpath(__DIR__).'/../config/app.php';

require_once realpath(__DIR__).'/./autoload.php';

// Регистрируем автозагрузчик
spl_autoload_register("autoloadsystem");

// require_once CORE.'Connection.php';
// require_once CORE.'Slug.php';

// require_once CORE.'View.php';
// require_once CORE.'Model.php';
// require_once CORE.'App.php';

// require_once CORE.'Controller.php';
// require_once CORE.'Request.php';
// require_once CORE.'Router.php';
// require_once CORE.'Session.php';
// require_once MODELS.'User.php';

// Запускаем сессию
// Session::init();

// ob_start();

// Router::load(CONFIG.'routes.php')
//     ->directPath(Request::uri(), Request::method());

$app = new App();
$app->init();
