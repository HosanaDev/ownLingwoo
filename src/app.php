<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;

$app = new Application();
$app -> register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());


$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

$app['dao.user'] = function ($app) {
	return new DAO\UserDAO($app['db']);
};

$app['dao.profile'] = function ($app) {
	return new DAO\ProfileDAO($app['db']);
};

$app['dao.matches'] = function ($app) {
	return new DAO\MatchesDAO($app['db']);
};

$app['dao.messages'] = function ($app) {
	return new DAO\MessagesDAO($app['db']);
};

$app['dao.likes'] = function ($app) {
	return new DAO\LikesDAO($app['db']);
};






return $app;
