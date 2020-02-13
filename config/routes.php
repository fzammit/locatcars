<?php

$router = $container->getRouter();

$router->setNamespace('App\Controller');

$router->get('/cars', 'CarsController@index');

$router->get('/cars/new', 'CarsController@new');
$router->post('/cars', 'CarsController@create');

$router->get('/users', 'UsersController@index');
$router->get('/users/(\d+)', 'UsersController@show');


$router->run();
