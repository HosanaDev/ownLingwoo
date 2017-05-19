<?php

use Silex\Provider\MonologServiceProvider;
use Silex\Provider\WebProfilerServiceProvider;

// include the prod configuration
require __DIR__.'/prod.php';

// config db 
$app['db.options'] = array(

	'driver' => 'pdo_mysql',
	'charset' => 'utf8',
	'host' => 'localhost',
	'dbname' => 'lingwoo',
	'user' => 'root',
	'password' => ''
);


// enable the debug mode
$app['debug'] = true;

$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../var/logs/silex_dev.log',
));

$app->register(new WebProfilerServiceProvider(), array(
    'profiler.cache_dir' => __DIR__.'/../var/cache/profiler',
));
