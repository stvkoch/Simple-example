<?php

namespace Frontend;

/**
* 
*/
class Home extends \Simple\Middleware\Controller
{

	public function notfoundAction()
	{
		$this->response->test = 'ola mundo';
		echo "NOTFOUND";

		return true;
	}

	public function exceptionAction()
	{
		echo "EXCEPTION";
	}

	public function indexAction()
	{
		echo "INDXEEE";
	}

}