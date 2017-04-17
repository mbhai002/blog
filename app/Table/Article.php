<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 16/04/2017
 * Time: 00:38
 */

namespace App\Table;
use App\App;

class Article extends Table{

    /**
     * @return array
     */
    public static function getLast(){

        return App::getDb()->query('
              select articles.id, articles.titre, articles.contenu, categories.titre as categorie 
              from articles 
              LEFT JOIN categories 
                ON categories_id=categories.id', __CLASS__);
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