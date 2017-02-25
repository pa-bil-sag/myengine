<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 17.02.2017
 * Time: 22:19
 */

namespace liw\app\models;

use liw\app\core\web\Session;
class UserData
{
    public static function getUser($pass)
    {

        $CONNECT = ConnectData::connect();

        $sql = 'SELECT `login`,`active` FROM `user` WHERE `pass` = '.$pass;

        $result = mysqli_query($CONNECT, $sql);
        $result = mysqli_fetch_assoc($result);
        $result = [
            'USER' => $result
        ];
        //var_dump($result);
        Session::set($result);
        if(isset($_SESSION['USER']));// echo '<br>'. 'сессия существует';
        if(!empty($_SESSION['USER']['login']));// echo '<br>'. 'эта сессия не пуста = '.$_SESSION['USER']['login'];

//echo  '<br>---------------------------------------------------';
        return true;

    }

} 