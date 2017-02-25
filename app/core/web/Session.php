<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 10.02.2017
 * Time: 21:26
 */

namespace liw\app\core\web;

use liw\app\core\Liw;

class Session
{

    public static function start()
    {
        session_name('liw');
        session_start();
        if ($_COOKIE['USER']) {

        }

        if (isset($_SESSION['USER']) && !empty($_SESSION['USER']['LOGIN'])) {

            Liw::$isGuest = false;


        }

    }


    static public function set($arr)
    {
        if (is_array($arr)) {
            foreach ($arr as $key => $value) {
                $_SESSION[$key] = $value;
            }
            return;
        } else {
            throw new \Exception('Variable must be array, but <strong>' . gettype($arr) . '</strong> given.');
        }

    }

    public static function unsetSession($name){
        session_unset($_SESSION[$name]);

    }

    public static function destroy(){
        session_destroy();
    }

} 