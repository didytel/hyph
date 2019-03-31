<?php
namespace hyph;

class Hyph{
    private static $_app = null;

    private function __construct($params){
        static::$_app = new get_class();
    }
    public static function getApp($params){
        if(static::$_app === null){
            static::$_app = new Hyph($params);
        }
        return static::$_app;
    }
    public function start(){
        $page = \hyph\util\Vars::get('p').".php";
        if(file_exists($page)){
            util\Content::load($page);
        }
    }
}