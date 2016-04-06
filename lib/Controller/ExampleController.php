<?php

namespace Lib\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class ExampleController extends BaseController
{
	public function ExampleMethod(Request $request, Response $response, $args)
	{
		$this->logger->info("Zalogovanie v controlleri");
		return $this->renderer->render($response, 'index.phtml', $args);
	}
}

?>