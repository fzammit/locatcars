<?php

namespace App\Model;

class User
{

    private $id;
    private $firstname;
    private $lastname;

    /**
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
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getfirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return void
     */
    public function setFirstName( string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getlastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return void
     */
    public function setLastName(string $lastname)
    {
        $this->lastname = $lastname;
    }
}
