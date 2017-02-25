<?php
namespace liw\app\controllers;

use liw\app\core\Controller;

class ErrorController extends Controller
{

/*  Конструктор дочернего класса блокирует само вызов конструктора родительского класса что бы вызвать его нужно
    указать явно.
    Если же конструктор дочернего класса отсуствует то конструктор родительского класса вызавится сам */

//   public function __construct(){
//        parent::__construct();
//    }

    public function  actionIndex(){

       // $view   = new View();
        $this->view->renderPartial('404');





        //echo "<br>загрузка страницы для ошибок";
        //return true;
    }

}