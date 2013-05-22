<?php

return array(

	\Simple\Middleware\Application::definition(array('class'=>'Request','function'=>'parse', 'id'=>'simple.request')),
	\Simple\Middleware\Application::definition(array('class'=>'Router','function'=>'parse', 'routesFileNameConfig'=>'routes', 'id'=>'simple.router')),
	\Simple\Middleware\Application::definition(array('class'=>'View','function'=>'open', 'id'=>'simple.view')),

	//yours middlewares pre controler

	\Simple\Middleware\Application::definition(array('class'=>'Application', 'function'=>'dispatch', 'id'=>'simple.application')),

	//yours middlewares pos controler

	\Simple\Middleware\Application::definition(array('class'=>'View', 'function'=>'render', 'id'=>'simple.view')),
	\Simple\Middleware\Application::definition(array('class'=>'View', 'function'=>'save', 'id'=>'simple.view')),
	//mandatory

	/*array(
		'route'=>'.*',
		'namespace' => '\Simple\Middleware',
		'class'=>'Request',
		'function'=>'parse',
		'id'=>'simple.request',

		'_run'=>true,
		'_continue'=>true,
		'_persist' => true
	),*/

	
	/*array(
		'route'=>'.*',
		'namespace' => '\Simple\Middleware',
		'class'=>'Router',
		'function'=>'parse',
		'id'=>'simple.router',

		'routesFileNameConfig'=>'routes',

		'_run'=>true,
		'_continue'=>true,
		'_persist' => true
	),*/

	//mandatory
	
	/*array(
		'route'=>'.*',
		'namespace' => '\Simple\Middleware',
		'class'=>'View',
		'function'=>'open',
		'id'=>'simple.view',

		'_run'=>true,
		'_continue'=>true,
		'_persist' => true
	),*/
//------------------------


//YOURS PRE


//------------------------
	
	//mandatory
	/*array(
		'route'=>'.*',
		'namespace' => '\Simple\Middleware',
		'class'=>'Application',
		'function'=>'dispatch',
		'id'=>'simple.application',

		'notFoundRoute'=>'/home',
		'exceptionRoute'=>'/home',

		'_run'=>true,
		'_continue'=>true,
		'_persist' => true
	),*/
//------------------------


//YOURS POS


//------------------------
	//mandatory
	
	/*array(
		'route'=>'.*',
		'namespace' => '\Simple\Middleware',
		'class'=>'View',
		'function'=>'render',
		'id'=>'simple.view',

		'_run'=>true,
		'_continue'=>true,
		'_persist' => true
	),*/

	
	//mandatory
	/*array(
		'route'=>'.*',
		'namespace' => '\Simple\Middleware',
		'class'=>'View',
		'function'=>'save',
		'id'=>'simple.view',

		'_run'=>true,
		'_continue'=>true,
		'_persist' => true
	),*/


);
