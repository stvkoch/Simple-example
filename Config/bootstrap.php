<?php
return array(
	function(){
		echo "<pre>";
	},
	function(){
		$loader = require '../vendor/autoload.php';
		$loader->setUseIncludePath(true);
		$loader->add('Lellol', __DIR__.'/../');
	},
	function($backbone){
	},
);