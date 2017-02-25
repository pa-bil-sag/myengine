<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 25.02.2017
 * Time: 2:15
 */

namespace liw\app\models;


use liw\app\core\Massage;

class PostData
{
    public static  $massage = [];

    /**
     * @param $privates - если массив то в нем правила и имена post данных
     * восновном проверяет input
     */
    public static function checkPost($privates)
    {
        if (is_array($privates)) {
            foreach ($privates as $item => $value) {
                if (isset($_POST[$item]) && !empty($_POST[$item])) {
                    //проверяем через валидацию

                } else {

                    self::$massage[] = 'это checkPost Заполните поле - ' . $value['name'];
                }

            }
            if (!empty(self::$massage)) {
                //собрав все ошибки в массив, мы их передодим для записи в сессию
                Massage::getMassage(0, self::$massage);
            }
        } else {
            if (isset($_POST[$privates]) && !empty($_POST[$privates])) {
                //проверяем через валидацию


            } else {
                Massage::getMassage(0, 'Заполните поле - ' . $privates);
            }

        }

    }

} 