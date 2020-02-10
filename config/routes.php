<?php

$router = $container->getRouter();

$router->get('/hello', function() {
    echo "Hello world !";
});

$router->get('/', function () {
    echo "Bienvenue sur mon site !";
});

$router->run();