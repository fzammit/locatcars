<?php

namespace App\Controller;

class UsersController extends AbstractController
{

    public function index()
    {
        $users = $this->container->getUserManager()->findAll();

        echo $this->container->getTwig()->render('/users/index.html.twig', [
            'users' => $users,
        ]);
    }

    public function show(int $id)
    {
        $users = $this->container->getUserManager()->findOneById($id);
        echo $this->container->getTwig()->render('/users/show.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * Afficher le formulaire de création d'un user
     * Route : GET/users/new
     */
    public function new()
    {
        echo $this->container->getTwig()->render('/users/form.html.twig');
    }

    public function create()
    {
        $this->container->getUserManager()->create($_POST);
        header('Location: ' . $this->config['env']['base_path'] . '/users');
    }

    /**
     * Afficher le formulation d'édition d'un user
     * Route : GET /users/:id/edit
     */
    public function edit(int $id)
    {
        $users = $this->container->getUserManager()->findOneById($id);

        echo $this->container->getTwig()->render('/users/form.html.twig', [
            'users' => $users
        ]);
    }

    public function update(int $id)
    {
        $this->container->getUserManager()->update($id, $_POST);
        header('Location: ' . $this->config['env']['base_path'] . '/users/' . $id);
    }
}
