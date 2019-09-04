<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LesRecettesDeCuisineController extends AbstractController
{
    /**
     * @Route("/les/recettes/de/cuisine", name="les_recettes_de_cuisine")
     */
    public function index()
    {
        return $this->render('les_recettes_de_cuisine/index.html.twig', [
            'controller_name' => 'LesRecettesDeCuisineController',
        ]);
    }
}
