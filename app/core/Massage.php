<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 22.02.2017
 * Time: 20:31
 */

namespace liw\app\core;
//если хотим что бы сообщения поподали на главную, то третьим параметром отправляем '/'

use liw\app\core\web\Session;

class Massage
{
    private static $massage;

    public static function  getMassage($num, $massage, $url = null)
    {
        switch ($num) {
            case 0:
                    $id = 'Ошибка';
                    self::setMassage($massage,$id);

                break;
            case 1:

                    $id = 'Предупреждение';
                    self::setMassage($massage,$id);

                break;
            case 2:

                    $id = 'Подсказка';
                    self::setMassage($massage,$id);

                break;
            default:

                    $id = 'Ошибка';
                    self::setMassage($massage,$id);
        }
        if (!empty($url)) {
            header("Location: " . $url);
        } else {
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit;
        }


    }
//напрямую относится к getMassage без него он бесполезен
    private static function setMassage($massage,$num){
        if (is_array($massage)) {
            foreach($massage as $its) {
                Session::set(['Massage' => [$num => $its]]);
            }

        }
        else{
            $_SESSION['Massage'] = $num. $massage;

        }

    }

}