<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 01.02.2017
 * Time: 1:02
 */

namespace liw\app\models;
use \liw\app\core\Model;

class StandData {
    private $CONNECT;

    public function __construct(){


    }

    public function getListing($news_id = null){
        return ['title'=>'new','body'=>'Текст новости каторой мы взяли из бд'];
    }

    //получить записи всех категорий отсортированных по дате макс.10 записей

    //получить записи одной категории сортировка по дате макс.10 записей

    //получить одну запись указанной id

    //редактировать запись доступно только для админа

    //добавить запись доступно только для админа

    //удалить запись доступно только для админа



} 