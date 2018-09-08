<?php
  
    define('ROOT', realpath(__DIR__.'/../'));
    define('VIEWS', ROOT.'/views/');
    define('CONTROLLERS', ROOT.'/controllers/');
    define('MODELS', ROOT.'/models/');
    define('CONFIG', ROOT.'/config/');
    define('CORE', ROOT.'/core/');

    define('EXT', '.php');
    define('APPNAME', 'Great Shopaholic');
    define('SLOGAN', 'Lets Build Cool Cats Site!');

    define('DB', ROOT.'/db/');
    define('DB_CONFIG_FILE', CONFIG.'db.php');
    define('LOGS', ROOT.'/logs/');
    define('SESSION_PREFIX', 'shop_');