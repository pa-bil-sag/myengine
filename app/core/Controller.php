<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 01.02.2017
 * Time: 1:04
 */

namespace liw\app\core;
use \liw\app\models\StandData as StandData;
//use \liw\app\core\View2 as View2;


class Controller {
    protected   $object;
    protected   $view;
    protected   $default;
    protected static  $params = [];

    /**
     * в $default - создатся обьект Model общие обьекты используемы на всех страницах
     * в $object  - запишется все методы для запросов из роутинга
     * в $view    - все методы для генерации страницы
     */
    public   function __construct(){
        $this->default = new Model();
        $this->object  = new StandData();
        $this->view    = new View();
        $result = $this->getUser();
       // self::$params = array_merge(self::$params,Model::$array,$this->object->getListing());
     //   $this->actionIndex();

        //return $objec;
    }

//    protected function actionIndex(){
//
//        self::$params = array_merge(self::$params,Model::$array,$this->object->getListing());
//        $view   = new View();
//        $view->render('index',self::$params);
//        return true;
//
//
//    }


    private function getUser(){


        if($_COOKIE['user'])
        {}

        return true;
    }

} 