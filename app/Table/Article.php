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

    protected static $table='articles';

    /**
     * @return array
     */
    public static function getLast(){

        return self::query('
              select articles.id, articles.titre, articles.contenu, categories.titre as categorie 
              from articles 
              LEFT JOIN categories 
                ON categories_id=categories.id');
    }

    public static function lastByCategory($categories_id){

        return self::query('
              SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie 
              FROM articles 
              LEFT JOIN categories 
                ON categories_id=categories.id where categories_id=?',[$categories_id]);

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