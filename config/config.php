<?php

use App\Service\ServiceContainer;

$configuration = [
    'db' => [
        'dsn'      => 'mysql:dbname=hblocatcars;host=127.0.0.1;port=3306;charset=utf8',
        'username' => 'root',
        'password' => '',
    ]
];

require_once __DIR__ . '/../vendor/autoload.php';

$container = new ServiceContainer($configuration);

/**$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Salut {{ name }}!',
]);
$twig = new \Twig\Environment($loader);
echo '<h1 style=text-align:center>' . $twig->render('index', ['name' => 'ma Couille']) . '</h1>';*/

require_once __DIR__ . '/routes.php';
