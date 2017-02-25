<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 11.02.2017
 * Time: 5:54
 */

namespace liw\app\core;
use liw\app\components\Router;
use liw\app\core\web\Session;

class App
{
    public static  function start()
    {
        Session::start();
        User::testUser();
        $query_string = new Router();

        $query_string->run();


    }
} 