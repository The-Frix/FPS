<?php
include 'libs.php';

/**
 * 
 */
class controller
{
	function init_model($file, $route){
		if (isset($route) && isset($file)){
			require 'models/'.$file.".php";
			if (isset($route->init)){
				if ($route->init == "init_view"){
					require $route->init_view;
				}else {
					echo "Неизвестная ошибка инициализации!";
				}
			}else {
				ob_end_clean();
				echo "Ошибка инициализации View компонента!";
				exit();
			}
		}else {
			ob_end_clean();
			exit();
		}
	}
	function init_view($route, $view_model){
		$route->init = "init_view";
		$route->init_view = 'views/'.$view_model.'.php';
	}
}
?>