<?php

namespace Lellol\Controller\Frontend;

/**
* 
*/
class Home extends \Simple\Middleware\Controller
{

	protected $_response=array();
	public function notfoundAction()
	{
		$this->_response['test'] = 'ola mundo';
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