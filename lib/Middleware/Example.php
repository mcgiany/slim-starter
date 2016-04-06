<?php

namespace Lib\Middleware;

class Example extends BaseMiddleware
{
	public function __invoke($request, $response, $next)
	{
		$this->logger->info("Zalogovanie v Middleware");
		return $next($request, $response);
	}
}

?>