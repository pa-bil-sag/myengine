<?php
namespace liw\app\config;
class Routes {
    public  $route;

    public function __construct(){
        //echo "массив правил строки запроса";
        return $this->route=[
            [
                'pattern'=>'~^index$~',
                'class'  =>'main',
                'method' =>'index',

            ],
            [
                'pattern'=>'~^news/([0-9]+)$~',
                'class'  =>'news',
                'method' =>'listing',
                'aliases'=>['news_id'],
            ],
            [
                'pattern'=>'~^article/([0-9]+)$~',
                'class'  =>'article',
                'method' =>'listing',
                'aliases'=>['article_id'],
            ],
            [
                'pattern'=>'~^products(/[a-z0-9_/\-]+/)([0-9]+)$~',//([a-z]+) ckti tot tcnm /
                'class'  =>'product',
                'method' =>'listing',
                'aliases'=>['product_id','topic_id'],
            ],
            [
                'pattern'=>'~^register$~',
                'class'  =>'user',
                'method' =>'register',
            ],
            [
                'pattern'=>'~^logout$~',
                'class'  =>'user',
                'method' =>'logout',
            ],
            [
                'pattern'=>'~^login$~',
                'class'  =>'user',
                'method' =>'login',
            ],
            [
                'pattern'=>'~^ingoing$~',
                'class'  =>'login',
                'method' =>'login',
            ],


        ];

    }


//'index'   =>'index/default',
//'news'    =>'news/listing',
//'products'=>'product/listing',
//'article' =>'article/listing'



    }