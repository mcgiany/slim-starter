<?php

namespace Lib\Controller;

use Slim\Container;

class BaseController
{
	protected $renderer;
	protected $logger;
	protected $db;

	public function __construct(Container $c)
	{
		$this->renderer = $c->get('renderer');
		$this->logger = $c->get('logger');
		$this->db = $c->get('db');
	}
}

?>