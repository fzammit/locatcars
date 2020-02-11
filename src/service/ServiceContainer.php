<?php

namespace App\Service;

use Bramus\Router\Router;
use PDO;

class ServiceContainer
{

    private $configuration;
    private $router;
    private $pdo;
    private $carManager;

    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getRouter()
    {
        if ($this->router === null) {
            $this->router = new Router;
        }
        return $this->router;
    }

    public function getPdo()
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                $this->configuration['db']['dsn'],
                $this->configuration['db']['username'],
                $this->configuration['db']['password'],
            );
            return $this->pdo;
        }
    }
    
    public function getCarManager()
    {
        if ($this->carManager === null) {
            $this->carManager = new CarManager($this->getPdo());
        }

        return $this->carManager;
    }
}
