<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap
{

	protected function initRoutes()
	{

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sub'] = array(
			'route' => '/sub',
			'controller' => 'indexController',
			'action' => 'sub'
		);

		$this->setRoutes($routes);
	}

}

?>