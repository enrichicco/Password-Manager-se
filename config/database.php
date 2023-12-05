<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'dbpawd'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', 'forge'),
            // 'unix_socket' => '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock',
            /*
DB_SOCKET=/var/run/mysqld/mysqld.sock
DB_SOCKET=/Applications/XAMPP/xamppfiles/var/mysql/mysqld.sock
DB_LOG=false
DB_LOG_BACKTRACE=false
            */ 
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'timezone' => null,
            'options' => [],
            'log' => env('DB_LOG', false),
            'log_backtrace' => (bool)env('DB_LOG_BACKTRACE'),
        ],

        'test' => [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',
];
