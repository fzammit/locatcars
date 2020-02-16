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
        $user->setFirstName($array['firstname']);
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

        $users = [];

        foreach ($data as $d) {
            $users[] = $this->arrayToObject($d);
        }
        return $users;
    }

    /**
     * @param int $id
     * @return User
     */
    public function findOneById(int $id)
    {
        $query = 'SELECT * FROM user WHERE id = :id';
        $statement = $this->pdo->prepare($query);
        $statement->execute(["id" => $id]);
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        $user = $this->arrayToObject($data);
        return $user;
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
