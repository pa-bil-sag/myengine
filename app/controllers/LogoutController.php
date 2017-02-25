<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 20.02.2017
 * Time: 1:19
 */

namespace liw\app\controllers;


use liw\app\core\Controller;
use liw\app\core\Liw;
use liw\app\core\web\Session;

class LogoutController extends Controller{

    public function actionLogout(){

        Session::destroy();
        Liw::$isGuest = true;
          setcookie('USER','',strtotime('+90 days'));
          setcookie('PASS','',strtotime('+90 days'));

        header('Location: /');

        return true;

}

} 