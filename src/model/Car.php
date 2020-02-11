<?php

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
     * 
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
     * 
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
     * 
     * @return void
     */
    public function setModel()
    {
        return $this->model;
    }
}
