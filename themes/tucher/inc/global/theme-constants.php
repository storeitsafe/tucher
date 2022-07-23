<?php
//Base Path constant
define('BASE_THEME_PATH', get_template_directory());
define('BASE_THEME_URI',  get_template_directory_uri());

// Assets path constants
define('ASSETS_STYLES', get_template_directory_uri().'/assets/dist/css/');
define('ASSETS_SCRIPTS', get_template_directory_uri().'/assets/dist/js/');
define('INC_ASSETS_STYLES', get_template_directory().'/inc/assets/css/');
define('INC_ASSETS_SCRIPTS', get_template_directory().'/inc/assets/js/');

//Register Autoloader 
$autoloader = __DIR__ . "/theme-autoloader.php";
if(is_readable($autoloader)):

    require_once $autoloader;
    //Initializing autoloader
    $file_loader = autoloader::instance();
    $file_loader->initialize();

endif;

