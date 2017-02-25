<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 20.02.2017
 * Time: 2:40
 */

namespace liw\app\controllers;


use liw\app\core\Controller;
use liw\app\core\Liw;
use liw\app\core\Massage;
use liw\app\core\Model;
use liw\app\models\PostData;

class LoginController extends Controller
{
    /**
     * правила проверки логина и пароля
     * @var array
     */
    private static  $privates = [
        'username' =>[ 'min' => 3,
                       'max' => 30,
                       'pregmatch' => '~^[a-zA-Z0-9]+$~',
                       'name' => 'логин'],

        'password' =>[ 'min' => 6,
                       'max' => 30,
                       'name' => 'пароль']
    ];

    public function actionLogin()
    {
       // session_unset('Massage');
        if (isset($_POST['login'])) {
            //метод проверки пост данных
            if(isset(self::$privates)){
                PostData::checkPost(self::$privates);

            }

                $username = htmlspecialchars($_POST['username']);

                $username = htmlspecialchars($_POST['password']);

        } else {

            Massage::getMassage(0, 'Авторизация не пройдена');

        }

        return true;
    }

} 