<?php
error_reporting(-1);
ini_set("display_errors", 1);

//open autoloader
$loader = require __DIR__.'/../vendor/autoload.php';


//set default Config directory, where find config files
\Simple\Config\PHP::setPath(__DIR__.'/../Config/');

//get midlewares definitions
$middlewaresRoutes = \Simple\Config\PHP::getScope('middlewares');

//Create Router
$router = new \Simple\Request\Router($middlewaresRoutes);

//Ho middlewares running by request?
$middlewaresFromRouter = $router->getResourcesByURI($_SERVER['REQUEST_URI']);

//create backbone application
$applicationBackbone = new \Simple\Application\Backbone(\Simple\Config\PHP::getScope('bootstrap'));


$applicationBackbone->runResources($middlewaresFromRouter);

