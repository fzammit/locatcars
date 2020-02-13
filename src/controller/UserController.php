<?php

namespace App\Controller;

class UserController extends AbstractController
{
    public function index()
    {
        $users = $this->container->getUserManager()->findAll();
        
        var_dump($users);
    }
}
