<?php
//Initiate Parent Loader
$autoloader = __DIR__."/global/autoload.php";
if(is_readable($autoloader)){
    require $autoloader;
}
spl_autoload_register( 'tucher_autoloader' );
