<?php

namespace App\Controller;

class CarsController extends AbstractController
{


    public function index()
    {
        $cars = $this->container->getCarManager()->findAll();

        echo $this->container->getTwig()->render('/cars/index.html.twig', [
            'cars' => $cars, //On envoie la variable $cars à notre template. Il le recevra nommée "cars".
        ]);
    }


    public function show(int $id)
    {
        $cars = $this->container->getCarManager()->findOneById($id);
        echo $this->container->getTwig()->render('/cars/show.html.twig', [
            'cars' => $cars,
        ]);
    }

    public function new()
    {
        echo $this->container->getTwig()->render('/cars/new.html.twig');
    }

    public function create()
    {
        $this->container->getCarManager()->create($_POST);
        header('Location: ' . $this->config['env']['base_path'] . '/cars');
    }

    public function edit(int $id)
    {
        $cars = $this->container->getCarManager()->findOneById($id);

        echo $this->container->getTwig()->render('/cars/form.html.twig', [
            'cars' => $cars
        ]);
    }

    public function update(int $id)
    {
        $this->container->getCarManager()->update($id, $_POST);
        header('Location: ' . $this->config['env']['base_path'] . '/cars/' . $id);
    }

    public function delete(int $id)
    {
        $this->container->getCarManager()->delete($id);
        header('Location: ' . $this->config['env']['base_path'] . '/cars/');
    }
}
