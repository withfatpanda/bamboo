<?php
global $wp_prefix;

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch' => PDO::FETCH_CLASS,

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

    'default' => getenv('DB_CONNECTION') ?: 'mysql',

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
            'driver'    => 'mysql',
            'host'      => getenv('DB_HOST') ?: 'localhost',
            'port'      => getenv('DB_PORT') ?: 3306,
            'database'  => getenv('DB_NAME') ?: 'forge',
            'username'  => getenv('DB_USER') ?: 'forge',
            'password'  => getenv('DB_PASSWORD') ?: '',
            'charset'   => getenv('DB_CHARSET') ?: 'utf8',
            'collation' => getenv('DB_COLLATE') ?: 'utf8_unicode_ci',
            'prefix'    => getenv('DB_PREFIX') ?: 'wp_',
            'timezone'  => getenv('DB_TIMEZONE') ?: '+00:00',
            'strict'    => getenv('DB_STRICT_MODE') ?: false,
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

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'cluster' => getenv('REDIS_CLUSTER') ?: false,

        'default' => [
            'host'     => getenv('REDIS_HOST') ?: '127.0.0.1',
            'port'     => getenv('REDIS_PORT') ?: 6379,
            'database' => getenv('REDIS_DATABASE') ?: 0,
            'password' => getenv('REDIS_PASSWORD') ?: null
        ],

    ],

];
