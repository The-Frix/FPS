<?php
/**
 * LIBS
 */
class libs
{
	function add_lib($lib_name, $route){
		if ($route->debug == true){
			echo "Added lib: ".'libs/'.$lib_name.".php";
		}
		require 'libs/'.$lib_name.".php";
	}
}

?>