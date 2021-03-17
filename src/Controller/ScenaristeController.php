<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ScenaristeController extends AbstractController
{
    /**
     * @Route("/scenariste", name="scenariste")
     */
    public function index(): Response
    {
        return $this->render('scenariste/index.html.twig', [
            'controller_name' => 'ScenaristeController',
        ]);
    }
}
