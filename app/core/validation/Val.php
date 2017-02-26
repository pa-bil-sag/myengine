<?php
/**
 * Created by PhpStorm.
 * User: aleksey
 * Date: 26.02.2017
 * Time: 19:18
 */

namespace liw\app\core\validation;


use liw\app\models\PostData;

class Val {
    static function validate($arr,$post){

        if(is_array($arr)){


                if(mb_strlen($_POST[$post])< $arr['min'] ){
                    PostData::$massage[] = $arr['name'].' не дожен быть меньше '.$arr['min'].' симоволов !';
                }elseif(mb_strlen($_POST[$post])> $arr['max']){
                    PostData::$massage[] = $arr['name'].' не дожен быть больше '.$arr['max'].' симоволов !';
                }
                if(isset($arr['pregmatch']) && !empty($arr['pregmatch'])){
                    if(preg_match($arr['pregmatch'],$_POST[$post],$matches) == 0) {
                        PostData::$massage[] = $arr['name'] . ' должен содержать только цифры и латиницу !';
                    }
                }
                if(PostData::$massage != null){
                    return;
                }
                else{
                    //запись значения в массив который пойдет в бд для запроса или сохранения

                }

        }

    }

} 