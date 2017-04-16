<?php
namespace App;

/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 14/04/2017
 * Time: 18:16
 */
class Autoloader{

    static function register(){

        spl_autoload_register(array(__CLASS__, 'autoload'));

    }
    static function autoload($class)
    {


        if (strpos($class, __NAMESPACE__ . '\\' )=== 0) {

            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class=str_replace('\\','/',$class);


            require __DIR__.'/' . $class . '.php';
        }

    }

}