<?php

return array(
    //define namespace for all controller
    array(
        'route'=>'.*',
        'namespace'=>'\Lellol\Controller\Frontend',
        '_continue'=>true
    ),

    array(
    	'route'=>'\.json$',
    	'format'=>'json',
    	'_continue'=>true
    ),

    array(
    	'route'=>'404$',
    	'class'=>'home',
    	'action'=>'notfound'
    ),

    array(
    	'route'=>'500$',
    	'class'=>'home',
    	'action'=>'exception'
    ),
    array(
    	'route'=>'^/$',
    	'class'=>'home',
    	'action'=>'index'
    ),
    array(
    	'route'=>'^/([^/]+)/?$',
    	'class'=>1,
    	'action'=>'index'
    ),
    array(
    	'route'=>'^/([^/]+)/([^/]+)/?(.*)?$',
    	'class'=>1,
    	'action'=>2,
    	'params'=>3
    ),
);