<?php
if(!function_exists('tucher_settings')):

    function tucher_settings(){

        utils::tucher_admin_page(

            "Theme Options", 
            "Theme Options", 
            "manage_options", 
            "tucher_settings", 
            array(new theme_settings, "initalize"), 
            "dashicons-art",
            "62"
        );

    }

endif;
add_action( 'admin_menu', 'tucher_settings', '0', '' );