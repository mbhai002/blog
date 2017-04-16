<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 16/04/2017
 * Time: 00:38
 */

namespace App\Table;

class Article{

    public function __get($key){


        $method='get'.ucfirst($key);
        $this->$key=$this->$method();
        return $this->$key;

        // TODO: Implement __get() method.
    }

    public function getUrl(){

        return 'index.php?p=article&id=' .$this->id;
    }

    public function getExtrait(){

        $html='<p>'.substr($this->contenu,0,50).'</p>';
        $html.='<p><a href="'.$this->getUrl().'">voir la suite</a></p>';
        return $html;
    }



}