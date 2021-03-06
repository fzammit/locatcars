<?php

$router = $container->getRouter();
$router->setNamespace('App\Controller');

$router->get('/cars', 'CarsController@index');
$router->get('/cars/(\d+)', 'CarsController@show');

$router->get('/cars/(\d+)/edit', 'CarsController@edit');
$router->post('/cars/(\d+)/edit', 'CarsController@update');
$router->get('/cars/(\d+)/delete', 'CarsController@delete');

$router->get('/cars/new', 'CarsController@new');
$router->post('/cars', 'CarsController@create');

$router->get('/users', 'UsersController@index');
$router->get('/users/(\d+)', 'UsersController@show');

$router->get('/users/(\d+)/edit', 'UsersController@edit');
$router->post('/users/(\d+)/edit', 'UsersController@update');
$router->get('/users/(\d+)/delete', 'UsersController@delete');

$router->get('/users/new', 'UsersController@new');
$router->post('/users', 'UsersController@create');


$router->run();
