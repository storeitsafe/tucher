<?php

if(!class_exists('theme_settings')):

    class theme_settings{

        public function initalize(){

            $current = 'homepage';

                $tabs = array( 'homepage' => 'Home Settings', 'general' => 'General', 'footer' => 'Footer' );
                echo '<div id="icon-themes" class="icon32"><br></div>';
                echo '<h2 class="nav-tab-wrapper">';
                foreach( $tabs as $tab => $name ){
                    $class = ( $tab == $current ) ? ' nav-tab-active' : '';
                    echo "<a class='nav-tab$class' href='?page=theme-settings&tab=$tab'>$name</a>";

                }
                echo '</h2>';

                 $this->tucher_settings_page();
             }

                   

            function tucher_settings_page() {

                global $pagenow;
                $settings = get_option( "tucher_theme_settings" );

            }
    }
endif;