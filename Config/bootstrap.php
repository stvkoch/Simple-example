<?php
return array(
	function(){
		echo "<pre>";
	},
	function(){
		$loader = require '../vendor/autoload.php';
		$loader->add('Frontend', __DIR__.'/../Controller');
	},
	function($backbone){
		var_dump($backbone);
	},
);