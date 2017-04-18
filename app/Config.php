<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 17/04/2017
 * Time: 20:39
 */

namespace App;


class Config
{

    private $settings = [];
    private static $_instance;

    public function __construct()
    {
        $this->id=uniqid();
        $this->settings = require dirname(__DIR__).'/config/config.php';
    }

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Config();
        }
        return self::$_instance;
    }
/*
    public function __construct($file)
    {
        $this->settings = require($file);
    }
*/
    public function get($key)
    {
        if (!isset($this->settings[$key])) {
            return null;
        }
        return $this->settings[$key];
    }

}