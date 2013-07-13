<?php

return array(
    //define namespace for all controller
    array(
        'route'=>'!^/admin',
        'namespace'=>'\Lellol\Frontend\Controller',
        '_continue'=>true
    ),
    array(
        'route'=>'^/admin',
        'namespace'=>'\Lellol\Admin\Controller',
        '_continue'=>true
    ),
    array(
    	'route'=>'\.json$',
        '_replace'=>'',
    	'format'=>'json',
    	'_continue'=>true
    ),
    array(
        'route'=>'\.xml$',
        '_replace'=>'',
        'format'=>'xml',
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