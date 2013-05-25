<?php

namespace Lellol\Frontend\Controller;

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
		$this->response['name'] = 'bar';
		$this->response['items'] = array('item'=>array(array('name'=>'Thomas', 'age'=>18), array('name'=>'Petter', 'age'=>19), array('name'=>'Philip', 'age'=>17)));
	}

}