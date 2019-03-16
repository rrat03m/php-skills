<?php



$query = require 'core/bootstrap.php';



 
$router = new Router;



require 'routes.php';


$index = 'routers/';

$uri = trim($_SERVER['REQUEST_URI'], '/');
$uri = substr($uri, 8);

var_dump($uri);

require $router->direct($uri);

