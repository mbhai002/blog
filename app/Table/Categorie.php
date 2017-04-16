<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 16/04/2017
 * Time: 23:36
 */

namespace App\Table;
use App\App;

class Categorie{


    private static $table = 'categories';

    public static function all() {


        return App::getDb()->query("select  * from  " . self::$table . "", __CLASS__);
    }



    }
