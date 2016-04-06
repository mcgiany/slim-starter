<?php

namespace Lib\Middleware;

use Slim\Container;

class BaseMiddleware
{
	protected $logger;
	protected $db;

	public function __construct(Container $c)
	{
		$this->db = $c->get('db');
		$this->logger = $c->get('logger');
	}
}

?>