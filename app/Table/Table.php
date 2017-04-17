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

    /**
     * @return array
     */

    protected static $table;

    private static function getTable(){

        if(static::$table === null){
            $class_name=explode('\\', get_called_class());
            static::$table=strtolower(end($class_name)).'s';
        }
        // die(static::$table);

        return static::$table;
    }

    public static function all() {


        return App::getDb()->query("select  * from  " . static::getTable() . " ", get_called_class());
    }

    public function __get($key){


        $method='get'.ucfirst($key);
        $this->$key=$this->$method();
        return $this->$key;

    }















}