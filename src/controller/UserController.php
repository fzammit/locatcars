<?php

namespace App\Controller;

class UserController extends AbstractController
{
    
    public function index()
    {
        $users = $this->container->getUserManager()->findAll();

        echo $this->container->getTwig()->render('/users/index.html.twig', [
            'users' => $users,
        ]);
    }
}
