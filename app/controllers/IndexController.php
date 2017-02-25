<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 27.01.2017
 * Time: 22:26
 */

namespace liw\app\controllers;


class IndexController {
    public function actionDefault(){
        echo "метод для главной страницы";
        return true;
    }

} 