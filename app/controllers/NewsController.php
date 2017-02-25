<?php

namespace liw\app\controllers;
use \liw\app\core\Controller as Controller;

class NewsController extends Controller
{
    private $objectdata;



    public function __construct(){

      parent::__construct();

    }

    /**
     * @param $news_id
     * @return bool
     */

    public function actionListing($news_id){

      $result =  $this->object->getListing($news_id);
      $this->view->render('index',$result);
      //echo $view;



     // echo '<br>'."выполнился метод actionIndex";
      return true;

    }


}