<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 05.02.2017
 * Time: 1:37
 */

namespace liw\app\controllers;


use liw\app\core\Controller;

class MainController extends Controller {


    public function actionIndex($param = null)
    {

            $default = $this->default->array;
            $data = $this->object->getListing($param);

            $this->view->render('index', $data, $default);

        return true;

    }

} 