<?php
include 'engine/route.php';
include 'engine/source.php';

$route = new route(true);

libs::add_lib("bootstrap", $route);

switch ($route->parse_uri()) {
	case '/':
		controller::init_model("main", $route);
		break;
	case '/test/':
		controller::init_model();
		break;
	default:
		$route->err_code = 404;
		controller::init_model("errors", $route);
		break;
}
?>