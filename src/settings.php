<?php
return [
    'settings' => [
        'displayErrorDetails' => false, // set to false in production

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'APP NAME',
            'path' => __DIR__ . '/../logs/app.log',
        ],

        // database connection
        'dbConnection' => [
            'host' => 'localhost',
            'login' => 'root',
            'password' => 'satelit.01',
            'database' => 'timetracker',
            'port' => '8889'
        ]
    ],
];