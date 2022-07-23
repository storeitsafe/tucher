<?php

class utils{

    protected static $instance;

    //Function to initiate the Instance for Classes
    public static function get_instance($instance){

        self::$instance = new $instance();
        return self::$instance;

    }
}