<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));
    return $logger;
};

// error handler
$container['errorHandler'] = function ($c) {
    return function ($request, $response, $exception) use ($c) {
        $validCodes = array(100, 101, 200, 201, 202, 203, 204, 205, 206, 300, 301, 302, 303, 304, 305, 307, 400, 401, 402, 403, 404, 405, 406, 407, 408, 409, 410, 411, 412, 413, 414, 415, 416, 417, 500, 501, 502, 503, 504, 505);

        $code = $exception->getCode();
        $message = $exception->getMessage();

        if (!in_array($code, $validCodes))
        {
            $code = 500;
            $message = 'Unexpected error - check app.log';
            $logger = $c->get('logger');
            $logger->info($exception->getMessage());
        }

        return $c['response']->withStatus($code, $message)
                             ->withHeader('Content-Type', 'text/html');
    };
};

// Data repository
$container['db'] = function ($c) {
    $connection = $c->get('settings')['dbConnection'];
    return new Lib\DataRepository(Lib\ConnectionManager::GetConnection($connection));
};

// Controllers
// 
// example
$container['Lib\Controller\ExampleController'] = function ($c) {
    return new Lib\Controller\ExampleController($c);
};

// Middlewares
// 
// example
$container['Lib\Middleware\Example'] = function ($c) {
    return new Lib\Middleware\Example($c);
};