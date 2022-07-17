<?php

/**
 * Autoloads files when requested
 * 
 * @since  1.0.0
 * @param  string $class_name Name of the class being requested
 */
function tucher_autoloader( $class_name ) {

	$prefix = "tucher";
	$suffix = "classes";
	$extention = "php";

	//Complete file Name
	$filename = $prefix.".".$class_name.".".$suffix.".".$extention;
	
	// Compile our path from the current location
	$file = get_template_directory(). '/inc/classes/'. $filename ;

	// If a file is found
	if ( file_exists( $file ) ) {
		// Then load it up!
		require( $file );
	}
}
