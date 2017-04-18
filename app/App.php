<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 16/04/2017
 * Time: 21:33
 */
namespace App;
class App{


    public $title="my blog";
    private static $_instance;

    public static function getInsance(){

        if(is_null (self::$_instance)){

            self::$_instance=new App();
        }

        return self::$_instance;

    }



}

















