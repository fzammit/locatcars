<?php

namespace App\Service;

use App\Model\User;
use PDO;

class UserManager implements ManagerInterface
{

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function arrayToObject(array $array)
    {
        $user = new User;
        $user->setId($array['id']);
        $user->setFirstName($array('firstname'));
        $user->setLastName($array['lastname']);

        return $user;
    }

    /**
     * @return User()
     */
    public function findAll()
    {
        $query = "SELECT * FROM user";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        $user = [];

        foreach ($data as $d) {
            $cars[] = $this->arrayToObject($d);
        }
        return $user;
    }

    /**
     * @param int $id
     * @return User
     */
    public function findOneById(int $id)
    {
    }

    /**
     * @param string $field
     * @param string $value
     * @return User
     */
    public function findByField(string $field, string $value)
    {
    }
}
