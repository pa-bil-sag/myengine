<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 20.01.2017
 * Time: 18:11
 */

namespace liw\app\components;

use liw\app\config\Routes as src;
use liw\app\controllers\ArticleController;

class Router
{

    private $routs;
    private $error;
    private $result = false;
    public $params = [];

    public function __construct()
    {

        $rout = 'liw\app\config\Routes';
        $this->routs = new $rout();

    }

    private function getURL()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            if ($_SERVER['REQUEST_URI'] == '/') {
                $_SERVER['REQUEST_URI'] = 'index';
                return trim($_SERVER['REQUEST_URI'], '/');
            } else {
                return trim($_SERVER['REQUEST_URI'], '/');
            }
        } else {
            return 'нет строки';
        }
    }

    public function run()
    {
        $url = $this->getURL();
        //   var_dump($url);
        if ($url != 'favicon.ico') {
            foreach ($this->routs->route as $urlPattern) {

                if (preg_match($urlPattern['pattern'], $url, $matches)) {
                    //                   var_dump($matches);
                    array_shift($matches);
                    //                  var_dump($matches);
                    if (!empty($matches) && isset($urlPattern['aliases'])) {
                        foreach ($matches as $index => $value) {
                            $this->params[$urlPattern['aliases'][$index]] = $value;
                            //                        var_dump($urlPattern['aliases'][$index]);
                        }
                    }
                    //              var_dump($this->params);
                    $controllerName = ucfirst($urlPattern['class']) . 'Controller';
                    $actionName = 'action' . ucfirst($urlPattern['method']);
                    //  $segments = explode('/', $path);
                    //  $controllerName = array_shift($segments) . 'Controller';
                    // $controllerName = ucfirst($controllerName);
                    //  $actionName = 'action' . ucfirst(array_shift($segments));
                    //  var_dump($matches);
                    //            echo '<br>Класс:' . $controllerName;
                    //           echo '<br>Метод:' . $actionName;

                    $class = 'liw\\app\\controllers\\' . $controllerName;


                    //          echo '<br>' . $controllerName;

                    if (class_exists($class)) {
                        //              echo "<br>есть класс" . '<br>';

                        $controllerObject = new $class();
                        $result = call_user_func_array([$controllerObject, $actionName], $this->params);
                        //$result = $controllerObject->$actionName();
                        $this->result = $result;


                        if ($result != false) {
                            break;
                        }
                    }
                }
                //header("HTTP/1.0 404 Not Found");
                //return;


            }
            if ($this->result != true) {
                $this->error = new \liw\app\controllers\ErrorController();
                $this->error->actionIndex();
            }
        }


    }


}