<?php

namespace hyph\util;

class Vars{
    public static function get($param){
        return isset($_GET[$param])?$_GET[$param]:false;
    }
    public static function post($param){
        return isset($_POST[$param])?$_POST[$param]:false;
    }
    public static function server($param, $val = false){
        if($val !== false){
            $_SERVER[$param] = $val;
        }
        return isset($_SERVER[$param])?$_SERVER[$param]:false;
    }
}