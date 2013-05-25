<?php

namespace Lellol\Controller\Frontend;

/**
* What you send to response you process to template
*/
class Home extends \Simple\Middleware\Controller
{

	public function notfoundAction()
	{
		$this->response['test'] = 'ola mundo';
		echo "NOTFOUND";

		return true;
	}

	public function exceptionAction()
	{
		echo "EXCEPTION";
	}

	public function indexAction()
	{
		$this->response['foo'] = 'bar';
		echo "INDXEEE";
	}

}