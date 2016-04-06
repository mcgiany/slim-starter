<?php
// Routes

// example of route
$app->get('/{name}', 'Lib\Controller\ExampleController:ExampleMethod')->add('Lib\Middleware\Example');