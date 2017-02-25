<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 17.02.2017
 * Time: 22:39
 */

namespace liw\app\models;


class ConnectData {

   public static $CONNECT;

    public static  function connect(){
      self::$CONNECT  =  mysqli_connect(HOST,USER,PASS,DB) or die('нет подключения к mysql');
        return self::$CONNECT;
    }

} 