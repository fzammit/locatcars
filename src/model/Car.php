<?php

namespace App\Model;

class Car
{
    private $id;
    private $brand;
    private $model;

    /**
     * 
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId()
    {
        return $this->id;
    }

    /**
     * 
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return void
     */
    public function setBrand()
    {
        return $this->brand;
    }

    /**
     * 
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param string $model
     * @return void
     */
    public function setModel()
    {
        return $this->model;
    }
}
