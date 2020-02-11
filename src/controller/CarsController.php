<?php

namespace App\Controller;

class CarsController
{


    public function index()
    {
        $cars = [
            [
                "brand" => "Maserati",
                "model" => "Alfieri"
            ],
            [
                "brand" => "Ferrari",
                "model" => "F8 Tributo"
            ]
        ];

        include_once __DIR__ . '/../../template/cars/index.php';
    }
    public function show(int $id)
    {
        echo " Voici la voiture numéro" . $id;
    }
}
