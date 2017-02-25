<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 05.02.2017
 * Time: 3:32
 */
//изменил методы на статичные так красивее и быстрея
namespace liw\app\core;

class Model
{
    public $array = [];

    public static $default = [];


    public function __construct()
    {
        //$this->CONNECT = mysqli_connect(HOST,USER,PASS,DB);
        $this->array = array_merge($this->array, $this->getHeader(), $this->getMenu(), $this->getSideBar(), $this->getFooter());

    }

    public static  function getDefault()
    {
        return self::$default = array_merge(self::$default, self::getHeader(), self::getMenu(), self::getSideBar(), self::getFooter());

    }
// меняем методы
//_________________________________________
/*    private function getHeader()
    {

        return ['header' => ['имя сайта', 'приведствие', 'контакты']];

    }*/
    private static function getHeader()
    {

        return ['header' => ['имя сайта', 'приведствие', 'контакты']];

    }
/*    private function getMenu()
    {

        return ['menu' => ['Главная' => '/', 'Второе меню' => 'next_menu', 'Обо мне' => 'about_me', 'Контакты' => 'contacts']];

    }*/
    private static function getMenu()
    {

        return ['menu' => ['Главная' => '/', 'Второе меню' => 'next_menu', 'Обо мне' => 'about_me', 'Контакты' => 'contacts']];

    }

/*    private function getSideBar()
    {

        return ['sidebar' => ['Главная', 'Второе меню', 'Обо мне', 'Контакты']];

    }*/
    private static function getSideBar()
    {

        return ['sidebar' => ['Главная', 'Второе меню', 'Обо мне', 'Контакты']];

    }

/*    private function getFooter()
    {

        return ['footer' => ['Контакты', 'Карта', 'Обо мне']];

    }*/
    private static function getFooter()
    {

        return ['footer' => ['Контакты', 'Карта', 'Обо мне']];

    }
    // abstract function  getContent();

} 