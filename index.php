<?php
define('ROOT',dirname(__FILE__));
define('VIEWS_BASEDIR', dirname(__FILE__).'./app/views/tamplate/');
require_once ROOT.'./app/config/settings.php';
require_once ROOT.'./vendor/autoload.php';
//use liw\app\components\Router as src;
use liw\app\core\App;
App::start();
//$query_string = new liw\app\components\Router();
//$query_string->run();