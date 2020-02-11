<?php

$router = $container->getRouter();

$router->setNameSpace('App\Controller');
$router->get('/cars', 'CarsController@index');

$router->run();
