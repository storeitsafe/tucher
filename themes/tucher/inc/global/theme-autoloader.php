<?php
if(!class_exists('autoloader')):

    class autoloader{

        protected static $instance = null;

        public static function instance(){
            if(null === self::$instance):
                self::$instance = new self();
            endif;

            return self::$instance;
        }

       	public function initialize() {
            spl_autoload_register(array($this, 'tucher_load_classes'));
	    }

        public function tucher_load_classes($classname){
        
            $directory = BASE_THEME_PATH."/inc/";

            if(!is_dir($directory)): return __(false); endif;

            $results = array_values(array_diff(scandir( $directory ), array('.', '..')));

            $totalSubDirectories = count($results);

            $initialize_loop = 0;

            for($initialize_loop; $initialize_loop < $totalSubDirectories; $initialize_loop++):

                $requested_filename[$results[$initialize_loop]] = preg_grep('~^classes.tucher.*\.php$~', scandir($directory.$results[$initialize_loop]));

                foreach($requested_filename as $key => $filename):

                    foreach($filename as $filenamekey => $filenameValue):

                    $path = $directory.$results[$initialize_loop]."/".$filenameValue;

                        if(file_exists($path)):

                            require_once $path;

                        endif;

                    endforeach;
                    
                endforeach;

            endfor;
        }
    }

endif;