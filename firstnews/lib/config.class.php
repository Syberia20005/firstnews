<?php

class Config{

    protected static  $settings = array();

    public static function get($key){
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    public static function set($key, $value){
        //echo "<pre>";
        //var_dump( self::$settings[$key] = $value);
        self::$settings[$key] = $value;
    }


}