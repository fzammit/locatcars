<?php

$router = $container->getRouter();

$router->setNameSpace('App\Controller');
$router->get('/cars', 'CarsController@index');
$router->get('/users', 'UsersController@index');

$router->run();
