<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 16/04/2017
 * Time: 23:36
 */

namespace App\Table;
use App\App;

class Categorie extends  Table{


    protected static $table = 'categories';


    public function getUrl(){

        return 'index.php?p=categorie&id=' .$this->id;
    }






    }
