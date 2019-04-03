<?php

class IndexController extends BaseController 
{
    public function indexAction()
    {
        echo 21321;
        return false;
    }
    public function authAction()
    {
        $range = include(APPLICATION_PATH.'/conf/range.php');
        echo toJson($range);
//        array_walk_recursive($range,function ($item,$key){
//            if($item === 'information'){
//                echo 1111;
//            }
//        });
        return false;
    }
}