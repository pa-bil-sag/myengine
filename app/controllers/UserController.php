<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 10.02.2017
 * Time: 2:58
 */

namespace liw\app\controllers;

use liw\app\core\Controller;
use liw\app\core\Liw;
use liw\app\core\Model;
use liw\app\core\web\Session;

class UserController extends Controller
{


    public function actionRegister()
    {
        $default = Model::getDefault();
        $data = $this->object->getListing();

        $this->view->render('register', $data, $default);

        return true;

    }

    public function actionLogin()
    {

        $default = Model::getDefault();
        $data = $this->object->getListing();

        $this->view->render('login', $data, $default);

        return true;
    }

    public function actionLogout()
    {

        Session::destroy();
        Liw::$isGuest = true;
        setcookie('USER', '', strtotime('+90 days'));
        setcookie('PASS', '', strtotime('+90 days'));

        header('Location: /');

        return true;

    }

} 