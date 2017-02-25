<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 17.02.2017
 * Time: 20:10
 */

namespace liw\app\core;


use liw\app\models\UserData;

class User {

    public static function testUser(){
        if(Liw::$isGuest == true){
          //  setcookie('USER','Alex',strtotime('+90 days'));
          //  setcookie('PASS','12345',strtotime('+90 days'));
            if(isset($_COOKIE['USER']) && !empty($_COOKIE['USER']) && isset($_COOKIE['PASS']) && !empty($_COOKIE['PASS'])){
                //воспользоваться методом проверки куки в браузаре, если есть пользователь
                //то достаем из бд и пихаем в сесси
                $pass = $_COOKIE['PASS'];
             //   echo '<br>'.$pass;
                $user =  UserData::getUser($pass);
                if($user = true) {
                    Liw::$isGuest = false;
                }
            }
        }
    }


} 