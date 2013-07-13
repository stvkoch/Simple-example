<?php

return array(
	//\Simple\Middleware\Application::definition(array('namespace'=>'\Lellol\Middleware', class'=>'bootstrap', 'function'=>'start', 'id'=>'lellol.bootstrap')),
	\Simple\Middleware\Application::definition(array('class'=>'Request','function'=>'parse', 'configFilenameRoutes'=>'routes', 'id'=>'simple.request')),
	//\Simple\Middleware\Application::definition(array('namespace'=>'\Lellol\Middleware', class'=>'cache', 'function'=>'open', 'id'=>'lellol.cache')),
	//\Simple\Middleware\Application::definition(array('class'=>'View','function'=>'open', 'id'=>'simple.view')),
	//yours middlewares pre controler
	//\Simple\Middleware\Application::definition(array('namespace'=>'\Lellol\Middleware', class'=>'flash', 'function'=>'open', 'id'=>'lellol.flash')),
	\Simple\Middleware\Application::definition(array('class'=>'Application', 'function'=>'dispatch', 'id'=>'simple.application')),
	//yours middlewares pos controler
	//\Simple\Middleware\Application::definition(array('namespace'=>'\Lellol\Middleware', class'=>'flash', 'function'=>'save', 'id'=>'lellol.flash')),
	//\Simple\Middleware\Application::definition(array('class'=>'View', 'function'=>'render', 'id'=>'simple.view')),

	\Simple\Middleware\Application::definition(
	    array(
	        'namespace'=>'SmartyTemplate\Middleware',
	        'class'=>'View',
	        'function'=>'send',
	        'id'=>'simple.view',
	        'compileDir'=> \Simple\Config\PHP::get('application', 'templateCompileDir')
	    )
	),

	//\Simple\Middleware\Application::definition(array('namespace'=>'\Lellol\Middleware', class'=>'cache', 'function'=>'save', 'id'=>'lellol.cache')),
	//\Simple\Middleware\Application::definition(array('class'=>'View', 'function'=>'send', 'id'=>'simple.view', 'route'=>'!404$')),



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
