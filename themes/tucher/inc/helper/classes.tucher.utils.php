<?php

class utils{

    protected static $instance;

    //Function to initiate the Instance for Classes
    public static function get_instance($instance){

        self::$instance = new $instance();
        return self::$instance;

    }

    //Dynamically Register menu pages
    public static function tucher_admin_page( $page_title, $menu_title, $capability, $menu_slug, $callback = '', $icon_url = '', $position = null ){

        $page =  add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $callback, $icon_url, $position );

        return $page;
    }
}