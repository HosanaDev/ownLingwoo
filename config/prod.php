<?php

// configure your app for the production environment

$app['twig.path'] = array(__DIR__.'/../templates');
$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');

$app['db.options'] = array(

	'driver' => 'pdo_mysql',
	'charset' => 'utf8',
	'host' => 'localhost',
	'dbname' => 'lingwoo',
	'user' => 'root',
	'password' => ''
	);
