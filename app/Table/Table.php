<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 17/04/2017
 * Time: 00:00
 */
namespace App\Table;

use App\App;

class Table{

    protected $table;

    public function __construct(){

        var_dump(get_class($this));


    }

}
























































 /*

     //@return array


    protected static $table;



    public static function find($id){

        return App::getDb()->prepare("select  * from  " . static::$table . " where id = ? ",[$id], get_called_class(),true);

    }

    public static function query($statement,$attributes=null,$one=false){

        if($attributes){

            return App::getDb()->prepare($statement,$attributes, get_called_class(),$one);

        }else{

            return App::getDb()->query($statement, get_called_class(),$one);

        }


    }

    public static function all() {


        return App::getDb()->query("select  * from  " . static::$table . " ", get_called_class());
    }

    public function __get($key){


        $method='get'.ucfirst($key);
        $this->$key=$this->$method();
        return $this->$key;

    }















}
*/